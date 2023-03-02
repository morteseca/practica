<?php $__env->startSection('content'); ?>
<body>
        <div class="cards-item">
            <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card-item">
                    <img src="<?php echo e($b->img); ?>" class="card-img-top" alt="#">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo e($b->name); ?></h5>
                    <h5 class="card-title"><?php echo e($b->price); ?> rub</h5>
                    <p class="card-text"><?php echo e($b->model); ?></p>
                    <a href="/public/catalog/<?php echo e($b -> id); ?>" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
</body>
</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/dbcsbhcc/vvfjnzd-m1/resources/views/catalog.blade.php ENDPATH**/ ?>