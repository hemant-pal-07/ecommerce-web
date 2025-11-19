<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit Category Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

<style>
    body { background:#f8f9fa; }
    h1 { color: #ff6600; margin-bottom: 25px; text-align: center; }
    .form-label { color: #ff6600; font-weight: 600; }
    .btn-orange { background-color: #ff6600; color: white; }
    .btn-orange:hover { background-color: #e65c00; }
    button{ background: #ff6600; border:none; padding: 10px; color: white; border-radius: 5px; }
    .card{ max-width: 750px; }
</style>
</head>
<body>

<?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="card w-100 mx-auto mt-4">
    <div class="card-header text-center bg-warning text-white">
        <h4>Edit Category</h4>
    </div>

    <div class="card-body">

        <form action="<?php echo e(route('category.update', $category->c_id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?> <!-- Important for updating -->

            <!-- Category Name -->
            <div class="mb-3">
                <label class="form-label text-center">Category Name</label>
                <input type="text" name="c_name" class="form-control" value="<?php echo e(old('c_name', $category->c_name)); ?>" required>
                <?php $__errorArgs = ['c_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Banner Image -->
            <div class="mb-3">
                <label class="form-label">Banner Image</label>
                <input type="file" name="c_banner_img" class="form-control" accept="image/*" onchange="previewBanner(event)" multiple>
                <?php $__errorArgs = ['c_banner_img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <h6 class="mt-3">Existing banner</h6>
                <?php if($category->c_banner_img): ?>
                    <img id="bannerPreview" src="<?php echo e(asset($category->c_banner_img)); ?>" style="height: 100px; margin-top:10px;" />
                <?php else: ?>
                    <img id="bannerPreview" src="#" style="display:none; height:100px; margin-top:10px;" />
                <?php endif; ?>
            </div>

            <!-- Category Image -->
            <div class="mb-3">
                <label class="form-label">Category Image</label>
                <input type="file" name="c_image" class="form-control">

                <h6 class="mt-3">Existing image</h6>
                <?php if($category->c_image): ?>
                    <img src="<?php echo e(asset($category->c_image)); ?>" style="height: 120px; margin-top:10px;">
                <?php endif; ?>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="c_description" class="form-control" rows="4" required><?php echo e(old('c_description', $category->c_description)); ?></textarea>
                <?php $__errorArgs = ['c_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="text-center p-2">
                <button type="submit" class="button text-center">Update Category</button>
            </div>
        </form>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    <?php if(session('success')): ?>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '<?php echo e(session('success')); ?>',
            confirmButtonColor: '#ff6600',
        });
    <?php endif; ?>

    function previewBanner(event) {
        var output = document.getElementById('bannerPreview');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.style.display = 'block';
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>

<?php /**PATH C:\laravel_git\ecommerce-web\resources\views/admin/editcategory.blade.php ENDPATH**/ ?>