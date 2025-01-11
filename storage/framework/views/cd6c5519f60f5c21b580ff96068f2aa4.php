<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title', 'My Application'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>"> <!-- Sesuaikan jika menggunakan CSS -->
    <style>
        /* Tambahkan gaya sederhana */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .navbar {
            background-color: #333;
            padding: 10px;
            color: white;
            text-align: center;
        }
        .navbar a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 1000px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="<?php echo e(route('apparel_sizes.index')); ?>">Apparel Sizes</a>
        <a href="<?php echo e(route('colors.index')); ?>">Colors</a>
        <a href="<?php echo e(route('categories.index')); ?>">Categories</a>
        <a href="<?php echo e(route('products.index')); ?>">Products</a>
        <a href="<?php echo e(route('product_colors.index')); ?>">Product Colors</a>
        <a href="<?php echo e(route('product_categories.index')); ?>">Product Categories</a>
    </div>

    <!-- Main Content -->
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo e(date('Y')); ?> My Application. All rights reserved.</p>
    </footer>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script> <!-- Sesuaikan jika menggunakan JS -->
</body>
</html>
<?php /**PATH C:\laragon\www\perbaikan\resources\views/layouts/app.blade.php ENDPATH**/ ?>