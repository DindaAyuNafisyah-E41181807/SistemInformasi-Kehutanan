<!DOCTYPE html>
<html>
	<!--Tamplate untuk master admin sesudah login-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin - Perhutani Jember</title>
	<!--link css-->
	<link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/assets/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/assets/css/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
	<!--isi di dalam template master admin adalah tabel admin dengan aksi yaitu berada di v_admin-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<?php $this->load->view('v_admin')?>
	
	
	<!--link js-->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
	<script src="<?php echo base_url();?>/assets/js/scripts.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
	<script src="<?php echo base_url();?>/assets/demo/datatables-demo.js"></script>
	<script src="<?php echo base_url();?>/assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/chart.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/chart-data.js"></script>
	<script src="<?php echo base_url();?>/assets/js/easypiechart.js"></script>
	<script src="<?php echo base_url();?>/assets/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url();?>/assets/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url();?>/assets/js/custom.js"></script>
	<script>
		window.onload = function () {
			var chart1 = document.getElementById("line-chart").getContext("2d");
			window.myLine = new Chart(chart1).Line(lineChartData, {
				responsive: true,
				scaleLineColor: "rgba(0,0,0,.2)",
				scaleGridLineColor: "rgba(0,0,0,.05)",
				scaleFontColor: "#c5c7cc"
			});
		};
	</script>

</body>

</html>