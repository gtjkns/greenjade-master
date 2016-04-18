<?php require_once("../include/db_connect.php"); ?>
<?php require_once("../include/functions.php"); ?> 


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Sign up Form</title>
<link rel="stylesheet" type="text/css" href="assets\forms_assets\view.css" media="all">
<script type="text/javascript" src="assets\forms_assets\view.js"></script>
<script type="text/javascript" src="assets\forms_assets\calendar.js"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="assets\forms_assets\top.png" alt="">
	<div id="form_container">
	
		<h1><a>Sign up</a></h1>
		<form id="form_1123733" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Sign up</h2>
			</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Username </label>
		<div>
			<input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value="" required/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Password </label>
		<div>
			<input id="element_2" name="element_2" class="element text medium" type="text" maxlength="255" value="" required/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Email </label>
		<div>
			<input id="element_3" name="element_3" class="element text medium" type="text" maxlength="255" value="" required/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Name </label>
		<span>
			<input id="element_4_1" name= "element_4_1" class="element text" maxlength="255" size="8" value="" required/>
			<label>First</label>
		</span>
		<span>
			<input id="element_4_2" name= "element_4_2" class="element text" maxlength="255" size="14" value="" required/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Date </label>
		<span>
			<input id="element_5_1" name="element_5_1" class="element text" size="2" maxlength="2" value="" type="text" required> /
			<label for="element_5_1">MM</label>
		</span>
		<span>
			<input id="element_5_2" name="element_5_2" class="element text" size="2" maxlength="2" value="" type="text" required> /
			<label for="element_5_2">DD</label>
		</span>
		<span>
	 		<input id="element_5_3" name="element_5_3" class="element text" size="4" maxlength="4" value="" type="text" required>
			<label for="element_5_3">YYYY</label>
		</span>
	
		<span id="calendar_5">
			<img id="cal_img_5" class="datepicker" src="calendar.gif" alt="Pick a date.">	
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
		 
		</li>		<li id="li_8" >
		<label class="description" for="element_8">Gender </label>
		<span>
			<input id="element_8_1" name="element_8" class="element radio" type="radio" value="1" required/>
<label class="choice" for="element_8_1">Male</label>
<input id="element_8_2" name="element_8" class="element radio" type="radio" value="2" required />
<label class="choice" for="element_8_2">Female</label>
<input id="element_8_3" name="element_8" class="element radio" type="radio" value="3" required/>
<label class="choice" for="element_8_3">Other</label>

		</span> 
		</li>		<li id="li_9" >
		<label class="description" for="element_9">Country </label>
		
		<?php// $country = find_country(); ?>
		

		<div>
		<select class="element select medium" id="element_9" name="element_9" required> 
			<option value="1" selected="selected"></option>
			  <?php while ($item = mysqli_fetch_assoc($result)) { ?>
   				<option value=<?php echo $row['id']?>><?php echo $row['country']?> </option>
   			<?php } ?>

		</select>
		</div> 
		</li>		<li id="li_10" >
		<label class="description" for="element_10">City/State </label>
		<div>
		<select class="element select medium" id="element_10" name="element_10" required> 
			<option value="" selected="selected"></option>
<option value="1" >Third option</option>

		</select>
		</div> 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">Social Security Number </label>
		<div>
			<input id="element_6" name="element_6" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_7" >
		<label class="description" for="element_7">Insurance Number </label>
		<div>
			<input id="element_7" name="element_7" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_8" >
		<label class="description" for="element_8">Are you a: </label>
		<span>
			<input id="element_8_1" name="element_8" class="element radio" type="radio" value="1" required/>
			<label class="choice" for="element_8_1">Patient</label>
			<input id="element_8_2" name="element_8" class="element radio" type="radio" value="2" required/>
			<label class="choice" for="element_8_2">Doctor</label>
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