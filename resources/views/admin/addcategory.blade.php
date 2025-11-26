
@extends('layouts.admin-layout')

@section('title', 'add-category')

@push('styles')

<style>
    body {
    background:#f8f9fa;
    font-family: 'Poppins',sans-serif;
    }

    h1 {
        color: #ff6600;
        margin-bottom: 25px;
        text-align: center;
    }
    .form-label {
        color: #ff6600;
        font-weight: 600;
    }
    .btn-orange {
        background-color: #ff6600;
        color: white;
    }
    .btn-orange:hover {
        background-color: #e65c00;
    }
    button{
        background: #ff6600;
        border:none;
        padding: 10px;
        color: white;
        border-radius: 5px;

    }
    .card{
        max-width: 750px;

    }
      select, textarea {
            padding: 10px;
            margin: 7px 0;
            border-radius: 7px;
            align-items: center;
            width: 100%;
            border: 1px solid rgb(235, 234, 234);
        }
        input{
            padding: 10px;
            margin: 7px 0;
            border-radius: 7px;
            align-items: center;
             width: 100%;
             border:1px solid orangered;
        }

</style>
 @endpush

</head>
<body>

       @section('content')

       <div class="card w-100 mx-auto mt-4">
        <div class="card-header text-center bg-warning text-white">
            <h4>Add Category</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf


    <label for="main_category" class="p-1 mt-1 form-label">Main Category</label>
<select id="main_category" name="main_category" required>
    <option value="">Select Main Category</option>
    <option value="men">Men Category</option>
    <option value="women">Women Category</option>
    <option value="kids">Kids Category</option>
</select>


<label for="category" class="p-1 mt-1 form-label">Category</label>
<select id="category" name="category" required>
    <option value="">Select Category</option>
</select>

                 {{-- Category Name --> --}}
                {{-- <div class="mb-3">
                    <label class="form-label text-center">Category Name</label>
                    <input type="text" name="c_name" class="form-control" value="{{ old('c_name') }}" required>
                    @error('c_name') <small class="text-danger">{{ $message }}</small> @enderror
                </div> --}}

                <!-- Banner Image -->
                <div class="mb-3">
                    <label class="form-label">Banner Image</label>
                    <input type="file" name="c_banner_img" class="form-control" accept="image/*" onchange="previewBanner(event)">
                    @error('c_banner_img') <small class="text-danger">{{ $message }}</small> @enderror

                    <img id="bannerPreview" src="#" style="display:none; height: 120px; margin-top:10px;" />
                </div>

                <!-- Category Image -->
                <div class="mb-3">
                    <label class="form-label">Category Image</label>
                    <input type="file" name="c_image" class="form-control" >

                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="c_description" class="form-control" rows="4" required>{{ old('c_description') }}</textarea>
                    @error('c_description') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                 <div class="text-center p-2">
                <button type="submit" class="button text-center">Save Category</button>
                  </div>
            </form>

        </div>
    </div>

</div>

@endsection




@push('scripts')


<script>
    const categories = {
        men: ["Shirts", "Pants", "Caps", "Shoes"],
        women: ["Dresses", "Bags", "Heels", "Jewelry"],
        kids: ["Books", "Toys", "Kids Clothes", "School Bags"]
    };

    const mainCategory = document.getElementById("main_category");
    const category = document.getElementById("category");

    mainCategory.addEventListener("change", function () {
        const selected = this.value;

        // Reset dropdown
        category.innerHTML = '<option value="">Select Category</option>';

        if (categories[selected]) {
            categories[selected].forEach(item => {
                const option = document.createElement("option");
                option.value = item.toLowerCase();
                option.textContent = item;
                category.appendChild(option);
            });
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            confirmButtonColor: '#ff6600',
        });
    @endif
</script>

@endpush

</body>
</html>
