<?php 
	require_once("../include/db_connect.php");
	require_once("../include/function.php");
	function mysql_prep($string){
		global $connection;
		$escaped_string = mysqli_real_escape_string($connection, $string);
		return $escaped_string;
	}
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$dob = $_POST['yyyy'] ."-" . $_POST['mm'] . "-" .$_POST['dd'];
	$gender = $_POST['gender']
	$cid = $_POST['country'];
	$sid = $_POST['city'];
	$s_s_n = $_POST['s_s_n'];
	$i_n = $_POST['i_n'];


	if(isset($_POST['patient_radio'])){
		$insert = "INSERT INTO pdhp_patient(username, password, email, first_name, last_name, dob, gender, s_s_n, i_n) VALUES ($username, $password, $email, $first_name, $last_name, $dob, $gender, $s_s_n, $i_n);"
	}else if(isset($POST['doctor_radio'])){
		$insert = "INSERT INTO pdhp_doctor(username, password, email, first_name, last_name, dob, gender, s_s_n, i_n) VALUES ($username, $password, $email, $first_name, $last_name, $dob, $gender, $s_s_n, $i_n)";

	}else if(isset($_POST['environment_radio'])){
		$insert = "INSERT INTO pdhp_environmentalist(username, password, email, first_name, last_name, dob, gender, s_s_n, i_n) VALUES ($username, $password, $email, $first_name, $last_name, $dob, $gender, $s_s_n, $i_n)";
	}

	redirect_to("verify_email.php");

 ?>