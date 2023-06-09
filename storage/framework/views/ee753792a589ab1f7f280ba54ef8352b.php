<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h1>Tambah Data Pegawai</h1>

<div class="mt-5 ml-5 col-5 m-auto">
    <form action="/pegawai/<?php echo e($pegawai->id); ?>" method="POST" >
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo e($pegawai->nama); ?>" required>
        </div>

        <div class="mb-3">
            <label for="nip">NIP</label>
            <input type="text" class="form-control" id="nip" name="nip" value="<?php echo e($pegawai->nip); ?>"required>
        </div>

        
        <div class="mb-3">
            <label for="perusahaan">ID Perusahaan</label>
            <select name="id_perusahaan" id="perusahaan" class="form-control"  required>
               <option value="<?php echo e($pegawai->perusahaan->id); ?>"><?php echo e($pegawai->perusahaan->nama); ?></option>
               <?php $__currentLoopData = $perusahaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        
        <div class="mb-3">
            <label for="jabatan">ID Jabatan</label>
            <select name="id_jabatan" id="jabatan" class="form-control" required>
                <option value="<?php echo e($pegawai->jabatan->id); ?>"><?php echo e($pegawai->jabatan->nama); ?></option>
                <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($index->id); ?>"><?php echo e($index->nama); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        
        <div class="mb-3">
            <button class="btn btn-success" type="submit">Simpan</button>
        </div>
    </form>
</div><?php /**PATH C:\personal\Code\PegawaiLaravel\resources\views/pegawai-edit.blade.php ENDPATH**/ ?>