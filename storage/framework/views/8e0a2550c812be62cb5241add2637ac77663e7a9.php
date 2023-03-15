<?php $__env->startSection('content'); ?>
<body>
    <div>
            <div class="catalog_sort">
                <p>Сортировка:</p>
                <div class="sort_">
                    По году:
                    <a class="btn btn-dark" href="<?php echo e(url('/catalog/sort/year/asc')); ?>">По возрастанию</a>
                    <a class="btn btn-dark" href="<?php echo e(url('/catalog/sort/year/desc')); ?>">По убыванию</a>
                </div>
                <div class="sort_">
                    По наименованию:
                    <a class="btn btn-dark" href="<?php echo e(url('/catalog/sort/name/asc')); ?>">По возрастанию</a>
                    <a class="btn btn-dark" href="<?php echo e(url('/catalog/sort/name/desc')); ?>">По убыванию</a>
                </div>
                <div class="sort_">
                    По цене:
                    <a class="btn btn-dark" href="<?php echo e(url('/catalog/sort/price/asc')); ?>">По возрастанию</a>
                    <a class="btn btn-dark"  href="<?php echo e(url('/catalog/sort/price/desc')); ?>">По убыванию</a>
                </div>
            </div>
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
                    <a href="/public/catalog/<?php echo e($b -> id); ?>" class="btn btn-success">Подробнее</a>
                    <a href="/public/bascet/<?php echo e($b -> id); ?>" class="btn btn-success">В корзину</a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
</body>
</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/dbcsbhcc/vvfjnzd-m1/resources/views/catalog.blade.php ENDPATH**/ ?>