

<?php $__env->startSection('content'); ?>
<h1>Colors</h1>
<a href="<?php echo e(route('colors.create')); ?>">Add New Color</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Color Code</th>
            <th>Color Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($color->id); ?></td>
            <td><?php echo e($color->color_code); ?></td>
            <td><?php echo e($color->color_name); ?></td>
            <td>
                <a href="<?php echo e(route('colors.edit', $color->id)); ?>">Edit</a>
                <form action="<?php echo e(route('colors.destroy', $color->id)); ?>" method="POST" style="display:inline-block;">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\perbaikan\resources\views/colors/index.blade.php ENDPATH**/ ?>