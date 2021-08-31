<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table data-toggle="table">
        <thead>
          <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($post->title); ?></td>
                <td><?php echo e($post->content); ?></td>
                  <?php if(auth()->guard()->check()): ?>
                    <td>
                      <a href="<?php echo e(route('posts.edit', $post->id)); ?>">Update</a>
                      <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="delete">
                        <?php echo csrf_field(); ?>
                        <button type="submit">Delete</button>
                      </form>
                    </td>
                  <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
  
</body>
</html><?php /**PATH C:\xampp\htdocs\DeveloperTest\resources\views/posts/list.blade.php ENDPATH**/ ?>