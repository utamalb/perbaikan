

<?php $__env->startSection('content'); ?>
<h1>Add New Size</h1>
<form action="<?php echo e(route('apparel_sizes.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label>Size Code:</label>
    <input type="text" name="size_code" required>
    <br>
    <label>Sort Order:</label>
    <input type="number" name="sort_order" required>
    <br>
    <button type="submit">Save</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\perbaikan\resources\views/apparel_sizes/create.blade.php ENDPATH**/ ?>