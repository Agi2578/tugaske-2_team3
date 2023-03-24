
<!DOCTYPE html>
<html>
<head>
    <title>Grade Mahasiswa</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/1FzER7mB4BtLw7OIVw6MEYi5U/6wxboMv8a3W3U" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <link href="assets/libs/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <link href="../dist/css/pages/landingpage.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="bg-white">
<div class="container">
    <h1 class="text-center">Laporan Grade & Grafik Mahasiswa</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Grade</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>A</td>
                <td><?php echo e($grade_count['A']); ?></td>
            </tr>
            <tr>
                <td>B</td>
                <td><?php echo e($grade_count['B']); ?></td>
            </tr>
            <tr>
                <td>C</td>
                <td><?php echo e($grade_count['C']); ?></td>
            </tr>
            <tr>
                <td>D</td>
                <td><?php echo e($grade_count['D']); ?></td>
            </tr>
        </tbody>
    </table>
</div>
     </div>
    </div>
</body>
</html>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        // ... (sisanya sama)

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
                <a href="/index.html" class="btn btn-primary mb-3">Kembali ke Halaman Utama</a>
            </div>
            <div class="col-12 chart-container">
                <div id="grade_chart" style="width: 900px; height: 500px;"></div>
            </div>
        </div>
    </div>
</body>
</html>

<?php /**PATH C:\Users\Pavilion\tugaske-2\resources\views/mahasiswa/laporan_grade.blade.php ENDPATH**/ ?>