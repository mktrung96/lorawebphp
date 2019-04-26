<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo BASE_IMAGE.'/logo_dsvn.png' ?>" type="image/x-ico" />
	<title>LoraNode</title>
	<link href="<?php echo BASE_URL.'asset/css/bootstrap.min.css' ?>" rel="stylesheet">
	<link href="<?php echo BASE_URL.'asset/css/jquery.dataTables.min.css' ?>" rel="stylesheet">
	<link href="<?php echo BASE_URL.'asset/css/datatables.bootstrap.css' ?>" rel="stylesheet">	
	<link href="<?php echo BASE_URL.'asset/css/custom.css' ?>" rel="stylesheet">
	<link href="<?php echo BASE_URL.'asset/css/leaflet.css' ?>" rel="stylesheet">
	<link href="<?php echo BASE_URL.'asset/css/bootstrap-datepicker.css' ?>" rel="stylesheet">
	<link href="<?php echo BASE_URL.'asset/css/font-awesome.min.css' ?>" rel="stylesheet">
	

	<script src="<?php echo BASE_URL.'asset/js/jquery-3.2.1.min.js' ?>"></script>
	<script src="<?php echo BASE_URL.'asset/js/jquery.dataTables.min.js' ?>"></script>
	<script src="<?php echo BASE_URL.'asset/js/bootstrap.min.js' ?>"></script>
	<script src="<?php echo BASE_URL.'asset/js/datatables.bootstrap.js' ?>"></script>
	

	<style type="text/css">
		.selectLink {
			background: transparent;
			border: 0px solid #ccc;
			text-decoration: underline;
			width: 100%
		}

		.div-green {
			background-color: #00e400;
			color: white;
		}

		.div-yellow {
			background-color: #ffff02;
			color: black;
		}

		.div-orange {
			background-color: #ff7e00;
			color: white;
		}

		.div-red {
			background-color: #ff0000;
			color: white;
		}

		.div-brown {
			background-color: #7f0023;
			color: white;
		}

		.titleParam {
			color: #4a4a4a;
		}

		.dataTables_info {
			display: none;
		}

		.col-time {
			width: 60px !important;
			float: left;
		}

		.col-no {
			width: 15px !important;
			float: left;
		}

		.col-value {
			min-width: 100px;
		}

		.selectLink {
			background: transparent;
			border: 0px solid #ccc;
			text-decoration: underline;
			width: 100%
		}

		.div-green {
			background-color: #00e400;
			color: white;
		}

		.div-yellow {
			background-color: #ffff02;
			color: black;
		}

		.div-orange {
			background-color: #ff7e00;
			color: white;
		}

		.div-red {
			background-color: #ff0000;
			color: white;
		}

		.div-brown {
			background-color: #7f0023;
			color: white;
		}

		.titleParam {
			color: #4a4a4a;
		}

		.dataTables_info {
			display: none;
		}

		.col-time {
			width: 60px !important;
			float: left;
		}

		.col-no {
			width: 15px !important;
			float: left;
		}

		.col-value {
			min-width: 100px;
		}

		@font-face {
			font-family: 'OpenSansRegular'; /*a name to be used later*/
			src: url('/asset/fonts/OpenSans-Regular.ttf');
		}	

		@font-face {
			font-family: 'OpenSansBold'; /*a name to be used later*/
			src: url('/asset/fonts/OpenSans-Bold.ttf');
		}

		.button.cyan {
			background-color: #37a2d6;
			color: #fff;
		}

		.button.medium.hover-thin {
			padding: 5px 25px;
		}

		.button.cyan.hover-thin {
			border-color: #37a2d6;
		}

		.button.cyan.hover-thin:hover {
			background: none;
			border: 2px solid #37a2d6;
			color: #37a2d6;
		}
	</style>
</head>