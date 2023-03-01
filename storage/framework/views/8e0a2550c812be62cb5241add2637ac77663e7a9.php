

<?php $__env->startSection('content'); ?>
<body>
        <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card" style="width: 18rem;">
        <img src="<?php echo e($b->img); ?>" class="card-img-top" alt="#">
        <div class="card-body">
          <h5 class="card-title"><?php echo e($b->name); ?></h5>
          <h5 class="card-title"><?php echo e($b->price); ?> rub</h5>
          <p class="card-text"><?php echo e($b->model); ?></p>
          <a href="#" class="btn btn-primary">Подробнее </a>
        </div>
      </div>
</body>
</html>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/dbcsbhcc/vvfjnzd-m1/resources/views/catalog.blade.php ENDPATH**/ ?>