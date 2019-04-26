<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="view/asset/img/logo_dsvn.png" type="image/x-ico" />
<link href="view/asset/css/bootstrap.min.css" rel="stylesheet">
<link href="view/asset/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="view/asset/css/datatables.bootstrap.css" rel="stylesheet">
<link href="view/asset/css/custom.css" rel="stylesheet">
<link href="view/asset/css/leaflet.css" rel="stylesheet">
<link href="view/asset/css/bootstrap-datepicker.css" rel="stylesheet">
<link href="view/asset/css/font-awesome.min.css" rel="stylesheet">
<title>LoraWeb</title>
<script src="view/asset/js/jquery-3.2.1.min.js"></script>
<script src="view/asset/js/bootstrap.min.js"></script>
<script src="view/asset/js/jquery.dataTables.min.js"></script>
<script src="view/asset/js/datatables.bootstrap.js"></script>
</head>
<body>
	<style type="text/css">
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

	<div class="content">
		<div class="row">
			<div class="col-md-12"
				style="margin-top: 5px; padding: 5px; margin-bottom: -10px;">
				<a href="DisplayAQI.do"> <img
					src="view/asset/img/bannerdsvn.png" class="hidden-xs"
					style="width: 100%"> <img
					src="view/asset/img/bannerdsvn-mobile.png"
					class="hidden-sm hidden-md hidden-lg" style="width: 100%">
				</a>
			</div>
		</div>
		<style type="text/css">
h3 {
	color: #38608f
}

h4 {
	color: #5182bb
}

strong {
	font-weight: 900;
	font-size: 15px;
	font-family: initial;
}
</style>



		<div class="row">
			<div class="col-md-12" style="margin-top: 10px; padding: 5px">
				<div
					style="background: #FFFFFF; box-shadow: -1px 1px 10px 1px rgba(0, 0, 0, 0.21); padding-top: 10px; padding-left: 30px; padding-right: 30px; padding-bottom: 30px">
					<h3>Thông tin về AQI</h3>
					Chỉ số chất lượng không khí (Air Quality Index viết tắt là AQI) là
					chỉ số được tính toán từ các thông số quan trắc các chất ô nhiễm
					trong không khí, nhằm cho biết tình trạng chất lượng không khí và
					mức độ ảnh hưởng đến sức khỏe con người, được biểu diễn qua một
					thang điểm.<br> Các thông số được sử dụng trên website để tính
					toán AQI bao gồm: CO, SO2, O3, NO2, PM2.5, PM10.<br> Giá trị
					AQI cuối cùng sẽ được tính theo giá trị AQI cao nhất của các thông
					số kể trên.<br> <br>
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
					<div class="text-center">
						<span
							style="font-style: italic; font-family: -webkit-pictograph; font-size: 15px;">Ghi
							chú: Nhóm nhạy cảm bao gồm: trẻ em, người già và những người mắc
							bệnh hô hấp</span>
					</div>

					<h4>PM2.5 và PM10</h4>
					<strong>Bụi</strong> là tên chung cho các hạt chất rắn có đường
					kính nhỏ cỡ vài micrômét đến nửa milimét, tự lắng xuống theo trọng
					lượng của chúng nhưng vẫn có thể lơ lửng trong không khí một thời
					gian sau.<br> PM trong PM2.5 hay PM10 là viết tắt của
					Particulate matter, có nghĩa là chất dạng hạt. PM2.5 hay PM10 là
					những chỉ số về chất lượng không khí, chỉ kích thước và mật độ
					những hạt trôi nổi trong không khí.<br> <strong>Bụi
						PM2.5</strong> là các hạt bụi lơ lửng có đường kính nhỏ hơn hoặc bằng 2,5
					µm (micromet).<br> <strong>Bụi PM10</strong> là các hạt bụi lơ
					lửng có đường kính nhỏ hơn hoặc bằng 10 µm (micromet). <br> <strong>Nguồn
						phát sinh:</strong> Bụi PM2.5 đến từ các nguồn gây ô nhiễm như khí thải của
					phương tiện giao thông, hoạt động của các nhà máy, xây dựng công
					trình, nhà cửa, các sản phẩm sau đốt cháy...<br> <strong>Tác
						hại:</strong> những chất dạng hạt có đường kính dưới 10µm có thể xâm nhập
					vào cơ thể người qua hoạt động hít thở. Khi bụi siêu vi PM10 xâm
					nhập vào cơ thể qua đường dẫn khí, chúng sẽ tích tụ trên phổi, gây
					tác hại rất lớn về lâu dài. Riêng loại bụi PM2.5, chúng đặc biệt
					nguy hiểm khi có khả năng luồn lách vào các túi phổi và tĩnh mạch
					phổi, gây nên nhiều căn bệnh chết người.<br>

					<h4>CO</h4>
					<strong>Cacbon monoxit:</strong> công thức hóa học CO, là một chất
					khí không màu, không mùi, bắt cháy và có độc tính cao.<br> <strong>Nguồn
						phát sinh:</strong> Khí CO hình thành ở những nơi đốt than thiếu ôxy, như
					từ khói thải của lò gạch nơi mà than cháy không triệt để, ống khói
					nhà máy nhiệt điện dùng than đá, các nồi nấu nhựa đường, khí xả
					động cơ hay bếp than tổ ong và có một lượng đáng kể trong khói
					thuốc lá.<br> <strong>Tác hại:</strong> Khi hít phải, CO sẽ đi
					vào máu, chúng phản ứng với Hemoglobin (có trong hồng cầu) thành
					một cấu trúc bền vững nhưng không có khả năng tải ôxy, khiến cho cơ
					thể bị ngạt. Nếu lượng CO hít phải lớn, sẽ có cảm giác đau đầu,
					chóng mặt, mệt mỏi. Nếu CO nhiều, có thể bất tỉnh hoặc chết ngạt
					rất nhanh. Khi bị ôxy hoá, CO biến thành khí cacbonic (CO2). Khí
					CO2 cũng gây ngạt nhưng không độc bằng CO.<br>
					<h4>SO2</h4>
					<strong>Lưu huỳnh điôxit</strong> (hay còn gọi là anhiđrit
					sunfurơ), công thức hóa học SO2, là một khí vô cơ không màu, nặng
					hơn không khí. SO2 thường được mô tả là "mùi hôi của lưu huỳnh bị
					đốt cháy".<br> <strong>Nguồn phát sinh:</strong> SO2 phát sinh
					khi đốt mọi thứ nguyên liệu hàng ngày (than đá, khí, gỗ và các chất
					hữu cơ khác như phân khô, rơm rác…). Khi nồng độ SO2 đạt đến 5 phần
					triệu thì các hội chứng bệnh lý ở người tiếp xúc bắt đầu xuất hiện.<br>
					<strong>Tác hại:</strong> Khí SO2 xâm nhập vào cơ thể qua đường hô
					hấp hoặc hoà tan với nước bọt, từ đó qua đường tiêu hoá để ngấm vào
					máu. SO2 có thể kết hợp với các hạt nước nhỏ hoặc bụi ẩm để tạo
					thành các hạt axít H2SO4 nhỏ li ti, xâm nhập qua phổi vào hệ thống
					bạch huyết. Trong máu, SO2 tham gia nhiều phản ứng hoá học để làm
					giảm dự trữ kiềm trong máu gây rối loạn chuyển hoá đường và
					protêin, gây thiếu vitamin B và C, tạo ra methemoglobine để chuyển
					Fe2+ (hoà tan) thành Fe3+(kết tủa) gây tắc nghẽn mạch máu cũng như
					làm giảm khả năng vận chuyển ôxy của hồng cầu, gây co hẹp dây thanh
					quản, khó thở.<br>
					<h4>NO2</h4>
					Nitơ điôxít hay điôxít nitơ, công thức hóa học NO2, là một trong
					các loại ôxít nitơ. NO2 là khí được xem là bền vững ,màu vàng sậm
					của nó có thể làm giảm tầm nhìn và tạo nên màu nâu đặc trưng bao
					phủ lên vùng đô thị. <br> <strong>Nguồn phát sinh:</strong>
					Khí NOx xuất hiện trong quá trình đốt cháy nguyên liệu trong các
					động cơ đốt trong (khí xả của phương tiện giao thông...), trong
					công nghiệp sản xuất axít HNO3 , quá trình hàn điện và quá trình
					phân huỷ nhựa celluloid. NO2 và NO là chất thường gặp nhất. Chất
					khí này được hình thành giữa khi Nitơ và oxy trong không khí kết
					hợp với nhau ở điều kiện nhiệt độ cao. Do vậy nó chỉ thường thấy ở
					các khu công nghiệp và đô thị lớn. <br> <strong>Tác
						hại:</strong> NO2 có độ hấp thụ mạnh đối với các tia cực tím tạo nên ô
					nhiễm quang hóa học .NO2 cũng có thể tạo mưa acid. Loại độc tố
					thường gặp nhất là NO2 (ôxit nitơ). Đó là một trong số những
					loại chất độc được chú ý nhất vì khi trộn NO2 với hơi nước
					sẽ tạo thành axít nitric HNO3 và trở thành chất có thể gây hại
					cho phổi.<br> Con người nếu tiếp xúc lâu với NO2 ở 0.06 ppm
					có thể gia tăng các bệnh về đường hô hấp. Con người có thể nhận
					biết được mùi của NO2 khi trong không khí có chứa NO2 với một nồng
					độ lớn hơn hoặc bằng 0.12 ppm .Với nồng độ ở 5 ppm, NO2 gây tác hại
					cho bộ máy hô hấp sau vài phút và ở nồng độ từ 1.5 đến 50 ppm. NO2
					sẽ gây nguy hại cho tim phổi trong vài giờ.<br>
					<h4>O3</h4>
					<strong>Ôzôn,</strong> công thức hóa học O3, là chất khí không màu,
					với nồng độ thấp không có mùi, nhưng ở nồng độ cao có mùi hăng
					mạnh. Phân tử ôzôn có 3 nguyên tử ôxy nên nó tham gia phản ứng ôxy
					hóa rất mạnh, có khả năng tiêu hủy hầu hết chất hữu cơ.<br> <strong>Nguồn
						phát sinh:</strong> Ôzôn được sinh ra là do tác dụng của ánh nắng mặt trời
					với hai chất: hydrocarbon và nitrogen oxide, được thải ra từ khói
					xe và các nhà máy. Khi nhiệt độ tăng cao và “đứng gió”, nồng độ
					ôzôn trong không khí sẽ tăng cao.<br> Ở đây chúng ta cần phân
					biệt tầng ôzôn bảo vệ trái đất và sự ô nhiễm ôzôn: tầng ôzôn trong
					khí quyển ở tầng bình lưu, cách mặt đất khoảng 10-50km, có tác dụng
					lọc các tia cực tím của mặt trời, giảm bức xạ bảo vệ sự sống trên
					trái đất; còn sự ô nhiễm ôzôn ở mặt đất lại gây hại cho sức khỏe
					con người.<br> <strong>Tác hại:</strong> Nếu hít phải khí
					ôzôn, nó gây tổn thương các tế bào biểu mô lót của đường hô hấp,
					gây viêm, dẫn đến ho, ngứa họng, làm giảm chức năng phổi. Từ đó làm
					cho bệnh hen suyễn, khí phế thũng, viêm phế quản mạn, bệnh phổi tắc
					nghẽn mạn tính… nặng lên, làm giảm sức đề kháng của cơ thể với bệnh
					tật. Đối với bệnh nhân bị rung nhĩ do rối loạn nhịp tim, nguy cơ tử
					vong tăng cao hơn do ô nhiễm ôzôn.<br>

					<div class="row text-right" style="margin-right: 15px">
						<a href="/project3_lora_web/DisplayAQI.do"><< Quay lại</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="footerCustom">
		<div class="container">
			<p class="textFooter">
				<img src="view/asset/img/logo_bk.png" width="25px">
				&emsp;Powered by <a href="#">LAB thầy Nguyễn Hoàng Dũng</a><br>
			</p>
		</div>
	</footer>
</body>
</html>