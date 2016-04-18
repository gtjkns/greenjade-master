<? php 
function confirm_query($result_set){
		if(!$result_set) {
			die("Database Query Failed.");
	}
}

function find_countries(){
	global $connection;
	$query = "SELECT id, country from pdhp_country ORDER BY country";
	$country = mysqli_query($connection, $query);
	confirm_query($country);

	return $country;
}

?>