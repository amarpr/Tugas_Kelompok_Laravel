<?php $__env->startSection('title', 'Halaman Utama'); ?>

<?php $__env->startSection('content'); ?>
    <?php
        $datas = [
            [
                "image" => "ini untuk photo",
                "name" => "ini untuk nama",
                "desc" => "ini untuk keterangan",
                "other" => "lain-lain",
                "btn" => "deatil" 
            ],
            [
                "image" => "ini untuk photo",
                "name" => "ini untuk nama",
                "desc" => "ini untuk keterangan",
                "other" => "lain-lain",
                "btn" => "deatil" 
            ],
            [
                "image" => "ini untuk photo",
                "name" => "ini untuk nama",
                "desc" => "ini untuk keterangan",
                "other" => "lain-lain",
                "btn" => "deatil" 
            ],
            [
                "image" => "ini untuk photo",
                "name" => "ini untuk nama",
                "desc" => "ini untuk keterangan",
                "other" => "lain-lain",
                "btn" => "deatil" 
            ]
        ];
    ?>
    <div class="container">
        <section id="bukuProgramming" class="my-lg-3">
            <h4 class="my-lg-3 text-center">Buku Programming</h4>
            <div class="row">
            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="card">
                    <img src="<?php echo e(asset('/img/deception-point.jpg')); ?>" class="card-img-top" alt="<?php echo e($data['image']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($data['name']); ?></h5>
                        <p class="card-text"><?php echo e($data['desc']); ?></p>
                        <p class="card-text"><?php echo e($data['other']); ?></p>
                        <button class="btn btn-primary"> <?php echo e($data['btn']); ?> </button>
                    </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>

        <section id="bukuKomik" class="my-lg-3">
            <h4 class="my-lg-3 text-center">Komik</h4>
            <div class="row">
            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="card">
                    <img src="<?php echo e(asset('/img/deception-point.jpg')); ?>" class="card-img-top" alt="<?php echo e($data['image']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($data['name']); ?></h5>
                        <p class="card-text"><?php echo e($data['desc']); ?></p>
                        <p class="card-text"><?php echo e($data['other']); ?></p>
                        <button class="btn btn-primary"> <?php echo e($data['btn']); ?> </button>
                    </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>

        <section id="bukuMajalah" class="my-lg-3">
            <h4 class="my-lg-3 text-center">Majalah</h4>
            <div class="row">
            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="card">
                    <img src="<?php echo e(asset('/img/deception-point.jpg')); ?>" class="card-img-top" alt="<?php echo e($data['image']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($data['name']); ?></h5>
                        <p class="card-text"><?php echo e($data['desc']); ?></p>
                        <p class="card-text"><?php echo e($data['other']); ?></p>
                        <button class="btn btn-primary"> <?php echo e($data['btn']); ?> </button>
                    </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Laravel/Tugas_Kelompok_Laravel/project_perpustakaan/resources/views/pages/home.blade.php ENDPATH**/ ?>