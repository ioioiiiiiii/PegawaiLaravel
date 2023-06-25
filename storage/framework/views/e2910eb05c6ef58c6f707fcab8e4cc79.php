<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg bg-dark text-white"><?php echo e(__('Management Perusahaan')); ?></div>

                <div class="card-body">
                    <div class="my-3">
    <a href="perusahaan-add" class= "btn btn-dark ml-5">Add Data</a>
</div>

<?php if(Session::has('status')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>
<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Daftar Pegawai</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $listperusahaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($data->id); ?></td>
            <td><?php echo e($data->nama); ?></td>
            <td>
                <?php $__currentLoopData = $data->pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    -<?php echo e($pegawai->nama); ?> <br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
            <td>
                <a href="perusahaan-edit/<?php echo e($data->id); ?>" class="btn btn-info">Edit</a>
                <form class="d-inline" action="/perusahaan/<?php echo e($data->id); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" name="submit" class="btn btn-danger" onclick="return confirm('Serius pgn dihapus bang?')">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\personal\Code\PegawaiLarapel\resources\views/perusahaan.blade.php ENDPATH**/ ?>