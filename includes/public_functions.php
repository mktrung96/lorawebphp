<?php 
	/*
	*get Post
	*/

	function getRecord(){

		// PHẦN XỬ LÝ PHP
        // BƯỚC 1: KẾT NỐI CSDL
      	global $conn;
 
        // BƯỚC 2: TÌM TỔNG SỐ RECORDS
        $result = mysqli_query($conn, 'select count(id) as total from record');
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];
  		
        // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

        $limit = 3;
 
        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);
 		
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 		
        // Tìm Start
        $start = ($current_page - 1) * $limit;

        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức

		$selDateTable = isset($_GET['selDateTable']) ? $_GET['selDateTable'] : date('Y-m-d');
		$sql = "SELECT * FROM record WHERE (time_record >='".$selDateTable." "." 00:00:00'AND time_record <'". $selDateTable." "."23:59:59') LIMIT ".$start.",".$limit.";";
        // $result = mysqli_query($conn, "SELECT * FROM record LIMIT $start, $limit");

		// $sql = "SELECT * from record LIMIT 1";
		$result = mysqli_query($conn, $sql);
		$records = mysqli_fetch_all($result, MYSQLI_ASSOC); // MYSQLI_ASSOC lấy data dưới dạng tên key
		$commonTable = array(
			"selDateTable"=>"$selDateTable", 
			"records"=>$records, 
			"current_page"=>"$current_page",
			"total_page"=>"$total_page"
		);
		
		

		return $commonTable;
	}

	function pageNotFound(){
		header("Location: ".BASE_URL.'404.php');
		die();
	}

	function getDisplayInfo(){
		$displayInfo = array();
		global $conn;
		$sql = "SELECT * from record WHERE id = ( SELECT max(id) FROM record) LIMIT 1";
		$result = mysqli_query($conn, $sql);
		$record = mysqli_fetch_assoc($result);

		
		$api =  ROUND((($record['co']*28*1000/24.45)/30000)*100);
		
		$warning = getDescription($api);

		array_push($displayInfo, $api);
		array_push($displayInfo, $warning);
		array_push($displayInfo, "pinIcon");
		array_push($displayInfo, $record['time_record']);
		array_push($displayInfo, $record['temp']);
		array_push($displayInfo, $record['humi']);
		array_push($displayInfo, $record['co']);
		array_push($displayInfo, $record['co2']);
		array_push($displayInfo, $record['ethanol']);
		array_push($displayInfo, $record['toluene']);
		array_push($displayInfo, $record['acetone']);

		return $displayInfo;
	}
	/*
	 * Phương thức đưa ra cảnh báo cho người dùng khi biết aqi
	 * 
	 * @return List<String>
	 */
	function getDescription($data) {
		
		$warning =  array();
		if ($data <= 50) {
			$title = "Tốt";
			$des = "Chất lượng không khí tốt.";
			$pinIcon = "/icon_detail_green.png";
			$color = "green";
			$colorAQI = "#00e400";
		}
		if ($data > 50 && $data <= 100) {
			$title = "Trung bình";
			$des = "Nhóm nhạy cảm nên hạn chế ở bên ngoài.";
			$pinIcon = "/icon_detail_yellow.png";
			$color = "yellow";
			$colorAQI = "#ffff02";
		}
		if ($data > 100 && $data <= 200) {
			$title = "Kém";
			$des = "Nhóm nhạy cảm cần hạn chế thời gian ở bên ngoài.";
			$pinIcon = "/icon_detail_orange.png";
			$color = "orange";
			$colorAQI = "#ff7e00";
		}
		if ($data > 200 && $data <= 300) {
			$title = "Xấu";
			$des = "Nhóm nhạy cảm tránh ra ngoài. Những người khác hạn chế ở bên ngoài.";
			$pinIcon = "/icon_detail_red.png";
			$color = "red";
			$colorAQI = "#ff0000";
		}
		if ($data > 300) {
			$title = "Nguy hiểm";
			$des = "Mọi người nên ở trong nhà.";
			$pinIcon = "/icon_detail_brown.png";
			$color = "brown";
			$colorAQI = "#7f0023";
		}
		array_push($warning, $title);
		array_push($warning, $des);
		array_push($warning, $pinIcon);
		array_push($warning, $color);
		array_push($warning, $colorAQI);
		return $warning;
	}

	function getTypeDateStatistic(){
		$commonChart = array();
		$typeDateStat = isset($_GET['typeDateStatistic']) ? $_GET['typeDateStatistic'] : "co";
		$selDate = isset($_GET['selDate']) ? $_GET['selDate'] : date('Y-m-d'); 
		$listStatDate = array();
		for ($hourStat = 0; $hourStat < 24; $hourStat++) { 
			
			if ($selDate) {
				global $conn;
				$sql = ("SELECT ".$typeDateStat." FROM record WHERE "
					." (time_record >='".$selDate." ".$hourStat.":00:00'AND time_record <'". $selDate." ". $hourStat.":59:59');");
				
				$result = mysqli_query($conn, $sql);
				$recordHour = mysqli_fetch_all($result, MYSQLI_ASSOC);
				// nếu có bản record trong csdl thì tính trung bình và thêm vào mảng $listStatDate
				$dem = count($recordHour);

				if ($dem > 0) {
					$average ;
					$sum = 0;
					for ($i=0; $i < sizeof($recordHour); $i++) { 
						$sum += $recordHour[$i][$typeDateStat];		
					}
					(float)$average = $sum / $dem;
					array_push($listStatDate,$average);	
				}else{
					array_push($listStatDate,0.0);
				}
			}

			
		}
		
		array_push($commonChart,$selDate);
		array_push($commonChart,$listStatDate);
		return $commonChart;
	}
?>

