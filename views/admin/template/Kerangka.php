<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="<?php echo base_url(); ?>assets/home/images/logo-puskesmas.ico" rel="shortcut icon">
  <title>Admin Prigen</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/bootstrap/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/datatables/dataTables.bootstrap.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/skins/_all-skins.min.css'); ?>">

  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <?php echo $header; ?>

    <!-- =============================================== -->

    <?php echo $menu; ?>

    <!-- =============================================== -->

    <?php echo $body; ?>
    
    <!-- =============================================== -->

    <?php echo $footer; ?>

    <!-- =============================================== -->

  </div>

  <!-- JS -->
    <?php 
    foreach ($cek as $key => $value) {
      echo "<script src=".base_url($value)."></script>";   
    }

    if (isset($grafig_kuisioner)) {
      ?>
      
      <script type="text/javascript">
        // include data
    
        $(function () {
          /* ChartJS
           * -------
           * Here we will create a few charts using ChartJS
           */

          //--------------
          //- AREA CHART -
          //--------------

          var barChartCanvas = $("#diagram-kuisioner-total").get(0).getContext("2d");
          // This will get the first returned node in the jQuery collection.
          var barChart = new Chart(barChartCanvas);
          var barChartData = {

              labels: ["Resepsionis", "Loket/Pendaftaran/Kasir", "Poli Umum", "Poli KIA", "Poli Gigi", "Poli Konsultasi GIZI/KRR/Sanitasi", "Laboratorium", "Kamar Obat", "UGD", "Rawat Inap", "Pakir", "Ruang Tunggu", "Kamar Mandi/Kamar Kecil"],
              datasets: [
              {
                label: "Puas",
                fillColor: "rgba(210, 214, 223, 1)",
                strokeColor: "rgba(210, 214, 222, 1)",
                pointColor: "rgba(210, 214, 222, 1)",
                pointStrokeColor: "#c1c7d1",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: <?php echo json_encode($grafig_kuisioner[0]); ?>
              },
              {
                label: "Tidak Puas",
                fillColor: "rgba(60,141,188,0.9)",
                strokeColor: "rgba(60,141,188,0.8)",
                pointColor: "#3b8bba",
                pointStrokeColor: "rgba(60,141,188,1)",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(60,141,188,1)",
                data: <?php echo json_encode($grafig_kuisioner[1]); ?>
              },

            ]
          };

          barChartData.datasets[1].fillColor = "#00a65a";
          barChartData.datasets[1].strokeColor = "#00a65a";
          barChartData.datasets[1].pointColor = "#00a65a";
          var barChartOptions = {
            //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
            scaleBeginAtZero: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: true,
            //String - Colour of the grid lines
            scaleGridLineColor: "rgba(0,0,0,.05)",
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - If there is a stroke on each bar
            barShowStroke: true,
            //Number - Pixel width of the bar stroke
            barStrokeWidth: 2,
            //Number - Spacing between each of the X value sets
            barValueSpacing: 5,
            //Number - Spacing between data sets within X values
            barDatasetSpacing: 1,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            //Boolean - whether to make the chart responsive
            responsive: true,
            maintainAspectRatio: true
          };

          barChartOptions.datasetFill = false;
          barChart.Bar(barChartData, barChartOptions);
        });
      </script>

      <?php
    } elseif (isset($yuuhu)) {
      ?>
      
      <script type="text/javascript">
        // include data
    
        $(function () {
          /* ChartJS
           * -------
           * Here we will create a few charts using ChartJS
           */

          //--------------
          //- AREA CHART -
          //--------------

          var barChartCanvas = $("#diagram-kuisioner-total").get(0).getContext("2d");
          // This will get the first returned node in the jQuery collection.
          var barChart = new Chart(barChartCanvas);
          var barChartData = {

              labels: ["Januari", "February", "Maret", "April", "Mey", "Juni", "July", "Agustus", "September", "Oktober", "November", "Desember"],
              datasets: [
              {
                label: "Puas",
                fillColor: "rgba(210, 214, 223, 1)",
                strokeColor: "rgba(210, 214, 222, 1)",
                pointColor: "rgba(210, 214, 222, 1)",
                pointStrokeColor: "#c1c7d1",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [90, 20, 29, 21, 26, 70, 2, 43, 1, 24, 60, 2],
              },
              {
                label: "Tidak Puas",
                fillColor: "rgba(60,141,188,0.9)",
                strokeColor: "rgba(60,141,188,0.8)",
                pointColor: "#3b8bba",
                pointStrokeColor: "rgba(60,141,188,1)",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(60,141,188,1)",
                data: [90, 20, 29, 21, 26, 70, 2, 43, 1, 21, 75, 1],
              },
              {
                label: "Keramahan",
                fillColor: "rgba(60,141,188,0.9)",
                strokeColor: "rgba(60,141,188,0.8)",
                pointColor: "#3b8bba",
                pointStrokeColor: "rgba(60,141,188,1)",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(60,141,188,1)",
                data: [90, 20, 29, 21, 26, 70, 2, 43, 1, 12, 4, 3],
              },
              {
                label: "Kecepatan Tindakan",
                fillColor: "rgba(60,141,188,0.9)",
                strokeColor: "rgba(60,141,188,0.8)",
                pointColor: "#3b8bba",
                pointStrokeColor: "rgba(60,141,188,1)",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(60,141,188,1)",
                data: [90, 20, 29, 21, 26, 70, 2, 43, 1, 24, 21, 5],
              },
              {
                label: "Keprofesionalismean",
                fillColor: "rgba(60,141,188,0.9)",
                strokeColor: "rgba(60,141,188,0.8)",
                pointColor: "#3b8bba",
                pointStrokeColor: "rgba(60,141,188,1)",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(60,141,188,1)",
                data: [90, 20, 29, 21, 26, 70, 2, 43, 1, 12, 14, 7],
              },
              {
                label: "Kebersihan",
                fillColor: "rgba(60,141,188,0.9)",
                strokeColor: "rgba(60,141,188,0.8)",
                pointColor: "#3b8bba",
                pointStrokeColor: "rgba(60,141,188,1)",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(60,141,188,1)",
                data: [90, 20, 29, 21, 26, 70, 2, 43, 1, 4, 6, 7],
              },
              {
                label: "Kerapian",
                fillColor: "rgba(60,141,188,0.9)",
                strokeColor: "rgba(60,141,188,0.8)",
                pointColor: "#3b8bba",
                pointStrokeColor: "rgba(60,141,188,1)",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(60,141,188,1)",
                data: [90, 20, 29, 21, 26, 70, 2, 43, 1, 2, 5, 90],
              },
              {
                label: "Bau",
                fillColor: "rgba(60,141,188,0.9)",
                strokeColor: "rgba(60,141,188,0.8)",
                pointColor: "#3b8bba",
                pointStrokeColor: "rgba(60,141,188,1)",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(60,141,188,1)",
                data: [90, 20, 29, 21, 26, 70, 2, 43, 1, 89, 1, 2],
              },
              {
                label: "Lain lain",
                fillColor: "rgba(60,141,188,0.9)",
                strokeColor: "rgba(60,141,188,0.8)",
                pointColor: "#3b8bba",
                pointStrokeColor: "rgba(60,141,188,1)",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(60,141,188,1)",
                data: [90, 20, 29, 21, 26, 70, 2, 43, 1, 9, 5, 8],
              },

            ]
          };

          barChartData.datasets[1].fillColor = "#00a65a";
          barChartData.datasets[1].strokeColor = "#00a65a";
          barChartData.datasets[1].pointColor = "#00a65a";
          var barChartOptions = {
            //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
            scaleBeginAtZero: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: true,
            //String - Colour of the grid lines
            scaleGridLineColor: "rgba(0,0,0,.05)",
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - If there is a stroke on each bar
            barShowStroke: true,
            //Number - Pixel width of the bar stroke
            barStrokeWidth: 2,
            //Number - Spacing between each of the X value sets
            barValueSpacing: 5,
            //Number - Spacing between data sets within X values
            barDatasetSpacing: 1,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            //Boolean - whether to make the chart responsive
            responsive: true,
            maintainAspectRatio: true
          };

          barChartOptions.datasetFill = false;
          barChart.Bar(barChartData, barChartOptions);
        });
      </script>

      <?php
    } elseif (isset($editTex)) {
      ?>
        <script>
          $(function () {
            //bootstrap WYSIHTML5 - text editor
            CKEDITOR.replace('editor1');
          });
        </script>
      <?php
    } elseif (isset($tampilArtikel)){
      ?>
        <script>
          $(function () {
            $("#example1").DataTable();
          });
        </script>
      <?php
    }
    ?>
  </body>
</html>
