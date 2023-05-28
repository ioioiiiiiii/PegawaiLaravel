<?php $__env->startSection('content'); ?>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h2>Daftar Jabatan</h2>
<table class="table">
    <thead>
        <tr>
            <th>No. </th>
            <th>Nama</th>
            <th>Pegawai</th>
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
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\S4\Pemrrgraman Web Lanjut\kelompok11\resources\views/tugas.blade.php ENDPATH**/ ?>