<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <link rel="icon" type="image/png" sizes="16x16" href="assets/uploadImage/Logo/favicon.png">
  <?php

  include('./constant/connect.php');
  // $sql_head_title = "select * from manage_website"; 
  // $result_head_title = $conn->query($sql_head_title);
  // $row_head_title = mysqli_fetch_array($result_head_title);
  ?>
  <style type="text/css">
    @media print {
      #printbtn {
        display: none;
      }
    }
  </style>
  <title>Gestión de Negocio</title>

  <link href="assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
  <link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
  <link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />

  <link href="assets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">

  <link href="assets/css/helper.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/lib/html5-editor/bootstrap-wysihtml5.css" />
  <link href="assets/css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
  <link href="assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
  <link href="assets/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
  <link href="assets/css/lib/datepicker/bootstrap-datepicker3.min.css" rel="stylesheet">


  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {
      packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Food', 'Average sale per Day'],
        ['Masala dosa', 11],
        ['Chicken 65 ', 2],
        ['Karapu Boondi', 2],
        ['Bellam Gavvalu', 2],
        ['Gummadikaya Vadiyalu', 7]
      ]);

      var options = {
        title: 'Food Average Sale per Day',
        pieHole: 0.4,
      };

      var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
      chart.draw(data, options);
    }
  </script>
</head>

<body class="fix-header fix-sidebar">

  <div id="page"></div>
  <div id="loading"></div>