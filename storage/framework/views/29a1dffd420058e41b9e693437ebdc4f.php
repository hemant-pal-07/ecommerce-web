<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Product List</title>

<!-- Bootstrap CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
    body { background-color: #f8f9fa; }
    h1 { color: #ff6600; margin-bottom: 25px; text-align: center; }
    .btn-orange { background-color: #ff6600; color: white; }
    .btn-orange:hover { background-color: #e65c00; }
    #productTable_wrapper .dataTables_filter input {
        border-radius:5px;
        border:1px solid #ff6600;
        padding:5px;
    }
    #productTable_wrapper .dataTables_length select {
        border-radius:5px;
        border:1px solid #ff6600;
        padding:3px;
    }
    .badge-color { display:inline-block; width:20px; height:20px; border-radius:50%; margin:2px; border:1px solid #ccc; }
</style>
</head>
<body>

<?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container w-100 p-4">
    <h1>Product List</h1>

    <table id="productTable" class="display table table-bordered text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Old Price</th>
                <th>Stock</th>
                <th>Images</th>
                <th>Sizes</th>
                <th>Colors</th>
                <th>Visibility</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($p->p_id); ?></td>
                <td><?php echo e($p->p_name); ?></td>
                <td><?php echo e($p->category->c_name ?? $p->p_category_id); ?></td>
                <td>₹<?php echo e($p->p_price); ?></td>
                <td><?php echo e($p->p_old_price ?? '-'); ?></td>
                <td>
                    <?php if($p->p_stock > 0): ?>
                        <span class="badge bg-success"><?php echo e($p->p_stock); ?></span>
                    <?php else: ?>
                        <span class="badge bg-danger">Out of Stock</span>
                    <?php endif; ?>
                </td>
                
                 <td>
        <?php $__currentLoopData = $p->colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = $color->images ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <img src="<?php echo e(asset('storage/colors/' . $img->img_path)); ?>" alt="<?php echo e($img->img_alt_text); ?>" width="40px">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </td>

                <!-- Sizes Column -->
                <td>
                    <?php
                        $sizes = [];
                        foreach($p->colors as $color){
                            $sizes = array_merge($sizes, $color->sizes->pluck('size_name')->toArray());
                        }
                    ?>
                    <?php echo e(implode(', ', $sizes) ?: '-'); ?>

                </td>

                <!-- Colors Column -->
                <td>
                    <?php $__currentLoopData = $p->colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="badge-color" style="background: <?php echo e($color->color_code ?? '#ccc'); ?>" title="<?php echo e($color->color_name); ?>"></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>

                <td>
                    <?php if($p->p_visibility_status): ?>
                        <span class="badge bg-success">Visible</span>
                    <?php else: ?>
                        <span class="badge bg-secondary">Hidden</span>
                    <?php endif; ?>
                </td>

                <td><?php echo e(ucfirst($p->p_type)); ?></td>

                <td>
                    <a href="<?php echo e(route('product.edit', $p->p_id)); ?>" class="btn btn-sm btn-orange">Edit</a>
                    <form action="<?php echo e(route('product.destroy', $p->p_id)); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-sm btn-orange" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<script>
$(document).ready(function () {
    $('#productTable').DataTable({
        "pageLength": 5,
        "lengthMenu": [5, 10, 25, 50, 100,"All"],
        "order": [[0, "desc"]],
        "language": {
            "search": "Search Product:",
            "lengthMenu": "Show _MENU_ entries"
        }
    });

    // Row hover effect
    $('#productTable tbody tr').hover(
        function () { $(this).css('background-color', '#ffe6cc'); },
        function () { $(this).css('background-color', ''); }
    );
});
</script>

</body>
</html>
<?php /**PATH C:\laravel_git\ecommerce-web\resources\views/admin/productlist.blade.php ENDPATH**/ ?>