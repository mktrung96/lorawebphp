<?php require_once('config.php') ?>
<?php require_once(ROOT_PATH .'/includes/public_functions.php') ?>
<?php require_once(ROOT_PATH .'/includes/header.php') ?>
<?php $commonTable = getRecord(); ?>
<?php $displayInfo = getDisplayInfo(); ?>
<?php $commonChart = getTypeDateStatistic(); ?>
<body>

	<div class="content">
		<div class="row">
			<div class="col-md-12"
			style="margin-top: 5px; padding: 5px; margin-bottom: -10px;">
			<a href="<?php echo BASE_URL.'index.php' ?>"> <img
				src="<?php echo BASE_IMAGE.'/bannerdsvn.png' ?>" class="hidden-xs"
				style="width: 100%"> <img
				src="<?php echo BASE_IMAGE.'/bannerdsvn-mobile.png' ?>"
				class="hidden-sm hidden-md hidden-lg" style="width: 100%">
			</a>
		</div>
	</div>


	<div class="row">
		<div class="col-md-12" style="margin-top: 10px; padding: 5px">
			<div
			style="background: #FFFFFF; box-shadow: -1px 1px 10px 1px rgba(0, 0, 0, 0.21);">
			<div class="boxHeader">
				<div class="col-md-2 col-xs-3 col-sm-3"
				style="background: white; height: 100%;">
				<a href="<?php echo BASE_URL.'index.php' ?>"><span class="header1"
					style="color: #40b7fb;">AQI</span></a>
				</div>
			</div>
			<form>
				<div class="row" style="background-color: white; margin: 10px">
					<div class="col-md-6">
						<div id="div1" class="row div-<?php echo $displayInfo['1']['3'];?>"
							style="box-shadow: 0 1px 6px 1px rgba(0, 0, 0, 0.21);">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="row text-center">
									<p style="margin-top: 10px; font-weight: bold;">Chỉ số
									chất lượng không khí</p>
								</div>
								<div id="divNumber" class="row text-center">
									<img id="pinIcon" src="<?php echo BASE_IMAGE.$displayInfo['1']['2'] ?>" style="margin-bottom: 10px; float: left; margin-right: 10px;margin-left: 113px" width="70px" height="70px">
									<span id="aqis" style=" font-family: 'OpenSansBold'; font-size: 65px; display: table; line-height: 100%"><?php echo $displayInfo['0'] ?></span>
								</div>

							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="row"
								style="text-align: left; padding-top: 20px; padding-left: 20px;">
								<p style="font-weight: bold; font-size: 18px;" id="title"><?php echo $displayInfo['1']['0'] ?></p>
							</div>
							<div class="row"
							style="text-align: left; padding-right: 10px; padding-left: 20px;">
							<p id="des"><?php echo $displayInfo['1']['1'] ?></p>
						</div>
					</div>
				</div>
				<div id="div2" class="row"
				style="background-color: white; box-shadow: 0 1px 6px 1px rgba(0, 0, 0, 0.21); margin-top: 10px">
				<div class="col-md-8 col-sm-6 col-xs-12"
				style="margin-bottom: -5px; padding: 10px;">
				<div class="col-md-12 col-sm-12 col-xs-12"
				style="text-align: left;">
				<i class="fa fa-map-marker"
				style="margin-left: 2px; margin-right: 2px"
				aria-hidden="true"></i> <span style="margin-left: 5px">
				Ga gần nhất:  </span>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12"
			style="text-align: left; margin-top: 10px">
			<i class="fa fa-clock-o" aria-hidden="true"></i> <span
			style="margin-left: 5px">Cập nhật lần cuối: <strong
			id="receivedDate"><?php echo $displayInfo['3'] ?></strong></span>
		</div>
	</div>
	<div class="col-md-4 col-sm-6 col-xs-12"
	style="text-align: left; padding: 10px">
	<div class="col-md-12 col-sm-12 col-xs-12"
	style="text-align: left;" value="" name="trainID">
	<i class="fa fa-map-marker"
	style="margin-left: 2px; margin-right: 2px"
	aria-hidden="true"></i> <span style="margin-left: 5px">
	:</span>
</div>
<div class="col-md-12 col-sm-12 col-xs-12"
style="text-align: left; margin-top: 10px"
value=""name="trainID">
<i class="fa fa-map-marker"
style="margin-left: 2px; margin-right: 2px"
aria-hidden="true"></i> <span style="margin-left: 5px">
Khoang : </span><span>
</div>
</div>
</div>
<div id="div35" class="row"
style="background-color: white; box-shadow: 0 1px 6px 1px rgba(0, 0, 0, 0.21); margin-top: 10px; padding: 7px">
<div class="row">
	<div class="col-md-6 col-sm-6 col-xs-6" style="padding: 0px;">
		<div class="col-md-12" style="margin-top: 5px; padding: 0px;">
			<div class="col-md-6 col-xs-6 col-sm-6 text-right">
				<img src="<?php echo BASE_IMAGE.'/icon_weather.png' ?>">
			</div>
			<div class="col-md-6 col-xs-6 col-sm-6 text-left"
			style="padding: 0px;">
			<p style="font-size: 20px;">
				<span id="temp"><?php echo $displayInfo['4'] ?></span><span
				style="font-size: 15px;"> °C</span>
			</p>
		</div>
	</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-6" style="padding: 0px;">
	<div class="col-md-12" style="padding: 0px; margin-top: 5px">
		<div class="col-md-6 col-xs-6 col-sm-6 text-right">
			<img src="<?php echo BASE_IMAGE.'/icon_water.png' ?>">
		</div>
		<div class="col-md-6 col-xs-6 col-sm-6 text-left"
		style="padding: 0px;">
		<p style="font-size: 20px;">
			<span id="humi"><?php echo $displayInfo['5'] ?></span><span
			style="font-size: 15px;">%</span>
		</p>
	</div>
</div>
</div>



</div>
</div>
<div id="div3" class="row"
style="background-color: white; box-shadow: 0 1px 6px 1px rgba(0, 0, 0, 0.21); margin-top: 10px; padding: 7px">
<div id="aqiNomal">
	<div class="row" style="margin-left: 30px; margin-bottom: 10px">
		<div class="col-md-8 col-sm-8 col-xs-8" style="padding: 0px;">
		Nồng độ của từng khí (ppm):</div>
		<div class="col-md-4 col-sm-4 col-xs-4 text-right"
		style="padding: 0px;">
		<a href="Information.do" target="_blank"
		style="cursor: pointer; color: black"> <img width="20"
		height="20" src="<?php echo BASE_IMAGE.'/info.jpg' ?>"
		style="margin-right: 20px">
	</a>
</div>
</div>

<div class="row">
	<div class="col-md-4 col-sm-4 col-xs-4" style="padding: 0px;">
		<div class="col-md-12" style="margin-top: 5px; padding: 0px;">
			<div class="col-md-6 col-xs-6 col-sm-6 text-right">
				<p style="font-size: 20px;" class="titleParam">CO</p>
			</div>
			<div class="col-md-6 col-xs-6 col-sm-6 text-left"
			style="padding: 0px;">
			<p style="font-size: 20px;" id="co"><?php echo $displayInfo['6'] ?></p>
		</div>
	</div>
	<div class="col-md-12" style="margin-top: 5px; padding: 0px;">
		<div class="col-md-6 col-xs-6 col-sm-6 text-right">
			<p style="font-size: 20px;" class="titleParam">CO2</p>
		</div>
		<div class="col-md-6 col-xs-6 col-sm-6 text-left"
		style="padding: 0px;">
		<p style="font-size: 20px;" id="ethanol"><?php echo $displayInfo['7'] ?></p>
	</div>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-4" style="padding: 0px;">
	<div class="col-md-12" style="margin-top: 5px; padding: 0px;">
		<div class="col-md-6 col-xs-6 col-sm-6 text-right">
			<p style="font-size: 20px;" class="titleParam">C2H5-OH</p>
		</div>
		<div class="col-md-6 col-xs-6 col-sm-6 text-left">
			<p style="font-size: 20px;" id="toluene"><?php echo $displayInfo['8'] ?><p>
			</div>
		</div>
		<div class="col-md-12" style="margin-top: 5px; padding: 0px;">
			<div class="col-md-6 col-xs-6 col-sm-6 text-right">
				<p style="font-size: 20px;" class="titleParam">C7H8</p>
			</div>
			<div class="col-md-6 col-xs-6 col-sm-6 text-left">
				<p style="font-size: 20px;" id="acetone"><?php echo $displayInfo['9'] ?><p>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-4" style="padding: 0px;">
			<div class="col-md-12" style="margin-top: 5px; padding: 0px;">
				<div class="col-md-6 col-xs-6 col-sm-6 text-right">
					<p style="font-size: 20px;" class="titleParam">C3H6O</p>
				</div>
				<div class="col-md-6 col-xs-6 col-sm-6 text-left">
					<p style="font-size: 20px;" id="co2"><?php echo $displayInfo['10'] ?> </p></div>
				</div>


			</div>
		</div>


	</div>
</div>

<form>

</div>
<!-- </form>-->

<!-- divEnd -->
<div id="divEnd" class="col-md-6" style="padding-right: 0px ;">
	<!-- <div id="divInfomation" class="row"
	style="margin: 0px; box-shadow: 0 1px 6px 1px rgba(0, 0, 0, 0.21); padding: 0px;">

	<table class="table table-bordered" style="margin-bottom: 10px;">
		<tr>
			<th class="text-center">Khoảng giá trị AQI</th>
			<th class="text-center">Chất lượng không khí</th>
			<th class="text-center">Ảnh hưởng sức khỏe</th>
		</tr>
		<tr style="background: #02a747">
			<td>0 - 50</td>
			<td>Tốt</td>
			<td>Không ảnh hưởng đến sức khỏe.</td>
		</tr>
		<tr style="background: #f5f503">
			<td>51 - 100</td>
			<td>Trung bình</td>
			<td>Nhóm nhạy cảm nên hạn chế thời gian ở bên ngoài.</td>
		</tr>
		<tr style="background: #ffb802">
			<td>101 - 200</td>
			<td>Kém</td>
			<td>Nhóm nhạy cảm cần hạn chế thời gian ở bên ngoài.</td>
		</tr>
		<tr style="background: #ff0001">
			<td>201 - 300</td>
			<td>Xấu</td>
			<td>Nhóm nhạy cảm tránh ra ngoài. Những người khác hạn chế ở
			bên ngoài.</td>
		</tr>
		<tr style="background: #b40001">
			<td>Trên 300</td>
			<td>Nguy hại</td>
			<td>Mọi người nên ở trong nhà.</td>
		</tr>
	</table>
</div> -->
<!-- -->


<div id="divInfo" class="row text-center"
style="background-color: white; box-shadow: 0 1px 6px 1px rgba(0, 0, 0, 0.21); margin: 0px; margin-bottom: 10px; margin-top: 0px; padding-top: 15px;">
<div class="row" style="padding-left: 15px; padding-right: 15px;margin-bottom: 45px">
	<div class="col-md-12" style="padding: 0px; padding-top: 3px;">
		<div class="col-md-3 col-sm-3 col-xs-6 text-center"
		style="padding: 0px; margin-top: 2px;">
		<span
		style="color: #40b7fb; font-size: 20px; font-weight: bold;">Thống
	k&ecirc; ngày</span>
</div>
<div class="col-md-3 col-sm-3 col-xs-6" style="padding: 0px">
	<select id="indexType" class="form-control"
	style="width: 98%; margin-top: 2px"
	name="typeDateStatistic">
	
	<option value="co">Khí CO</option>
	<option value="co2">Khí CO2</option>
	<option value="ethanol">C2H5-OH</option>
	<option value="toluene">C7H8</option>
	<option value="acetone">C3H6O</option>
	<option value="temp">Nhiệt độ</option>
	<option value="humi">Độ ẩm</option>
	<!-- <?php foreach ($liStatParams as $key => $liStatParams) { ?>
		<option value = "<?php echo $liStatParams['statName']?>" escapeXml="true" />
			<?php if ($typeDateStatistic == $liStatParams['statName']) { ?>
				selected
			<?php } echo $liStatParams['note']?>

		</option>
		<?php } ?> -->

	</select>
</div>

<div class="col-md-2 col-sm-2 col-xs-6" style="padding: 0px">
	<input id="datepicker" class="form-control datepicker"
	type="text" name="selDate"
	style="width: 98%; margin-top: 2px;"
	value="<?php echo $commonChart['0'] ?> " </input>

</div>
<div class="col-md-3 col-sm-2 col-xs-6" style="padding: 0px">
	<button type="submit" id="btnSubmit" 
	class="button medium hover-thin cyan"
	style="margin-top: 2px;">Thực hiện</button>
</div>
</div>

</div>
<div class="col-md-12"
style="padding-left: 15px; padding-right: 15px; margin-top: 10px">
<div class="col-md-12" style="border-bottom: 1px solid #eee;"></div>
</div>


									<div class="col-md-12">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="col-md-12 col-sm-12 col-xs-12"
												style="height: 250px">
												<style>
canvas {
	-moz-user-select: none;
	-webkit-user-select: none;
	-ms-user-select: none;
}
</style>
												<canvas id="canvas"
													style="margin-top: 10px; width: 100%; height: 100%"></canvas>
											</div>
										</div>
									</div>


<div class="col-md-12 text-right" style="margin-top: 20px">
	<p style="font-style: italic; font-size: smaller;">* Biểu
	đồ sử dụng đơn vị đo nồng độ ppm</p>
</div>
</div>





<!-- </form> -->
<!-- /divEnd -->

<!-- div table -->




</div>



</div>
<!-- divInfo -->
<div id="divInfo" class="row text-center"
style="background-color: white; box-shadow: 0 1px 6px 1px rgba(0, 0, 0, 0.21); margin: 10px; margin-bottom: 10px; margin-top: 10px; padding-top: 15px;">
<div data-toggle="tooltip" data-placement="top" title="0 - 50 : Chất lượng kh&ocirc;ng kh&iacute; tốt"
class="col-md-2 col-sm-2 col-xs-4 col-md-offset-1 col-sm-offset-1"
style="padding: 0px;">
<img src="<?php echo BASE_IMAGE.'/icon_detail_green.png '?>"
style="margin-bottom: 5px">
<p>Tốt</p>
</div>

<div data-toggle="tooltip" data-placement="top"
title="51 - 100 : Nh&oacute;m nhạy cảm n&ecirc;n hạn chế thời gian ở b&ecirc;n ngo&agrave;i"
class="col-md-2 col-sm-2 col-xs-4" style="padding: 0px;">
<img src="<?php echo BASE_IMAGE.'/icon_detail_yellow.png'?>"
style="margin-bottom: 5px">
<p>Trung b&igrave;nh</p>
</div>
<div data-toggle="tooltip" data-placement="top"
title="101 - 200 : Nh&oacute;m nhạy cảm cần hạn chế thời gian ở b&ecirc;n ngo&agrave;i"
class="col-md-2 col-sm-2 col-xs-4" style="padding: 0px;">
<img src="<?php echo BASE_IMAGE.'/icon_detail_orange.png' ?>"
style="margin-bottom: 5px">
<p>K&eacute;m</p>
</div>
<div data-toggle="tooltip" data-placement="top"
title="201 - 300 : Nh&oacute;m nhạy cảm tr&aacute;nh ra ngo&agrave;i. Những người kh&aacute;c hạn chế ở b&ecirc;n ngo&agrave;i"
class="col-md-2 col-sm-2 col-xs-4" style="padding: 0px;">
<img src="<?php echo BASE_IMAGE.'/icon_detail_red.png' ?>"
style="margin-bottom: 5px">
<p>Xấu</p>
</div>
<div data-toggle="tooltip" data-placement="top"
title="300+ : Mọi người n&ecirc;n ở trong nh&agrave;"
class="col-md-2 col-sm-2 col-xs-4" style="padding: 0px;">
<img src="<?php echo BASE_IMAGE.'/icon_detail_brown.png' ?>"
style="margin-bottom: 5px">
<p>Nguy hiểm</p>
</div>
</div>







<!-- <form> -->
	<div class="col-md-12"
	style="padding-right: 0px; padding-bottom: 15px;">
	<div class="row"
	style="background-color: white; box-shadow: 0 1px 6px 1px rgba(0, 0, 0, 0.21); margin-right: 0px; padding-bottom: 7px;">
	<h3
	style="color: #40b7fb; font-size: 20px; font-weight: bold; margin-left: 20px;">Truy
vấn dữ liệu đo</h3>

<div class="col-md-5 col-sm-5 col-xs-12">
	<!-- <div class="form-group"> -->
		<label class="col-md-3 col-sm-4 col-xs-6 control-label">Thời gian</label>
		<div class="col-md-9 col-sm-8 col-xs-6">
			<input id="datepicker4" class="form-control datepicker"
			value="<?php echo $commonTable['selDateTable'] ?>" name="selDateTable"
			style="width: 98%; margin-top: 2px;">
		</div>
	</div>
	<div class="col-md-3 col-sm-2 col-xs-6">
		<button type="submit" id="btnSubmit"
		class="button medium hover-thin cyan" style="margin-top: 2px;">Thực hiện</button>
	</div>
	<div class="col-md-12 col-sm-12 col-xs-12"
	style="margin-top: 30px; margin-bottom: 30px">
	<div class="table-responsive mb-40" id="tableContainer">

		<table class="table" id="sample_1">
			<thead>
				<tr role="row">
					<th class="text-center col-no sorting_asc" tabindex="0"
					aria-controls="sample_1" rowspan="1" colspan="1"
					aria-sort="ascending"
					aria-label="STT: activate to sort column descending"
					style="width: 26px;">STT</th>
					<th class="col-time sorting" tabindex="0"
					aria-controls="sample_1" rowspan="1" colspan="1"
					aria-label="Ng&amp;agrave;y: activate to sort column ascending"
					style="width: 60px;">Time</th>
					
					<th class="col-value sorting" tabindex="0"
					aria-controls="sample_1" rowspan="1" colspan="1"
					aria-label="Nhiệt độ (°C): activate to sort column ascending"
					style="width: 104px;">Temperature (°C)</th>

					<th class="sorting" tabindex="0" aria-controls="sample_1"
					rowspan="1" colspan="1"
					aria-label="Độ ẩm (%): activate to sort column ascending"
					style="width: 68px;">Humidity (%)</th>

					<th class="sorting" tabindex="0" aria-controls="sample_1"
					rowspan="1" colspan="1"
					aria-label="CO (ppm): activate to sort column ascending"
					style="width: 64px;">CO (ppm)</th>
					<th class="sorting" tabindex="0" aria-controls="sample_1"
					rowspan="1" colspan="1"
					aria-label="O3 (ppm): activate to sort column ascending"
					style="width: 63px;">CO2 (ppm)</th>
					<th class="sorting" tabindex="0" aria-controls="sample_1"
					rowspan="1" colspan="1"
					aria-label="NO2 (ppm): activate to sort column ascending"
					style="width: 73px;">C2H5-OH (ppm)</th>
					<th class="sorting" tabindex="0" aria-controls="sample_1"
					rowspan="1" colspan="1"
					aria-label="SO2 (ppm): activate to sort column ascending"
					style="width: 71px;">C7H8 (ppm)</th>
					<th class="sorting" tabindex="0" aria-controls="sample_1"
					rowspan="1" colspan="1"
					aria-label="O3 (ppm): activate to sort column ascending"
					style="width: 63px;">C3H6O (ppm)</th>
					

				</tr>
			</thead>

			<tbody>
				<?php foreach ($commonTable['records'] as $key => $record): ?>
					<tr role="row" class="odd">
						<td class="text-center col-no sorting_1"><?php echo $record['id'] ?></td>
						<td class=" col-time"><?php echo $record['time_record'] ?></td>
						<td class=" col-value"><?php echo $record['temp'] ?></td>
						<td><?php echo $record['humi'] ?></td>
						<td><?php echo $record['co'] ?></td>
						<td><?php echo $record['co2'] ?></td>
						<td><?php echo $record['ethanol'] ?></td>
						<td><?php echo $record['toluene'] ?></td>
						<td><?php echo $record['acetone'] ?></td>


					</tr>
				<?php endforeach ?>
			</tbody>

		</table>
		

			
		<?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($commonTable['current_page'] > 1 && $commonTable['total_page'] > 1){
                echo '<a href="index.php?selDateTable='.$commonTable['selDateTable'].'&page='.($commonTable['current_page']-1).'">Prev</a> | ';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $commonTable['total_page']; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $commonTable['current_page']){
                    echo '<span>'.$i.'</span> | ';
                }
                else{
                    echo '<a href="index.php?selDateTable='.$commonTable['selDateTable'].'&page='.$i.'">'.$i.'</a> | ';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($commonTable['current_page'] < $commonTable['total_page'] && $commonTable['total_page'] > 1){
                echo '<a href="index.php?selDateTable='.$commonTable['selDateTable'].'&page='.($commonTable['current_page'] +1).'">Next</a> | ';
            }
           ?>
	<!-- end paging-->

			</div>
		</div>
	</div>
</div>
</form>
</div>

<div class="col-md-12" style="margin-top: 10px; padding: 5px">
	<div
	style="background: #FFFFFF; box-shadow: -1px 1px 10px 1px rgba(0, 0, 0, 0.21);">
</div>
</div>
</div>
</div>

<footer class="footerCustom">
	<div class="container">
		<p class="textFooter">
			<img src="<?php echo BASE_IMAGE.'/logo_bk.png '?>" width="25px">
			&emsp;Powered by <a href="#">LAB thầy Nguyễn Hoàng Dũng</a><br>

		</p>
	</div>
	
</footer>

<script src="<?php echo BASE_URL.'asset/js/chartJS/Chart.bundle.js' ?>"></script>
<script src="<?php echo BASE_URL.'asset/js/chartJS/utils.js'?>"></script>
<script src="<?php echo BASE_URL.'asset/js/leaflet.js'?>"></script>
<script src="<?php echo BASE_URL.'asset/js/bootstrap-datepicker.js' ?>"></script>


<div id="alert" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Lỗi</h4>
			</div>
			<div class="modal-body">
				<p id="message"></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Đ&oacute;ng</button>
			</div>
		</div>

	</div>
</div>


<script type="text/javascript">
	

	$(function() {
			

			$('[data-toggle="tooltip"]').tooltip();
			// change date chart 1 - bar
			$('#datepicker').datepicker({
				format : "yyyy-mm-dd",
			})
			$('#datepicker4').datepicker({
				format : "yyyy-mm-dd",
			})
			

		})
	</script>

	<script type="text/javascript">
		var color = Chart.helpers.color;

		// biến chart 1 - Bar
		var dataChart1 = new Array();
		
			
		// color từng cột
		colorAQI = new Array();
		<?php foreach ($commonChart['1'] as $key => $statDate) { ?>
			dataChart1.push("<?php echo $statDate ?>");
			colorAQI.push('#bdbdbd');

			// <?php if ( $statDate <=50) { ?>
			// 	colorAQI.push('#00e400');
			// <?php  } ?>
			// <?php if ( $statDate > 50 && data <= 100 ) { ?>
			// colorAQI.push('#ffff02');
			// <?php } ?>
			// <?php if ( $statDate > 100 && data <= 200 ) { ?>
			// colorAQI.push('#ff7e00');
			// <?php  }?>
			// <?php if ( $statDate > 200 && data <= 300 ) { ?>
			// colorAQI.push('#ff0000');
			// <?php } ?>
			// <?php if($statDate > 300) { ?>
			// colorAQI.push('#7f0023');
			// <?php } ?>
		<?php } ?>

		// khai báo chart 1
		new Chart(document.getElementById("canvas"), {

			type : 'bar',
			data : {
				labels : [ "00h", "", "", "03h", "", "", "06h",
				"", "", "09h", "", "", "12h", "", "",
				"15h", "", "", "18h", "", "", "21h", "",
				"" ],
				datasets : [

				{
					label : "",
					backgroundColor : colorAQI,
					data : dataChart1,
				} ]
			},

			options : {
				responsive : true,
				legend : {
					display : false,
					item : {
						hidden : false
					}
				},
				scales : {
					yAxes : [ {
						ticks : {
							beginAtZero : true,
						}
					} ]
				},
				title : {
					display : false,
					text : 'Biểu đồ thống kê AQI ngay'
				}
			}
		});

		
	</script>
</body>
</html>