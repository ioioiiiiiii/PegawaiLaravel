<?php $__env->startSection('content'); ?>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg bg-dark text-white"><?php echo e(__('Management Tugas')); ?></div>

                <div class="card-body">
                <a href="tugas-add" class= "btn btn-dark ml-5">Add Data</a>
            </div>

<?php if(Session::has('status')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>

<table class="table">
    <thead>
        <tr>
            <th>No. </th>
            <th>Nama</th>
            <th>Pegawai</th>
            <th>Action</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $listtugas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($data->jobdesk); ?></td>
            <td>
                <?php $__currentLoopData = $data->pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    -<?php echo e($pegawai->nama); ?> <br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
            <td>
                <a href="tugas-edit/<?php echo e($data->id); ?>" class="btn btn-info">Edit</a>
                <form class="d-inline" action="/tugas/<?php echo e($data->id); ?>" method="post">
            </td>
            <td>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" name="submit" class="btn btn-danger" onclick="return confirm('Serius pgn dihapus bang?')">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\personal\Code\PegawaiLarapel\resources\views/tugas.blade.php ENDPATH**/ ?>