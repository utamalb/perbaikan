

<?php $__env->startSection('content'); ?>
<h1>Apparel Sizes</h1>
<a href="<?php echo e(route('apparel_sizes.create')); ?>">Add New Size</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Size Code</th>
            <th>Sort Order</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($size->id); ?></td>
            <td><?php echo e($size->size_code); ?></td>
            <td><?php echo e($size->sort_order); ?></td>
            <td>
                <a href="<?php echo e(route('apparel_sizes.edit', $size->id)); ?>">Edit</a>
                <form action="<?php echo e(route('apparel_sizes.destroy', $size->id)); ?>" method="POST" style="display:inline-block;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\perbaikan\resources\views/apparel_sizes/index.blade.php ENDPATH**/ ?>