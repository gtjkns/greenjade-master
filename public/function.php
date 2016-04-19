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
		$query = "SELECT pdhp_city.name FROM pdhp_city where id = ". {$country};
		$city = mysqli_query($connection, $query);
		confirm_query($city);
		echo "function being called"
		
		return $city;
	} 


?>