<?php 
	require_once("../include/db_connect.php");
	require_once("../include/function.php");

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Hospital Form</title>
<link rel="stylesheet" type="text/css" href="assets\forms_assets\view.css" media="all">
<script type="text/javascript" src="assets\forms_assets\view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="assets\forms_assets\top.png" alt="">
	<div id="form_container">
	
		<h1><a>Hospital Form</a></h1>
		<form id="form_1123733" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Hospital Form</h2>
			<p></p>
		</div>						
			<ul >
				<?php 
			$country = find_country(); 
			
		?>
			
					<li id="li_1" >
		<label class="description" for="name">Name of Hospital </label>
		<div>
			<input id="name" name="name" class="element text medium" type="text" maxlength="255" value="" required/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="username">User Name </label>
		<div>
			<input id="username" name="username" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="password">Password </label>
		<div>
			<input id="password" name="password" class="element text medium" type="password" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="country">Country </label>
		<div>
		<select class="element select medium" id="country" name="country" required> 
				<option value="" selected="selected">------Select Country------</option>
			  <?php 
			  	while ( $data = mysqli_fetch_assoc($country)) {
 					 echo "<option value='{".$data['id']."}'>".$data['country']."</option>";
				}
			  ?>

		</select>
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">City\State </label>
		<div>
		<select class="element select medium" id="city" name="city" required> 
			<option value="" selected="selected"></option>
<option value="1" >First option</option>
<option value="2" >Second option</option>
<option value="3" >Third option</option>

		</select>
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="email">Email (Official) </label>
		<div>
			<input id="element_2" name="email" class="element text medium" type="email" maxlength="255" value="" required/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="web">Web Site (Official) </label>
		<div>
			<input id="element_3" name="web" class="element text medium" type="text" maxlength="255" value="http://"/> 
		</div> 
		</li> 
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="1123733" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Login" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="assets\forms_assets\bottom.png" alt="">
	</body>
</html>