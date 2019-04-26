
<?php require_once('config.php') ?>

<?php require_once(ROOT_PATH .'/includes/header.php') ?>
<?php require_once(ROOT_PATH .'/includes/public_functions.php') ?>
<?php $records = getRecord(); ?>
<body>
	<div id="chart_div" >
		<div class="row">
			<div class="col-md-3" style="text-align: center;">
				<div class="gauge" id="chart_temp"></div>
			</div>
			<div class="col-md-3" style="text-align: center;">
				<div class="gauge" id="chart_humi"></div>
			</div>
			<div class="col-md-3" style="text-align: center;">
				<div class="gauge" id="chart_co"></div>
			</div>
			<div class="col-md-3" style="text-align: center;">
				<div class="gauge" id="chart_no2"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3" style="text-align: center;">
				<div class="gauge" id="chart_so2"></div>
			</div>
			<div class="col-md-3" style="text-align: center;">
				<div class="gauge" id="chart_o3"></div>
			</div>
			<div class="col-md-3" style="text-align: center;">
				<div class="gauge" id="chart_pm25"></div>
			</div>
			<div class="col-md-3" style="text-align: center;">
				<div class="gauge" id="chart_pm10"></div>
			</div>
		</div>
	</div>

	<!-- <div id="container" style="min-width: 310px; max-width: 400px; height: 300px; margin: 0 auto"></div> -->
	
		

	<?php foreach ($records as $record) { ?>
		<script type="text/javascript">
			google.charts.load('current', {
				packages: ['gauge']
			}).then(function () {
				var dataTemp = google.visualization.arrayToDataTable([
					['Label', 'Value'],
					['Nhiệt độ', <?php echo $record['temp'] ?>]
					]);

				var dataHumi = google.visualization.arrayToDataTable([
					['Label', 'Value'],
					['Độ ẩm', <?php echo $record['humi'] ?> ]
					]);

				var dataCo = google.visualization.arrayToDataTable([
					['Label', 'Value'],
					['Khí CO', <?php echo $record['co'] ?> ]
					]);
				var dataNo2 = google.visualization.arrayToDataTable([
					['Label', 'Value'],
					['NO2', <?php echo $record['no2'] ?>]
					]);
				var dataSo2 = google.visualization.arrayToDataTable([
					['Label', 'Value'],
					['SO2', <?php echo $record['so2'] ?>]
					]);
				var dataO3 = google.visualization.arrayToDataTable([
					['Label', 'Value'],
					['O3', <?php echo $record['o3'] ?>]
					]);
				var dataPm25 = google.visualization.arrayToDataTable([
					['Label', 'Value'],
					['PM25', <?php echo $record['pm25'] ?>]
					]);
				var dataPm10 = google.visualization.arrayToDataTable([
					['Label', 'Value'],
					['PM10', <?php echo $record['pm10'] ?>]
					]);

				var optionsTemp = {
					min: 0 , max: 100,
					width: 250, height: 250,
					redFrom: 90, redTo: 100,
					yellowFrom: 75, yellowTo: 90,
					minorTicks: 5
				};

				var optionsHumi = {
					min: 0 , max: 100,
					width: 250, height: 250,
					
					minorTicks: 5
				};

				var optionsCo = {
					min: 0 , max: 10,
					width: 250, height: 250,
					redFrom: 8, redTo: 10,
					yellowFrom: 6, yellowTo: 8,
					greenFrom: 4, greenTo: 6,
					minorTicks: 5
				};

				var optionsNo2 = {
					min: 0 , max: 10,
					width: 250, height: 250,
					redFrom: 7, redTo: 10,
					yellowFrom: 5, yellowTo: 7,
					greenFrom: 4, greenTo: 7,
					minorTicks: 5
				};

				var optionsSo2 = {
					min: 0 , max: 10,
					width: 250, height: 250,
					redFrom: 7, redTo: 10,
					yellowFrom: 5, yellowTo: 7,
					greenFrom: 4, greenTo: 7,
					minorTicks: 5
				};

				var optionsO3 = {
					min: 0 , max: 10,
					width: 250, height: 250,
					redFrom: 7, redTo: 10,
					yellowFrom: 5, yellowTo: 7,
					greenFrom: 4, greenTo: 7,
					minorTicks: 5
				};

				var optionsPm25 = {
					min: 0 , max: 20,
					width: 250, height: 250,
					redFrom: 7, redTo: 20,
					yellowFrom: 5, yellowTo: 7,
					greenFrom: 4, greenTo: 5	,
					minorTicks: 5
				};

				var optionsPm10 = {
					min: 0 , max: 100,
					width: 250, height: 250,
					redFrom: 70, redTo: 100,
					yellowFrom: 50, yellowTo: 70,
					greenFrom: 40, greenTo: 50,
					minorTicks: 5
				};

				var chartTemp = new google.visualization.Gauge(document.getElementById('chart_temp'));
				var chartHumi = new google.visualization.Gauge(document.getElementById('chart_humi'));
				var chartCo = new google.visualization.Gauge(document.getElementById('chart_co'));
				var chartNo2 = new google.visualization.Gauge(document.getElementById('chart_no2'));
				var chartSo2 = new google.visualization.Gauge(document.getElementById('chart_so2'));
				var chartO3 = new google.visualization.Gauge(document.getElementById('chart_o3'));
				var chartPm25 = new google.visualization.Gauge(document.getElementById('chart_pm25'));
				var chartPm10 = new google.visualization.Gauge(document.getElementById('chart_pm10'));

				chartTemp.draw(dataTemp, optionsTemp);
				chartHumi.draw(dataHumi, optionsHumi);
				chartCo.draw(dataCo, optionsCo);
				chartNo2.draw(dataNo2, optionsNo2);
				chartSo2.draw(dataSo2, optionsSo2);
				chartO3.draw(dataO3, optionsO3);
				chartPm25.draw(dataPm25, optionsPm25);
				chartPm10.draw(dataPm10, optionsPm10);

				setInterval(function() {
					dataTemp.setValue(0, 1, <?php echo $record['temp'] ?>);
					chartTemp.draw(dataTemp, optionsTemp);
				}, 1000);
				setInterval(function() {
					dataHumi.setValue(0, 1, <?php echo $record['humi'] ?>);
					chartHumi.draw(dataHumi, optionsHumi);
				}, 1000);
				setInterval(function() {
					dataCo.setValue(0, 1, <?php echo $record['co'] ?>);
					chartCo.draw(dataCo, optionsCo);
				}, 1000);
				setInterval(function() {
					dataNo2.setValue(0, 1, <?php echo $record['no2'] ?>);
					chartNo2.draw(dataNo2, optionsNo2);
				}, 1000);
				setInterval(function() {
					dataSo2.setValue(0, 1, <?php echo $record['so2'] ?>);
					chartSo2.draw(dataSo2, optionsSo2);
				}, 1000);
				setInterval(function() {
					dataO3.setValue(0, 1, <?php echo $record['o3'] ?>);
					chartO3.draw(dataO3, optionsO3);
				}, 1000);
				setInterval(function() {
					dataPm25.setValue(0, 1, <?php echo $record['pm25'] ?>);
					chartPm25.draw(dataPm25, optionsPm25);
				}, 1000);
				setInterval(function() {
					dataPm10.setValue(0, 1, <?php echo $record['humi'] ?>);
					chartPm10.draw(dataPm10, optionsPm10);
				}, 1000);

			});
		</script>
		<?php }  ?>

		<!-- <script type="text/javascript">

			Highcharts.chart('container', {

				chart: {
					type: 'gauge',
					plotBackgroundColor: null,
					plotBackgroundImage: null,
					plotBorderWidth: 0,
					plotShadow: false
				},

				title: {
					text: 'Speedometer'
				},

				pane: {
					startAngle: -150,
					endAngle: 150,
					background: [{
						backgroundColor: {
							linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
							stops: [
							[0, '#FFF'],
							[1, '#333']
							]
						},
						borderWidth: 0,
						outerRadius: '109%'
					}, {
						backgroundColor: {
							linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
							stops: [
							[0, '#333'],
							[1, '#FFF']
							]
						},
						borderWidth: 1,
						outerRadius: '107%'
					}, {
            // default background
        }, {
        	backgroundColor: '#DDD',
        	borderWidth: 0,
        	outerRadius: '105%',
        	innerRadius: '103%'
        }]
    },

    // the value axis
    yAxis: {
    	min: 0,
    	max: 200,

    	minorTickInterval: 'auto',
    	minorTickWidth: 1,
    	minorTickLength: 10,
    	minorTickPosition: 'inside',
    	minorTickColor: '#666',

    	tickPixelInterval: 30,
    	tickWidth: 2,
    	tickPosition: 'inside',
    	tickLength: 10,
    	tickColor: '#666',
    	labels: {
    		step: 2,
    		rotation: 'auto'
    	},
    	title: {
    		text: 'km/h'
    	},
    	plotBands: [{
    		from: 0,
    		to: 120,
            color: '#55BF3B' // green
        }, {
        	from: 120,
        	to: 160,
            color: '#DDDF0D' // yellow
        }, {
        	from: 160,
        	to: 200,
            color: '#DF5353' // red
        }]
    },

    series: [{
    	name: 'Speed',
    	data: [80],
    	tooltip: {
    		valueSuffix: ' km/h'
    	}
    }]

},
// Add some life
function (chart) {
	if (!chart.renderer.forExport) {
		setInterval(function () {
			var point = chart.series[0].points[0],
			newVal,
			inc = Math.round((Math.random() - 0.5) * 20);

			newVal = point.y + inc;
			if (newVal < 0 || newVal > 200) {
				newVal = point.y - inc;
			}

			point.update(newVal);

		}, 3000);
	}
});
</script> -->


<?php require_once(ROOT_PATH .'/includes/Footer.php') ?>
