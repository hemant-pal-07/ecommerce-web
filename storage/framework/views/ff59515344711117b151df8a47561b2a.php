 

 <?php $__env->startSection('title', 'View-product'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: #f5f3f1;
    }
    .card-1{
        height:auto;
        border: 1px solid rgb(201, 200, 200);
        background:white;

    }

      .product-banner {
        position: relative;
        overflow: hidden;
        border-radius: 20px;
        /* box-shadow: 0 8px 20px rgba(0,0,0,0.15); */
        width: 100%;

    }

    .product-banner img {
        width: 100%;
        height: 330px;
        object-fit: cover;
        transition: all 0.5s;
        border-radius: 20px;
    }

    .product-banner:hover img {
        transform: scale(1.05);
    }

    .banner-title {
        position: absolute;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        background:rgb(252, 95, 39);
        padding: 8px 25px;
        border-radius: 20px;
        font-size: 22px;
        font-weight: 600;
        color: white;
        backdrop-filter: blur(5px);

    }
    .product-modern-card-2 {
        border-radius: 15px;
        background: orangered;
        padding: 35px 40px;
        box-shadow: 0 12px 40px rgba(0,0,0,0.12);
        justify-content: space-between;
        align-items: center;
        gap: 40px;
        flex-wrap: wrap;
        border: 1px solid #eee;
    }


       .product-modern-card {
        border-radius: 15px;
        background: orangered;
        padding: 35px 40px;
        box-shadow: 0 12px 40px rgba(0,0,0,0.12);
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 40px;
        flex-wrap: wrap;
        border: 1px solid #eee;
    }

    .detail-box {
        background: #fff;
        padding: 18px 25px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        flex: 1;
        min-width: 220px;
        border: 1px solid #f0f0f0;
        transition: 0.3s ease;
    }

    .detail-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }

    .detail-title {
        font-size: 14px;
        font-weight: 600;
        color: #777;
        margin-bottom: 6px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .csi{
        background: orangered;
    }






</style>
<?php $__env->stopPush(); ?>



<?php $__env->startSection('content'); ?>

  <h1 class="mb-3 fw-bold">Product Details</h1>

<div class="container-fluid card-1 rounded-3 w-100 p-4">
    <div class="row">
 <div class="product-banner">
    <span class="banner-title">Product Banner</span>

  <?php if($product->category && $product->category->c_banner_img): ?>
        <img src="<?php echo e(asset($product->category->c_banner_img)); ?>">
    <?php endif; ?>


</div>




   <div class="container mt-4">
    <div class="product-modern-card">

        <div class="detail-box">
            <div class="detail-title">Product Name</div>
             <h2 class="fw-bold text-info"><?php echo e($product->p_name); ?></h2>
        </div>

         <div class="detail-box">
            <div class="detail-title">Main Category</div>
             <h2 class="fw-semibold text-danger">
 <td><?php echo e($product->mainCategory->cat_name ?? 'No Main Category'); ?></td>
</h2>
        </div>

        <div class="detail-box">
            <div class="detail-title">Category</div>
             <h2 class="fw-semibold text-primary">
          <?php echo e($product->category->c_name ?? $product->p_category_id); ?>

             </h2>
        </div>



        <div class="detail-box">
            <div class="detail-title">Price</div>
            <h4 class="text-danger fw-bold">₹<?php echo e($product->p_price); ?></h4>
        </div>

        <div class="detail-box">
            <div class="detail-title">Visibility</div>
             <?php if($product->p_visibility_status): ?>
                    <span class="badge fs-6 bg-success">Visible</span>
                <?php else: ?>
                    <span class="badge bg-secondary">Hidden</span>
                <?php endif; ?>
        </div>

    </div>
</div>




<div class="text-center  d-flex ms-auto justify-content-center">
<h5 class=" csi  fw-semibold p-3 text-center w-100 rounded-3  mt-4  text-white">Colors • Sizes • Image Preview</h5>
</div>
<?php $__currentLoopData = $product->colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="p-3 mb-3 rounded-4 shadow-sm"
     style="border:1px solid #fd3713; background:white;">

    <!-- COLOR SECTION -->
    <div class=" align-items-center gap-3 mb-3">
        <h4 class=" csi text-white rounded-3 w-25 text-center">Color</h4>
        <span style="
            width:35px; height:35px;
            border-radius:5px;
            display:inline-block;
            margin:5px 20px;
            border:2px solid #fdb93a;
            background: <?php echo e($color->color_code); ?>;
        "></span>
  <div class="d-flex">
        <h6 class="fw-bold ms-4"><?php echo e($color->color_name); ?></h6>
            <div style="font-size:13px; font-weight:600; border:1px solid rgb(197, 195, 195); margin-left:10px; margin-top:-10px; color:black;" class="rounded-2 p-2">
                 ₹ <?php echo e($color->color_price_adjustment); ?>

                </div>
    </div>
    </div>

    <!-- IMAGES OF THIS COLOR -->
   <h4 class=" csi text-white rounded-3 w-25 text-center">Images</h4>

    <div class="d-flex flex-wrap gap-2 mb-3 ms-1">
         <?php $__currentLoopData = $color->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img src="<?php echo e(asset('storage/colors/' . $img->img_path)); ?>"
                 style="width:70px; height:70px; object-fit:cover; border-radius:8px; border:1px solid #ffb243;" class="preview-img" onclick="openPreview(this)">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <!-- SIZES OF THIS COLOR -->
       <h4 class="csi text-white rounded-3 w-25 text-center">Sizes</h4>

    <div class="d-flex flex-wrap gap-2 ms-1">

        <?php $__currentLoopData = $color->sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="px-3 py-1 border rounded fw-semibold d-flex align-items-center gap-2"
                 style="border-color:#ffb243; background:#fff;">


                <?php echo e($size->size_name); ?>


                
                <?php if($size->image): ?>
                    <img src="<?php echo e(asset('uploads/products/'.$size->image)); ?>"
                         style="width:60px; height:40px; object-fit:cover; border-radius:6px; border:1px solid #ffb243;" class="preview-img" onclick="openPreview(this)">
                <?php endif; ?>

                <div style="font-size:13px; font-weight:600;  margin-left:5px; margin-top:2px; color:black;">
                 ₹ <?php echo e($size->size_price_adjustment); ?>

                </div>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





        <div class="text-center  d-flex ms-auto justify-content-center">
<h5 class=" csi  fw-semibold p-3 text-center w-100 rounded-3  mt-4  text-white">Product description</h5>
</div>

<div class="container mt-4">
    <div class="product-modern-card-2">

           <div class="detail-box">
            <div class="detail-title">Short description</div>
             <p><?php echo e(Str::limit($product->p_short_description,400)); ?></p>
        </div>

            <div class="detail-box mt-3">
            <div class="detail-title">Long description</div>
             <p><?php echo $product->p_long_description; ?></p>
        </div>



    </div>
</div>




  </div>
</div>




<?php $__env->stopSection(); ?>
<div id="imgPreviewModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.8); justify-content:center; align-items:center; z-index:1000; transition:all 1s;">
    <span style="position:absolute; top:20px; right:30px; color:white; font-size:30px; cursor:pointer; transition:all 1s;" onclick="closePreview()">&times;</span>
    <img id="previewImg" src="" style="max-width:90%; max-height:90%; border-radius:10px; box-shadow:0 0 15px white;">
</div>




<?php $__env->startPush('scripts'); ?>


<script>
function openPreview(img) {
    const modal = document.getElementById('imgPreviewModal');
    const preview = document.getElementById('previewImg');
    preview.src = img.src;  // set clicked image src
    modal.style.display = 'flex'; // show modal
}

function closePreview() {
    document.getElementById('imgPreviewModal').style.display = 'none';
}

// Optional: close modal if clicked outside image
document.getElementById('imgPreviewModal').addEventListener('click', function(e) {
    if(e.target.id === 'imgPreviewModal') {
        closePreview();
    }
});
</script>

<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel_git\ecommerce-web\resources\views/admin/viewproduct.blade.php ENDPATH**/ ?>