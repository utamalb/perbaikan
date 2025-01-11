

<?php $__env->startSection('content'); ?>
<h1>Categories</h1>
<a href="<?php echo e(route('categories.create')); ?>">Add New Category</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Parent Category</th>
            <th>Category Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($category->id); ?></td>
            <td><?php echo e($category->parent_category_id); ?></td>
            <td><?php echo e($category->category_name); ?></td>
            <td>
                <a href="<?php echo e(route('categories.edit', $category->id)); ?>">Edit</a>
                <form action="<?php echo e(route('categories.destroy', $category->id)); ?>" method="POST" style="display:inline-block;">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\perbaikan\resources\views/categories/index.blade.php ENDPATH**/ ?>