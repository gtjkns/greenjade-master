<?php 
	require_once("../include/db_connect.php");
	require_once("../include/function.php");

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Sign up Form</title>
<link rel="stylesheet" type="text/css" href="assets\forms_assets\view.css" media="all">
<script type="text/javascript" src="assets\forms_assets\view.js"></script>
<script type="text/javascript" src="assets\forms_assets\calendar.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="assets\forms_assets\top.png" alt="">
	<div id="form_container">
	
		<h1><a>Sign up</a></h1>
		<form id="form_1123733" class="appnitro"  method="post" action="HumanSignup.php">
					<div class="form_description">
			<h2>Sign up</h2>
			</div>						
			<ul >
			
					<li id="username_li" >
		<label class="description" for="username">Username </label>
		<div>
			<input id="username" name="username" class="element text medium" type="text" maxlength="255" value="" required/> 
		</div> 
		</li>		<li id="password_li" >
		<label class="description" for="password">Password </label>
		<div>
			<input id="password" name="password" class="element text medium" type="password" maxlength="255" value="" required/> 
		</div> 
		</li>		<li id="email_li" >
		<label class="description" for="email">Email </label>
		<div>
			<input id="email" name="email" class="element text medium" type="email" maxlength="255" value="" required/> 
		</div> 
		</li>		<li id="name_li" >
		<label class="description" for="name">Name </label>
		<span>
			<input id="first_name" name= "first_name" class="element text" maxlength="255" size="8" value="" required/>
			<label>First</label>
		</span>
		<span>
			<input id="last_name" name= "last_name" class="element text" maxlength="255" size="14" value="" required/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Date of Birth </label>
		<span>
			<input id="mm" name="mm" class="element text" size="2" maxlength="2" value="" type="text" required> /
			<label for="mm">MM</label>
		</span>
		<span>
			<input id="dd" name="dd" class="element text" size="2" maxlength="2" value="" type="text" required> /
			<label for="dd">DD</label>
		</span>
		<span>
	 		<input id="yyyy" name="yyyy" class="element text" size="4" maxlength="4" value="" type="text" required>
			<label for="yyyy">YYYY</label>
		</span>
	
		<span id="calendar_5">
			<img id="cal_img_5" class="datepicker" src="assets/forms_assets/calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_5_3",
			baseField    : "element_5",
			displayArea  : "calendar_5",
			button		 : "cal_img_5",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="gender" >
		<label class="description" for="gender">Gender </label>
		<span>
			<input id="male" name="male" class="element radio" type="radio" value="1" required/>
<label class="choice" for="male">Male</label>
<input id="element_8_2" name="female" class="element radio" type="radio" value="2" required />
<label class="choice" for="female">Female</label>
<input id="element_8_3" name="other" class="element radio" type="radio" value="3" required/>
<label class="choice" for="other">Other</label>

		</span> 
		</li>		<li id="country" >
		<label class="description" for="country">Country </label>

		<?php 
			$country = find_country(); 
			
		?>
		<script>
			function sendId(val){
				$.ajax({
					type: "POST",
					url: "getCountry.php",
					data: 'country'+val,
				});
			}
		</script>

		<div>

		<select class="element select medium country" id="country" name="country" onchange="sendId(this.value)" required> 
		<?php echo $select; ?>
			<option value="" selected="selected">------Select Country------</option>
			  <?php 
			  	while ( $data = mysqli_fetch_assoc($country)) {
 					 echo "<option value='{".$data['id']."}'>".$data['country']."</option>";
				}
			  ?>
		</select>

		

	
		</div> 
		</li>		<li id="li_10" >
		<label class="description" for="city">City/State </label>
		<div>
		<select class="element select medium" id="city" name="city" required>
			<option value="" selected="selected">-----Select City-----</option>
			<?php 
				if(isset($_POST["country"])){				
					$city = find_city($_POST["country"]);  

				  	while ( $data = mysqli_fetch_assoc($city)) {
							 echo "<option value='{".$data['id']."}'>".$data['name']."</option>";
					}
				}
				
			  ?>

		</select>
		</div> 
		</li>		<li id="s_s_n" >
		<label class="description" for="s_s_n">Social Security Number </label>
		<div>
			<input id="element_6" name="s_s_n" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="i_n" >
		<label class="description" for="i_n">Insurance Number </label>
		<div>
			<input id="i_n" name="i_n" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_8" >
		<label class="description" for="element_8">Are you a: </label>
		<span>
			<input id="patient" name="patient_radio" class="element radio" type="radio" value="1" required/>
			<label class="choice" for="patient_radio">Patient</label>
			<input id="doctor" name="doctor_radio" class="element radio" type="radio" value="2" required/>
			<label class="choice" for="doctor_radio">Doctor</label>
			<input id="doctor" name="environment_radio" class="element radio" type="radio" value="3" required/>
			<label class="choice" for="element_8_2">Environmental Scientist</label>


		</span> 
		</li>		
					<li class="buttons">
			    <input type="hidden" name="form_id" value="1123733" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>		
			</ul>
		</form>	
	</div>
	<img id="bottom" src="assets\forms_assets\bottom.png" alt="">
	</body>
</html>