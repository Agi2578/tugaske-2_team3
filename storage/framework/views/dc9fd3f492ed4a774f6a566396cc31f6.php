
<?php $__env->startSection('content'); ?>
<head>
    <title>Grade Mahasiswa</title>
    <!-- Custom CSS -->
    <link href="assets/libs/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css" />
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <link href="../dist/css/pages/landingpage.css" rel="stylesheet">
</head>
<div class="container">
    <h1>Tambah Data Mahasiswa</h1>
    <form action="/mahasiswa" method="POST" class="mt-4">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="nilai_quis">Nilai Quis</label>
            <input type="number" class="form-control" id="nilai_quis" name="nilai_quis" required>
        </div>
        <div class="form-group">
            <label for="nilai_tugas">Nilai Tugas</label>
            <input type="number" class="form-control" id="nilai_tugas" name="nilai_tugas" required>
        </div>
        <div class="form-group">
            <label for="nilai_absensi">Nilai Absensi</label>
            <input type="number" class="form-control" id="nilai_absensi" name="nilai_absensi" required>
        </div>
        <div class="form-group">
            <label for="nilai_praktek">Nilai Praktek</label>
            <input type="number" class="form-control" id="nilai_praktek" name="nilai_praktek" required>
        </div>
        <div class="form-group">
            <label for="nilai_uas">Nilai UAS</label>
            <input type="number" class="form-control" id="nilai_uas" name="nilai_uas" required>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary me-5">Simpan</button>
        
            <a href="<?php echo e(url('/index.html')); ?>" class="btn btn-secondary me-3">Kembali ke Halaman Utama</a>
             <a href="<?php echo e(url('/mahasiswa')); ?>" class="btn btn-secondary me-3">Lihat Data</a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Pavilion\tugaske-2\resources\views/mahasiswa/create.blade.php ENDPATH**/ ?>