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
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

<style>
    body { background-color: #f8f9fa; }
    h1 { color: #ff6600; margin-bottom: 25px; text-align: center; }
    .btn-orange { background-color: #ff6600; color: white; }
    .btn-orange:hover { background-color: #e65c00; }
    .badge-color { display:inline-block; width:20px; height:20px; border-radius:50%; margin:2px; border:1px solid #ccc; }
    .preview-img { cursor:pointer; border:1px solid #ddd; padding:2px; border-radius:3px; }

    /*********** DATATABLE GLOBAL ************/
.dataTables_wrapper {
    font-family: 'Poppins', sans-serif;
    padding: 5px;

}

#productTable thead th {
    background-color: #ff6600 !important;
    color: white !important;
     text-align: center;
     align-items: center;
     padding: 10px;

}


/* Table rows */
#productTable tbody tr td {
    vertical-align: middle;
    font-size: 14px;

}

/* Hover Effect */
#productTable tbody tr:hover {
    background-color: #fff1e6 !important;
}

/*********** SEARCH BOX ************/
.dataTables_wrapper .dataTables_filter {
    margin-bottom: 15px;
}

.dataTables_wrapper .dataTables_filter label {
    font-weight: 500;
    color: #ff6600;
}

.dataTables_wrapper .dataTables_filter input {
    border: 1px solid #ff6600;
    border-radius: 5px;
    padding: 6px 12px;
    outline: none;
    transition: all 0.2s ease-in-out;
}

.dataTables_wrapper .dataTables_filter input:focus {
    border-color: #e65c00;
    box-shadow: 0 0 0 0.1rem rgba(255,102,0,0.25);

}

/*********** LENGTH DROPDOWN ************/
.dataTables_wrapper .dataTables_length label {
    color: #ff6600;
    font-weight: 500;
}

.dataTables_wrapper .dataTables_length select {
    border: 1px solid #ff6600;
    border-radius: 6px;
    padding: 5px 8px;

}

/*********** PAGINATION ************/
.dataTables_wrapper .dataTables_paginate {
    margin-top: 15px;
    text-align: center !important;
}

.dataTables_wrapper .dataTables_paginate .paginate_button {
    background: white !important;
    border: 1px solid #ff6600 !important;
    color: #ff6600 !important;
    padding: 6px 14px !important;
    margin: 2px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 14px;
    transition: 0.3s ease;
}

.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background: #ff6600 !important;
    color: white !important;
}

.dataTables_wrapper .dataTables_paginate .paginate_button.current {
    background: #ff6600 !important;
    color: white !important;
    border-radius: 8px;
    font-weight: bold;
}

.dataTables_wrapper .dataTables_paginate .paginate_button.disabled {
    background: #f1f1f1 !important;
    color: #aaa !important;
    border: 1px solid #ddd !important;
}

/*********** TABLE INFO TEXT ************/
.dataTables_wrapper .dataTables_info {
    color: #444;
    font-size: 14px;
    margin-top: 8px;

}

/*********** TABLE BORDER + SHADOW ************/
#productTable {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);

}

#productTable th, #productTable td {
    border: 1px solid #f1f1f1 !important;

}

/*********** MOBILE RESPONSIVE ************/







</style>
</head>
<body>

<?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container p-4">
    <h1 class="p-2">Product List</h1>

    <table id="productTable" class="display table table-bordered text-center">
        <thead>
            <tr class="text-white bg-warning">
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Old Price</th>
                <th>Stock</th>
                <th>Images</th>
                <th>Sizes</th>
                <th>Colors</th>
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
                <td>₹<?php echo e($p->p_old_price ?? '-'); ?></td>
                <td>
                    <?php if($p->p_stock > 0): ?>
                        <span class="badge bg-success"><?php echo e($p->p_stock); ?></span>
                    <?php else: ?>
                        <span class="badge bg-danger">Out of Stock</span>
                    <?php endif; ?>
                </td>

                <!-- Product Images (scrollable) -->
                <td>
                    <div class="d-flex gap-1 overflow-auto" style="white-space: nowrap; max-width:150px; margin:auto;">
                        <?php $__currentLoopData = $p->colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $color->images ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <img src="<?php echo e(asset('storage/colors/' . $img->img_path)); ?>"
                                     alt="<?php echo e($img->img_alt_text); ?>" width="40px" class="rounded border preview-img">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </td>

                <!-- Sizes -->
                <td>
                    <?php
                        $sizes = [];
                        foreach($p->colors as $color){
                            $sizes = array_merge($sizes, $color->sizes->pluck('size_name')->toArray());
                        }
                    ?>
                    <?php echo e(implode(', ', $sizes) ?: '-'); ?>

                </td>

                <!-- Colors -->
                <td>
                    <?php $__currentLoopData = $p->colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="badge-color" style="background: <?php echo e($color->color_code ?? '#ccc'); ?>" title="<?php echo e($color->color_name); ?>"></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>


                <td><?php echo e(ucfirst($p->p_type)); ?></td>

                <!-- Actions -->
                <td>
                    <a href="<?php echo e(route('product.view', $p->p_id)); ?>" class="btn btn-sm btn-orange mb-1">View</a>
                    <a href="<?php echo e(route('product.edit', $p->p_id)); ?>" class="btn btn-sm btn-orange mb-1">Edit</a>

                    <form action="<?php echo e(route('product.destroy', $p->p_id)); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-sm btn-orange deleteBtn">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<!-- Scripts -->

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function () {
    // Initialize DataTable
    $('#productTable').DataTable({
        "pageLength": 5,
        "lengthMenu": [5, 10, 25, 50, 100, "All"],
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

    // SweetAlert delete
    $('.deleteBtn').click(function(e){
        e.preventDefault();
        let form = $(this).closest('form');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f97316',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if(result.isConfirmed){
                form.submit();
            }
        });
    });
});
</script>



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






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
<?php /**PATH C:\laravel_git\ecommerce-web\resources\views/admin/productlist.blade.php ENDPATH**/ ?>