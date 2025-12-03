<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title><?php echo $__env->yieldContent('title', 'My Laravel App'); ?></title>


        <!-- favicon -->




   

     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" href="favicon.ico" type="image/x-icon">



    <link rel="shortcut icon" type="image/favicon" href="<?php echo e(asset('assetsofdash/images/Red and Black Modern Creative Agency Logo-old.png')); ?>">

       
         <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/plugin.css')); ?>">
        <!-- theme css -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/theme.css')); ?>">
        <!-- collection css -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/collection.css')); ?>">
        <!-- blog css -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/blog.css')); ?>">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">




    <!-- plugin css file  -->

    <?php echo $__env->yieldPushContent('styles'); ?>

</head>
<body>
    

        <!-- main body area -->
        

            <!-- Body: Header -->
            <?php echo $__env->make('partials.frontheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Body: Header -->


            <!-- Body: Body -->
            
                <?php echo $__env->yieldContent('content'); ?>

                <?php echo $__env->make('partials.extra', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            

            

         <?php echo $__env->make('partials.frontfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


            



        

    


         <script src="<?php echo e(asset('assets/js/plugin.js')); ?>"></script>
        <!-- theme js -->
        <script src="<?php echo e(asset('assets/js/theme.jsss')); ?>"></script>

          <script src="<?php echo e(asset('assetsofdash/bundles/libscripts.bundle.js')); ?>"></script>

    <!-- Plugin Js -->
    <script src="<?php echo e(asset('assets/bundles/apexcharts.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/bundles/dataTables.bundle.js')); ?>"></script>

    <!-- Jquery Page Js -->
    <script src="<?php echo e(asset('../js/template.js')); ?>"></script>
    <script src="<?php echo e(asset('../js/page/index.js')); ?>"></script>
    <script src="<?php echo e(asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyB1Jr7axGGkwvHRnNfoOzoVRFV3yOPHJEU&amp;callback=myMap')); ?>"></script>
    <script>
        $('#myDataTable')
        .addClass( 'nowrap')
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });
    </script>


    <?php echo $__env->yieldPushContent('scripts'); ?>


</body>
</html>

<?php /**PATH C:\laravel_git\ecommerce-web\resources\views/layouts/frontend-layout.blade.php ENDPATH**/ ?>