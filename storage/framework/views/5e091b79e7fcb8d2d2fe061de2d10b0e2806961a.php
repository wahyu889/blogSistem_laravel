<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(config('app.name', 'Laravel')); ?></title>

   

    <!-- Fonts -->
    

    <!-- Styles -->

    <link href="<?php echo e(asset('assets/frontend/css/swiper.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('assets/frontend/css/ionicons.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontend/css/bootstrap.min.css')); ?>">

    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">




    <?php echo $__env->yieldPushContent('css'); ?>

</head>
<body>
    <header>
       <?php echo $__env->make('layouts.frontend.partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>

    <?php echo $__env->yieldContent('content'); ?>

    <footer>

      <?php echo $__env->make('layouts.frontend.partial.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>


<script src="<?php echo e(asset('assets/frontend/js/jquery-3.1.1.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/frontend/js/tether.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/frontend/js/bootstrap.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/frontend/js/swiper.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/frontend/js/scripts.js')); ?>"></script>

    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        <?php echo Toastr::message(); ?>

<?php echo $__env->yieldPushContent('js'); ?>

</body>
</html>

<?php /* C:\xampp\htdocs\laravel5_88\resources\views/layouts/frontend/app.blade.php */ ?>