<?php $__env->startSection('content'); ?>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1>Halaman Daftar Pegawai</h1>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Tugas</th>
            <th>Perusahaan</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $listpegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($data->id); ?></td>
            <td><?php echo e($data->nama); ?></td>
            <td><?php echo e($data->jabatan['nama']); ?></td>
            <td>
                <?php $__currentLoopData = $data->tugas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tugas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                -<?php echo e($tugas->jobdesk); ?> <br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
            <td><?php echo e($data->perusahaan['nama']); ?></td>
            
            
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH C:\S4\Pemrrgraman Web Lanjut\kelompok11\resources\views/pegawai.blade.php ENDPATH**/ ?>