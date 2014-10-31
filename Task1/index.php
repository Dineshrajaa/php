<!DOCTYPE html>

<html>
<head>
	<title>
		Registration Form
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.js"></script>
	 
<script>
$(function() {
	//Initialize DatePicker
$('#datepicker').datepicker({
changeMonth: true, //need month change
changeYear: true, // need year change
dateFormat:'yy-mm-dd', // format

onSelect: function (date) {
var dob = new Date(date);
var today = new Date();
var sum= today.getFullYear()-dob.getFullYear() ;
$("#age").text(sum);
}
});
//Validation Plugin Definition
$("#submitbtn").click(function(){
	$("#registrationform").validate({
		rules:{
			mail:{
				email:true
			}
		}
	});
});

});
</script>
</head>
<body>
	<center>
		<label>REGISTRATION FORM</label><br/><br/><br/>
		<form id="registrationform" action="#" method="post" class="formstyle">
		<label for="fname">First Name:</label>
		<input type="text" id="fname" name="fname" required minlength="2" maxlength="10" /><br/>
		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname" /><br/>
		<label for="datepicker">Date Of Birth:</label>
		<input type="text" id="datepicker" name="datepicker" /><br/>
		<label for="age">Age:</label>
		<label id="age"></label><br/>
		<label for="gender">Gender:</label>
		<input type="radio" name="gender" id="gender" value="male"/>Male
		<input type="radio" name="gender" id="gender" value="female"/>Female<br/>
		<label for="address">Address</label>
		<textarea id="address" rows="4" cols="20">			
		</textarea><br/>
		<label for="mobile">Mobile no:</label>
		<input type="text" id="mobile" name="mobile" /><br/>
		<label for="mail">Email:</label>
		<input type="text" id="mail" name="mail" /><br/>
		<label for="country">Country</label>
		<select id="country" name="country">
			<option>Select Your Country</option>
		</select><br/>
		<label for="state">State</label>
		<select id="state" name="state">
			<option>Select Your State</option>
		</select><br/>
		<label for="city">City</label>
		<select id="city" name="city">
			<option>Select Your City</option>
		</select><br/>
		<label for="zip">Zip Code:</label>
		<input type="text" id="zip" name="zip"><br/>
		<label for="languages">Languages Known</label>
		<input type="checkbox" name="languages" value="tamil"/>Tamil
		<input type="checkbox" name="languages" value="english"/>English
		<br/>
		<label for="uname">Username:</label>
		<input type="text" id="uname" name="uname" /><br/>
		<label for="upass">Password:</label>
		<input type="password" id="upass" name="upass" /><br/>
		<label for="cupass">Confirm Password:</label>
		<input type="password" id="cupass" name="cupass"><br/>
		<input type="submit" id="submitbtn" value="Submit"/>
		<input type="reset" id="resetbtn" value="Reset"/>
		</form>
	</center>
</body>
</html>