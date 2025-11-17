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


   <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


   <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


   <?php if(session('success')): ?>
    <div class="alert alert-success text-center">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

      <div class="container w-75 p-3">
    <div class="row">

   <form action="<?php echo e(route('product.update', $product->p_id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <label>Product Name</label>
    <input type="text" name="p_name" value="<?php echo e(old('p_name', $product->p_name)); ?>">

    <label>Category</label>
    <select name="p_category_id">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($cat->c_id); ?>" <?php echo e($product->p_category_id == $cat->c_id ? 'selected' : ''); ?>>
                <?php echo e($cat->c_name); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <label>Price</label>
    <input type="number" name="p_price" value="<?php echo e(old('p_price', $product->p_price)); ?>">

    <!-- Colors -->
    <div id="colorcontainer">
        <?php $__currentLoopData = $product->colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="color-box" data-index="<?php echo e($index); ?>">
            <label>Color Name</label>
            <input type="text" name="colorname[<?php echo e($index); ?>]" value="<?php echo e($color->color_name); ?>">

            <label>Color Code</label>
            <input type="text" name="colorcode[<?php echo e($index); ?>]" value="<?php echo e($color->color_code); ?>">

            <label>Price Adjustment</label>
            <input type="number" name="priceadjustment[<?php echo e($index); ?>]" value="<?php echo e($color->color_price_adjustment); ?>">

            <!-- Sizes for this color -->
            <div class="sizeContainer">
                <?php $__currentLoopData = $color->sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sIndex => $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="size-box">
                    <input type="text" name="sizename[<?php echo e($index); ?>][<?php echo e($sIndex); ?>]" value="<?php echo e($size->size_name); ?>">
                    <input type="number" name="sizepriceadjustment[<?php echo e($index); ?>][<?php echo e($sIndex); ?>]" value="<?php echo e($size->size_price_adjustment); ?>">
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <button type="submit">Update Product</button>
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
                    <input type="file" name="color_images[]" multiple>
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
<?php /**PATH C:\laravel_git\ecommerce-web\resources\views/admin/editproduct.blade.php ENDPATH**/ ?>