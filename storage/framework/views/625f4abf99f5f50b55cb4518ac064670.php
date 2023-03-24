<!DOCTYPE html>
<html>
<head>
    <title>Grade Mahasiswa</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/1FzER7mB4BtLw7OIVw6MEYi5U/6wxboMv8a3W3U" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="assets/libs/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css" />
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <link href="../dist/css/pages/landingpage.css" rel="stylesheet">
    <style>
        body {
            padding: 2rem;
        }
        .chart-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <!-- Menambahkan script untuk menampilkan grafik -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Grade', 'Jumlah'],
                ['A', <?php echo e($grade_count['A']); ?>],
                ['B', <?php echo e($grade_count['B']); ?>],
                ['C', <?php echo e($grade_count['C']); ?>],
                ['D', <?php echo e($grade_count['D']); ?>]
            ]);

            var options = {
             title: '',
              is3D: true,
                titleTextStyle: {
             alignment: 'center'
    }
};

            var chart = new google.visualization.PieChart(document.getElementById('grade_chart'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Daftar Mahasiswa</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Nilai Quis</th>
                    <th>Nilai Tugas</th>
                    <th>Nilai Absensi</th>
                    <th>Nilai Praktek</th>
                    <th>Nilai UAS</th>
                    <th>Grade</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($mhs->nama); ?></td>
                        <td><?php echo e($mhs->nilai_quis); ?></td>
                        <td><?php echo e($mhs->nilai_tugas); ?></td>
                        <td><?php echo e($mhs->nilai_absensi); ?></td>
                        <td><?php echo e($mhs->nilai_praktek); ?></td>
                        <td><?php echo e($mhs->nilai_uas); ?></td>
                        <td><?php echo e($mhs->grade); ?></td>
                        <td>
                       <a href="/mahasiswa/create" class="btn btn-info btn-sm">Back to Input</a>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
         </div>
        </div>
    </div>
</body>
</html>

                   
<?php /**PATH C:\Users\Pavilion\tugaske-2\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>