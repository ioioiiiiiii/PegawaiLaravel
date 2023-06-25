<?php $__env->startSection('content'); ?>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1>Halaman Daftar Akun Pegawai</h1>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Nama Pegawai</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $listuser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($data->id); ?></td>
            <td><?php echo e($data->username); ?></td>
            <td><?php echo e($data->password); ?></td>
            <td><?php echo e($data->pegawai['nama']); ?></td>
            
            
            
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH C:\personal\Code\PegawaiLarapel\resources\views/userr.blade.php ENDPATH**/ ?>