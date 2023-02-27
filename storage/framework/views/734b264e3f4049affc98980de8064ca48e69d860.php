

<?php $__env->startSection('content'); ?>
<section style="display:flex; flex-direction:column; align-items: center">
        <h1>Девиз компании</h1>
        <p>Новинки компании</p>
        <span>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="width:500px; height:300px;" src="../public/img/1.png" alt="*">
                    </div>
                    <div class="carousel-item">
                        <img style="width:500px; height:300px;" src="../public/img/2.jfif" alt="*">
                    </div>
                    <div class="carousel-item">
                        <img style="width:500px; height:300px;" src="../public/img/3.jpg" alt="*">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Предыдущий</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Следующий</span>
                </button>
            </div>
        </span>
    </section>
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/dbcsbhcc/vvfjnzd-m1/resources/views/aboutus.blade.php ENDPATH**/ ?>