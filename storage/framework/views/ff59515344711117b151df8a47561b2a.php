<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view product</title>
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



       <div class="container mt-3 ">

        <h1 class="text-center p-3">Product Details</h1>
<div class="row g-4">
        <div class="col-md-4">
            <div class="card p-3 shadow-sm gap-3">
                <div class="mb-3">
                    <strong class="text-warning">Product Name:</strong>
                    <td class="ms-2 d-flex"><?php echo e($product->p_name); ?></td>
                </div>

                <div class="mb-3">
                    <strong class="text-warning">Price:</strong>
                    <td>₹<?php echo e($product->p_price); ?></td>
                </div>

                <div class="mb-3">
                    <strong class="text-warning">Category:</strong>
                    <td><?php echo e($product->category->c_name ?? $product->p_category_id); ?></td>
                </div>
                   <div class="mb-3">
                    <strong class="text-warning">Visibility_status</strong><br>

                <td>
                    <?php if($product->p_visibility_status): ?>
                        <span class="badge bg-success">Visible</span>
                    <?php else: ?>
                        <span class="badge bg-secondary">Hidden</span>
                    <?php endif; ?>
                </td>
                </div>
            </div>
        </div>

          <div class="col-md-8">
            <div class="card p-4 shadow-sm text-center">
                <h4 class="text-warning mb-3">Product banner</h4>




            </div>

  <div class="mb-3 card p-2 text-center mt-3">
    <h4 class="text-warning mb-3">Product Images</h4>
    <div class="d-flex flex-wrap justify-content-start gap-2 overflow-auto">
        <?php $__currentLoopData = $product->colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $color->images ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e(asset('storage/colors/' . $img->img_path)); ?>"
                     alt="<?php echo e($img->img_alt_text); ?>"
                     width="80px"
                     class="rounded-1 border ">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>


        </div>
    </div>



     <div class="border card mt-3 mb-3 p-3">
         <div class="mb-3 text-center p-1">
            <strong class="text-warning fs-5">Short Description</strong><br>
              <td class="mt-2"><?php echo e(Str::limit($product->p_short_description, 50)); ?></td>
        </div>

        </div>

         <div class="border card mt-3 mb-3 p-3">
        <div class="mb-3 text-center p-1">
            <strong class="text-warning fs-5">Long Description:</strong><br>
              <td class="mt-2"><?php echo e(Str::limit(strip_tags($product->p_long_description), 80)); ?></td>

        </div>
        </div>

    <div class="d-flex">
         <a href="<?php echo e(route('product.edit', $product->p_id)); ?>" class="btn btn-warning w-15 ms-3 mt-2 text-white">Edit Product list</a>
      <a href="<?php echo e(route('product.list')); ?>" class="btn btn-warning text-white w-15 ms-auto mt-2">Back to Products list</a>
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












</body>
</html>

<?php /**PATH C:\laravel_git\ecommerce-web\resources\views/admin/viewproduct.blade.php ENDPATH**/ ?>