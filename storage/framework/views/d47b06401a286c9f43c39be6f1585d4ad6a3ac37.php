<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data
                </div>
                <div class="card-body">
                    <form action= "<?php echo e(route('nilai.simpan')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label for="user_id" class="col-sm-4 text-sm-right">Nama Mahasiswa</label>
                            <div class="col-sm-6">
                                <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                                    <option value="" disabled selected>--Pilih Nama--</option>
                                    <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($mhs->id); ?>"><?php echo e($mhs->user->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
					    </div>

                        <div class="form-group row">
                            <label for="gender" class="col-sm-4 text-sm-right">Nama Mata Kuliah</label>
                            <div class="col-sm-6">
                                <select name="makul_id" id="makul_id" class="form-control">
                                    <option value="" disabled selected>--Pilih Mata Kuliah--</option>
                                    <?php $__currentLoopData = $makul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($mk->id); ?>"><?php echo e($mk->nama_makul); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
					    </div>

                        <div class="form-group row">
                            <label for="telepon" class="col-sm-4 text-sm-right">Nilai</label>
                            <div class="col-sm-6">
                                <input type="numeric" name="nilai" class="form-control" placeholder="Masukkan Nilai Mahasiswa" maxlength="3">
                            </div>
					    </div>
                        
                        <div class="form-group row">
                            <label for="" class="col-sm-4 text-sm-right"></label>
                            <div class="col-sm-6 float-right">
                                <button type="submit" class="btn btn-primary">SIMPAN</button>
                                <a href="<?php echo e(route('nilai')); ?>" class="btn btn-danger " name="batal">Batal</a>
                            </div>
					    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel4c\resources\views/nilai/create.blade.php ENDPATH**/ ?>