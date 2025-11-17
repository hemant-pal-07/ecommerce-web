<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>new product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
      <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">


</head>
<style>
    *{
        padding: 0;
        margin: 0;

    }
     body{
          font-family: 'Poppins',sans-serif;
          background:rgb(245, 243, 241);
    }
           select, textarea {
            padding: 10px;
            margin: 7px 0;
            border-radius: 7px;
            align-items: center;
            width: 100%;
            border: 1px solid orangered;
        }
        input{
            padding: 10px;
            margin: 7px 0;
            border-radius: 7px;
            align-items: center;
             width: 100%;
             border:1px solid orangered;
        }
        form{
            border: 1px solid orangered;
            background: white;
            border-radius: 7px;
        }
        h1{
            color: orange;
            margin-top:-20px;
        }
        .color-option {
  display: flex;
  align-items: center;
  gap: 8px;
  cursor: pointer;
  margin: 6px;
}

.color-box {
  width: 22px;
  height: 22px;
  border-radius: 50%;
  border:1px solid grey;
  display: inline-block;
}

input[type="checkbox"] {
  display: none;
}

input[type="checkbox"]:checked + .color-box{
  border: 11px solid orange;
}
.size-box {
  padding: 6px 14px;
  border: 1px solid #444;
  border-radius: 6px;
  cursor: pointer;
  font-weight: 500;
  transition: 0.2s;
  display: inline-block;
  margin: 4px;
} */
input[type="checkbox"] { display: none; }

input[type="checkbox"]:checked + .size-box {
  background: #000;
  color: #fff;
  border-color: #000;
}
button{
    background-color: orange;
    border: 0;
      transition: all 0.3s;

}
button:hover{
    background-color: orangered;
    cursor: pointer;
    color: white;

}
  .form-section {
      background: white;
      padding: 20px;
      border-radius: 8px;
     border: 1px solid orangered;
      max-width: 650px;
      margin:20px auto;
    }
    .color-input {
      width: 70px;
      height: 38px;
      border: 1px solid #ced4da;
      border-radius: 4px;
    }
    .add-btn {
      background-color:orangered;
      color: white;
      width: 100%;
    }
    .form-control{
        border:1px solid orangered;
    }






</style>
<body>


   @include('partials.sidebar')


   @include('partials.header')


   @if(session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
@endif



   <div class="container w-75 p-3">
    <div class="row">

     <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="p-5">
        @csrf
         <h1 class=" text-center">ADD PRODUCT DETAILS</h1>

        <label for="productName" class="p-1 mt-3">Product Name</label>
        <input type="text" id="productName" name="p_name" placeholder="Enter your product name" required>


        <label for="category"  class="p-1 mt-3">Category</label>
        <select id="category" name="p_category_id" class="text-secondary" required>
              <option value="">Select Category</option>
    <option value="1">Electronics</option>
    <option value="2">Clothing</option>
    <option value="3">Books</option>
    <option value="4">Accessories</option>
        </select>

                <label for="price" class="p-1 mt-3">Price</label>
        <input type="number" id="price" name="p_price" placeholder="Enter your product price" required>




        <div class="form-container">
    <div class="row mb-3 mt-4">
      {{-- <div class="col-md-4">
        <label>Base Price/old price</label>
        <input type="text" name="p_price" class="form-control textarea" placeholder="">
      </div> --}}
      <div class="col-md-4">
        <label>Old Price (Optional)</label>
        <input type="text" name="p_old_price" class="form-control textarea" placeholder="">
      </div>
      <div class="col-md-4">
        <label>Stock Quantity</label>
        <input type="number" name="p_stock" class="form-control textarea" value="0">
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <label>Visibility Status</label>
       <select class="form-control textarea" name="p_visibility_status">
          <option value="1" selected>Visible</option>
          <option value="0">Invisible</option>
        </select>
      </div>
      <div class="col-md-6">
        <label>Product Type</label>
        <input type="text" class="form-control textarea" name="p_type" placeholder="e.g. regular, featured">
      </div>
    </div>
  </div>





   <label class="form-label mt-4 ms-2">Select Product Colors</label>
  <div class="color-card">

    <div class=" mb-3 border border-warning rounded-0 " id="colorcontainer">


    </div>

    <button class="btn btn-warning  w-25 p-2" id="addcolorbtn">+ Add Color</button>
  </div>

       <label class="form-label mt-4 ms-2">Short Description</label>
       <textarea class="form-control textarea" rows="3" placeholder="Enter short description" name="p_short_description" required></textarea>


         <div class="container p-3">
    <div class="mb-1 mt-4">
      <label for="productDescription" class="form-label">Product Long Description</label>
      <textarea id="productDescription" name="p_long_description"></textarea>
    </div>
  </div>

        <div class="p-2 text-center rounded-2 ">
        <button class=" p-3 text-center text-white rounded-2 w-50" type="submit">Add Product in your web <i class="bi bi-arrow-right" class="g-3"></i></button>
        </div>
     </form>
    </div>
  </div>




   <!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
      $(document).ready(function() {
        $("#menubtn").click(function(){

          const sidebar = $("#sidebar");
          const mainContent = $(".main-content");


          if (sidebar.css("margin-left") === "0px") {
            sidebar.animate({ marginLeft: "-190px" }, );
            mainContent.animate({ marginLeft: "60px" }, );

          } else {
            sidebar.animate({ marginLeft: "0px" } );
            mainContent.animate({ marginLeft: "250px" } );

          }
        });
      });
    </script>



<script>
  $(document).ready(function() {
    $("#hamburger").click(function() {
      $("#sidebar1").toggleClass("active");
    });
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
 <script>
    $('#productDescription').summernote({
      placeholder: 'Type product description...',
      tabsize: 2,
      height: 200
    });
  </script>




                                    {{-- jquery off add color --}}

<script>
$(document).ready(function() {
    let colorCount = 0;

    // Add Color button click
    $('#addcolorbtn').click(function(e) {
             let colorIndex = colorCount++;
        e.preventDefault();

        let newColorBox = $(`
            <div class="addcolor p-3 mb-3 rounded-0 border-top border-2 border-warning " data-color-index="${colorIndex}">
                <div class="d-flex align-item-center">
                <h5><strong>Color ${colorIndex+1}</strong></h5>
                  <button class="btn btn-sm btn-danger removeBtn mt-0 ms-auto d-block">Remove Color</button>
                 </div>

                <div class="row mt-3">
                    <div class="col-md-4 mb-2 ">
                        <label>Color Name</label>
                        <input type="text" class="form-control" name="colorname[]" placeholder="Color Name">
                    </div>
                    <div class="col-md-4 mb-2">
                        <label>Color code</label>
                        <input type="text" class="form-control" name="colorcode[]" placeholder="Color Code (e.g. #FF0000)">
                    </div>
                    <div class="col-md-4 mb-2">
                     <label>Price Adjustment</label>
                        <input type="text" class="form-control" name="priceadjustment[]" placeholder="Price Adjustment">
                    </div>
                </div>

                <div class="mt-3 mb-2">
                    <label class="form-label">Images (for this color)</label>
                  <input type="file" name="color_images[${colorIndex}][]" multiple>
                   </div>

                  <div class="mt-3 size-section">
                    <label class="form-label">Sizes</label>
                    <div class="sizeContainer"></div>
                    <button class=" p-2 add-size-btn w-100 mt-2" type="button">+ Add Size</button>
                </div>


            </div>
        `);


        $('#colorcontainer').append(newColorBox);
        count++;
    });

    // Remove Color button using event delegation
    $('#colorcontainer').on('click', '.removeBtn', function(e) {
        e.preventDefault();
        $(this).closest('.addcolor').fadeOut(300, function() {
            $(this).remove();
        });
    });
});

// size add button----->
    // Add Size inside the respective color
$('#colorcontainer').on('click', '.add-size-btn', function(e) {
        e.preventDefault();
let sizeContainer = $(this).closest('.size-section').find('.sizeContainer');
let colorIndex = $(this).closest('.addcolor').data('color-index');

        let newSizeBox = $(`
            <div class="size-box row d-flex align-items-center bg-light p-2 mb-2">
                <div class="col-md-6 mb-2">
                    <label>Size Name</label>
                    <input type="text" class="form-control" name="sizename[${colorIndex}][]" placeholder="Size Name">
                </div>
                <div class="col-md-6 mb-2">
                    <label>Price Adjustment</label>
                    <input type="number" class="form-control" name="sizepriceadjustment[${colorIndex}][]" placeholder="Price Adjustment">
                </div>
            </div>
        `);

        sizeContainer.append(newSizeBox);
    });





</script>

</body>
</html>
