<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data mahasiswa

                        <a href="<?php echo e(route('tambah.mahasiswa')); ?>" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO.</th>
                                <TH>NAMA LEMGKAP</TH>
                                <th>NPM</th>
                                <th>TEMPAT, TANGGAL LAHIR</th>
                                <th>TELEPON</th>
                                <th>ALAMAT</th>
                                <th>JENIS KELAMIN</th>
                                <th>AKSI</th>
                            </tr>
                            <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($mhs->id); ?></td>
                                <td><?php echo e($mhs->User->name); ?></td>
                                <td><?php echo e($mhs->npm); ?></td>
                                <td><?php echo e($mhs->tempat_lahir.', '. $mhs->tgl_lahir); ?></td>
                                <td><?php echo e($mhs->telepon); ?></td>
                                <td><?php echo e($mhs->alamat); ?></td>
                                <td><?php echo e($mhs->gender); ?></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-warning">EDIT</a>
                                    <a href="#" class="btn btn-sm btn-danger">HAPUS</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel4c\resources\views/Mahasiswa/index.blade.php ENDPATH**/ ?>