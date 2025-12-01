 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show product to web page </title>
</head>
<body>
<div class="container py-5">
    <h2 class="mb-4">Our Products</h2>
    <div class="row">
        <?php if($products->count() > 0): ?>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 mb-4">
 <div class="product-banner">
    <span class="banner-title">Product Banner</span>

  <?php if($p->category && $p->category->c_banner_img): ?>
        <img src="<?php echo e(asset($p->category->c_banner_img)); ?>" height="100px" width="200px">
    <?php endif; ?>


</div>                      <div class="card-body">
                            <h5 class="card-title"><?php echo e($p->p_name); ?></h5>
                            <p class="card-text">
                                Category: <?php echo e($p->category->c_name ?? 'No Category'); ?><br>
                                Price: ₹<?php echo e($p->p_price); ?>

                                <?php if($p->p_old_price): ?>
                                    <del class="text-muted">₹<?php echo e($p->p_old_price); ?></del>
                                <?php endif; ?>
                            </p>
                            <?php if($p->p_stock > 0): ?>
                                <span class="badge bg-success">In Stock: <?php echo e($p->p_stock); ?></span>
                            <?php else: ?>
                                <span class="badge bg-danger">Out of Stock</span>
                            <?php endif; ?>
                        </div>
                        <div class="card-footer text-center">
                            <a href="<?php echo e(route('product.view', $p->p_id)); ?>" class="btn btn-primary btn-sm">View</a>
                            <button class="btn btn-success btn-sm">Add to Cart</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <p>No products found.</p>
        <?php endif; ?>
    </div>
</div>




</body>
</html>



<?php /**PATH C:\laravel_git\ecommerce-web\resources\views/addproducts.blade.php ENDPATH**/ ?>