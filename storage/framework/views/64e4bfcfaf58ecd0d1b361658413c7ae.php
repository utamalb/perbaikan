

<?php $__env->startSection('content'); ?>
<h1>Add New Color</h1>
<form action="<?php echo e(route('colors.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label>Color Code:</label>
    <input type="text" name="color_code" required>
    <br>
    <label>Color Name:</label>
    <input type="text" name="color_name" required>
    <br>
    <button type="submit">Save</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\perbaikan\resources\views/colors/create.blade.php ENDPATH**/ ?>