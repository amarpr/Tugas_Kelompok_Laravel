<?php $__env->startSection('title', 'Buku Pemrograman'); ?>

<?php $__env->startSection('content'); ?>
    <?php
        $datas = [
            [
                "image" => "photo buku",
                "name" => "Deception Point",
                "pengarang" => "Dan Brown"
            ],[
                "image" => "photo buku",
                "name" => "Deception Point",
                "pengarang" => "Dan Brown"
            ],[
                "image" => "photo buku",
                "name" => "Deception Point",
                "pengarang" => "Dan Brown"
            ],[
                "image" => "photo buku",
                "name" => "Deception Point",
                "pengarang" => "Dan Brown"
            ]
        ];
    ?>
    <div class="container">
        <h4 class="my-lg-3">Buku Pemrograman</h4>
        <table class="table table-borderless table-striped table-hover">
            <thead class="thead-dark">
                <th>buku</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="width:15%">
                        <div class="card">
                            <img src="<?php echo e(asset('/img/deception-point.jpg')); ?>" class="card-img-top" alt="<?php echo e($data['image']); ?>" style="width:100%">
                        </div> 
                        </td>
                        <td class="align-middle"> <?php echo e($data['name']); ?></td>
                        <td class="align-middle"> <?php echo e($data['pengarang']); ?></td>
                        <td class="align-middle"> <button class="btn btn-primary"> details </button> </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
                </tr>
            </tbody>
        </table>
    </div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/Laravel/Tugas_Kelompok_Laravel/project_perpustakaan/resources/views/pages/buku_pemograman.blade.php ENDPATH**/ ?>