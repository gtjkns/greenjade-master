<?php 
	
	function confirm_query($result_set){
			if(!$result_set) {
				die("Database Query Failed.");
		}
	}

	function find_country(){
		global $connection;
		$query = "SELECT id, country from pdhp_country ORDER BY country";
		$country = mysqli_query($connection, $query);
		confirm_query($country);

		return $country;
	}

	function find_city($country){
		
		global $connection;
		//$query = "SELECT pdhp_city.name FROM pdhp_city where region_id = " . $country;
		$query = "SELECT name FROM pdhp_city ORDER BY name";
		$city = mysqli_query($connection, $query);
		confirm_query($city);
		
		
		return $city;
	} 


	function patientDoctor(){
		
	}

	function redirect($url, $permanent = false) {
		if($permanent) {
			header('HTTP/1.1 301 Moved Permanently');
		}
		header('Location: '.$url);
		exit();
}

function mysql_prep($string){
		global $connection;
		$escaped_string = mysqli_real_escape_string($connection, $string);
		return $escaped_string;
	}




?>