<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Mahasiswa</div>

                <div class="card-body">
                <form action="<?php echo e(route('update.mahasiswa', $mahasiswa->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <select name="user_id" id="user_id" class="form-control">
                            <option value="" disable selected>--Pilih User--</option>
                                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($u->id); ?>" <?php echo e($mahasiswa->user_id == $u->id ? 'selected' : ''); ?>><?php echo e($u->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>         
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="number" name="npm" class="form-control col-md-12" placeholder="Masukan npm" value="<?php echo e(is_null($mahasiswa) ?'' : $mahasiswa->npm); ?>">
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control col-md-12" placeholder="Masukan Tempat Lahir" value="<?php echo e(is_null($mahasiswa) ?'' : $mahasiswa->tempat_lahir); ?>">
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control col-md-12" placeholder="Masukan Tanggal Lahir" value="<?php echo e(is_null($mahasiswa) ?'' : $mahasiswa->tgl_lahir); ?>">
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="number" name="telepon" class="form-control col-md-12" placeholder="Masukan Telepon"value="<?php echo e(is_null($mahasiswa) ?'' : $mahasiswa->telepon); ?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" cols="2" rows="3" class="form-control" style="resize : none" placeholder="Masukan Alamat">
                            <?php echo e(is_null($mahasiswa) ?'' : $mahasiswa->alamat); ?></textarea>
                    </div>
                    <h6>Jenis Kelamin</h6>
                    <select name="gender" id="gender" class="form-control">
                        <option value="" disable selected>--Pilih Jenis Kelamin--</option>
                        <option value="L"<?php echo e($mahasiswa->gender == 'L' ? 'selected' : ''); ?> >Laki-Laki</option>
                        <option value="P"<?php echo e($mahasiswa->gender == 'P' ? 'selected' : ''); ?> >Perempuan</option>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary" name="simpan" style="margin-left: 40%">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">BATAL</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel4c\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>