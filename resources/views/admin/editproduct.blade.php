<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; background: rgb(245,243,241); }
        input, select, textarea { width: 100%; padding: 10px; margin: 7px 0; border: 1px solid orangered; border-radius: 7px; }
        form { background: white; padding: 25px; border-radius: 7px; border: 1px solid orangered; }
        button { background: orange; border: none; }
        button:hover { background: orangered; color: white; }
        .addcolor { background: #fff; border: 1px solid orange; margin-bottom: 20px; padding: 15px; border-radius: 5px; }
    </style>
</head>
<body>

@include('partials.sidebar')
@include('partials.header')



<div class="container w-75 p-3">
    <form action="{{ route('product.update', $product->p_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <h1 class="text-center text-warning">UPDATE PRODUCT</h1>

        <!-- Product Basic Info -->
        <label>Product Name</label>
        <input type="text" name="p_name" value="{{ $product->p_name }}">

        <label>Category</label>
        <select name="p_category_id">
            @foreach($categories as $cat)
                <option value="{{ $cat->c_id }}" @selected($cat->c_id == $product->p_category_id)>{{ $cat->c_name }}</option>
            @endforeach
        </select>

        {{-- <label for="category" class="p-1 mt-3">Category</label>
<select id="category" name="p_category_id" class="text-secondary" required>
    <option value="">Select Category</option>
    @foreach($categories as $cat)
        <option value="{{ $cat->c_id }}" @selected(old('p_category_id', $product->p_category_id ?? '') == $cat->c_id)>
            {{ $cat->c_name }}
        </option>
    @endforeach
</select> --}}



{{-- <label for="category" class="p-1 mt-3">Category</label>
<select id="category" name="p_category_id" class="form-select" required>
    <option value="">Select Category</option>
    @foreach($categories as $category)
        <option value="{{ $category->c_id }}" {{ old('p_category_id') == $category->c_id ? 'selected' : '' }}>
            {{ $category->c_name }}
        </option>
    @endforeach
</select> --}}



        <label>Price</label>
        <input type="number" name="p_price" value="{{ $product->p_price }}">

        <div class="row">
            <div class="col-md-4">
                <label>Old Price</label>
                <input type="text" name="p_old_price" value="{{ $product->p_old_price }}">
            </div>
            <div class="col-md-4">
                <label>Stock</label>
                <input type="number" name="p_stock" value="{{ $product->p_stock }}">
            </div>
        </div>

        <label>Visibility</label>
        <select name="p_visibility_status">
            <option value="1" @selected($product->p_visibility_status == 1)>Visible</option>
            <option value="0" @selected($product->p_visibility_status == 0)>Invisible</option>
        </select>

        <label>Product Type</label>
        <input type="text" name="p_type" value="{{ $product->p_type }}">

        <hr>

        <!-- Colors Section -->
        <h4 class="text-warning">Product Colors</h4>
        <div id="colorcontainer">
            @foreach($product->colors as $i => $color)
            <div class="addcolor" data-color-index="{{ $i }}">
                <div class="d-flex">
                    <h5>Color {{ $i+1 }}</h5>
                    <button type="button" class="btn btn-danger btn-sm ms-auto removeBtn">Remove</button>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label>Color Name</label>
                        <input type="text" name="colorname[]" value="{{ $color->color_name }}" required>
                    </div>
                    <div class="col-md-4">
                        <label>Color Code</label>
                        <input type="text" name="colorcode[]" value="{{ $color->color_code }}" required>
                    </div>
                    <div class="col-md-4">
                        <label>Price Adjustment</label>
                        <input type="text" name="priceadjustment[]" value="{{ $color->color_price_adjustment }}">
                        <label class="mt-2">Existing Images</label>
                        <div class="d-flex flex-wrap">
                            @foreach($color->images as $img)
                                <img src="{{ asset('storage/colors/'.$img->img_path) }}" width="70" height="70" class="me-2 mb-2">
                            @endforeach
                        </div>
                    </div>
                    <label class="mt-2">Upload New Images</label>
                    <input type="file" name="color_images[{{ $i }}][]" multiple>
                </div>

                <!-- Sizes for this color -->
                <div class="size-section mt-3">
                    <label>Sizes</label>
                    <div class="sizeContainer">
                        @foreach($color->sizes as $sIndex => $s)
                        <div class="row bg-light p-2 mb-2">
                            <input type="hidden" name="size_id[{{ $i }}][]" value="{{ $s->id }}">
                            <div class="col-md-6">
                                <label>Size Name</label>
                                <input type="text" name="sizename[{{ $i }}][]" value="{{ $s->size_name }}">
                            </div>
                            <div class="col-md-6">
                                <label>Price Adjustment</label>
                                <input type="number" name="sizepriceadjustment[{{ $i }}][]" value="{{ $s->size_price_adjustment }}">
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button type="button" class="btn btn-warning mt-2 add-size-btn">+ Add Size</button>
                </div>
            </div>
            @endforeach
        </div>

        <button type="button" class="btn btn-warning w-25 mt-3" id="addcolorbtn">+ Add Color</button>

        <!-- Short & Long Description -->
        <label class="mt-4">Short Description</label>
        <textarea name="p_short_description" rows="3">{{ $product->p_short_description }}</textarea>

        <label class="mt-4">Long Description</label>
        <textarea id="productDescription" name="p_long_description">{{ $product->p_long_description }}</textarea>

        <div class="text-center mt-4">
            <button type="submit" class="btn text-white w-50 p-3 border bg-warning">Update Product</button>
        </div>
    </form>
</div>

<!-- JS Files -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
$("#productDescription").summernote({ height: 200 });

// Page load: remove any extra empty color divs
$(document).ready(function(){
    $('.addcolor').each(function(i){
        if($(this).find('input[name="colorname[]"]').val() == "" && i >= {{ count($product->colors) }}) {
            $(this).remove();
        }
    });
});

// Set starting index for new colors
let colorIndex = {{ count($product->colors) }};

// Add new color
$('#addcolorbtn').click(function(e){
    e.preventDefault();

    // HTML template for new color
    let html = `
        <div class="addcolor p-3 mb-3" data-color-index="${colorIndex}">
            <div class="d-flex">
                <h5>Color ${colorIndex+1}</h5>
                <button type="button" class="btn btn-danger btn-sm ms-auto removeBtn">Remove</button>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label>Color Name</label>
                    <input type="text" name="colorname[]" required>
                </div>
                <div class="col-md-4">
                    <label>Color Code</label>
                    <input type="text" name="colorcode[]" required>
                </div>
                <div class="col-md-4">
                    <label>Price Adjustment</label>
                    <input type="text" name="priceadjustment[]">
                </div>
                <label class="mt-2">Upload Images</label>
                <input type="file" name="color_images[${colorIndex}][]" multiple>
            </div>

            <div class="size-section mt-3">
                <label>Sizes</label>
                <div class="sizeContainer"></div>
                <button type="button" class="btn btn-warning mt-2 add-size-btn">+ Add Size</button>
            </div>
        </div>
    `;

    $('#colorcontainer').append(html);
    colorIndex++; // Increment for next new color
});

// Remove color
$('#colorcontainer').on('click', '.removeBtn', function(){
    $(this).closest('.addcolor').remove();
});

// Add new size for a color
$('#colorcontainer').on('click', '.add-size-btn', function(){
    let parentColor = $(this).closest('.addcolor');
    let idx = parentColor.data('color-index');

    parentColor.find('.sizeContainer').append(`
        <div class="row bg-light p-2 mb-2">
              <input type="hidden" name="size_id[${idx}][]" value="">
            <div class="col-md-6">
                <label>Size Name</label>
                <input type="text" name="sizename[${idx}][]" placeholder="Size Name">
            </div>
            <div class="col-md-6">
                <label>Price Adjustment</label>
                <input type="number" name="sizepriceadjustment[${idx}][]" placeholder="Price Adjustment">
            </div>
        </div>
    `);
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Product updated!',
            text: '{{ session("success") }}',
            showConfirmButton: false,
            timer: 2000
        });
    @endif
});
</script>

</body>
</html>
