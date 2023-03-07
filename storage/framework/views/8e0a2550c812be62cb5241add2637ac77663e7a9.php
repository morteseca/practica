<?php $__env->startSection('content'); ?>
<body>
    <div>
        <button class="btn btn-sekondary dropdown-toggle" type="button" id="dropdownMenuButton1">
            <a class="dropdown-item" href="<?php echo e(url('/catalog')); ?>">Категории</a>
        </button>
        <ul class="dropdown-menu"aria-labelledby>=dropdownMenuButton1</ul>
        <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li> <a class="dropdown-item" href="<?php echo e(url('/catalog/filter')); ?>/<?php echo e($a->name); ?>"</a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
    </div>
        <div class="cards-item">
            <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card-item">
                    <img src="<?php echo e($b->img); ?>" class="card-img-top" alt="#">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo e($b->name); ?></h5>
                    <p>
                    <h5 class="card-title">Цена:<?php echo e($b->price); ?> rub</h5>
                    <p>
                    <p class="card-text">Описание:<?php echo e($b->model); ?></p>
                    <p>
                    <a href="/public/catalog/<?php echo e($b -> id); ?>" class="btn btn-primary">Подробнее</a>
                    <a href="/public/bascet/<?php echo e($b -> id); ?>" class="btn btn-primary">В корзину</a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
</body>
</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/dbcsbhcc/vvfjnzd-m1/resources/views/catalog.blade.php ENDPATH**/ ?>