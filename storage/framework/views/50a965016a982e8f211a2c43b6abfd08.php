<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-light"><?php echo e(__('Tambah Perusahaan  ')); ?></div>
                <div class="m-5">
                    <form action="/perusahaan/<?php echo e($perusahaan->id); ?>" method="post">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo e($perusahaan->nama); ?>" required>
                    </div>
                
                    <div class="mb-3">
                        <button class="btn btn-success" type="submit">Simpan</button>
                    </div>  
                    <div class="card-body">
                        <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\personal\Code\PegawaiLarapel\resources\views/perusahaan-edit.blade.php ENDPATH**/ ?>