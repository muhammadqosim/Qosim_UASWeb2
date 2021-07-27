<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Nilai Mahasiswa
                    <a href="<?php echo e(route('nilai.create')); ?>" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>
                <div class="card-body" >
                    <div class="table-responsiv">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO.</th>
                                <th>NPM</th>
                                <th>NAMA MAHASISWA</th>
                                <th>NAMA MAKUL</th>
                                <th>SKS</th>
                                <th>NILAI</th>
                                <th>AKSI</th>
                            </tr>
                            
                            <!-- untuk penomoran -->
                            <?php
                                $no = 1;
                            ?>
                            <?php $__currentLoopData = $nilai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($no++); ?></td>
                                <td><?php echo e($nil->mahasiswa->npm); ?></td>
                                <td><?php echo e($nil->mahasiswa->user->name); ?></td>
                                <td><?php echo e($nil->Makul->nama_makul); ?></td>
                                <td><?php echo e($nil->Makul->sks); ?></td>
                                <td><?php echo e($nil->nilai); ?></td>
                                <td>
                                    <a href="<?php echo e(route('nilai.edit', $nil->id)); ?>" class="btn btn-sm btn-warning">EDIT</a>
                                    <a href="<?php echo e(route('nilai.hapus', $nil->id)); ?>" class="btn btn-sm btn-danger">HAPUS</a>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel4c\resources\views/nilai/index.blade.php ENDPATH**/ ?>