<?php $__env->startSection('content'); ?>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1>Halaman Daftar Pegawai</h1>

<div class="my-3">
    <a href="pegawai-add" class= "btn btn-dark ml-5">Add Data</a>
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
            <th>Jabatan</th>
            <th>Perusahaan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $listpegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($data->id); ?></td>
            <td><?php echo e($data->nama); ?></td>
            <td><?php echo e($data->jabatan['nama']); ?></td>
            <td><?php echo e($data->perusahaan['nama']); ?></td>
            <td>
                <a href="pegawai-edit/<?php echo e($data->id); ?>" class="btn btn-info">Edit</a>
                <form class="d-inline" action="/pegawai/<?php echo e($data->id); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" name="submit" class="btn btn-danger" onclick="return confirm('Serius pgn dihapus bang?')">Delete</button>
                </form>
            </td>
        </tr>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH C:\S4\Pemrrgraman Web Lanjut\kelompok11\resources\views/pegawai.blade.php ENDPATH**/ ?>