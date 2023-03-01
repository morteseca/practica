

<?php $__env->startSection('content'); ?>
    <section style="display:flex; flex-direction:column; align-items: center">
        <h1>Где мы находимся</h1>
        <img style="width:35%; height:auto;" src="../public/img/map.jpg" alt="*">
        <p>Ватутина 12</p>
        <p>+79991238627</p>
        <p>TryGames@mail.ru</p>

        <button class="submit"><a href="<?php echo e(route('home')); ?>">Вернуться на главную</a></button>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/dbcsbhcc/vvfjnzd-m1/resources/views/wheretofind.blade.php ENDPATH**/ ?>