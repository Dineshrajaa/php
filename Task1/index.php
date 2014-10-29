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
	 
<script>
$(function() {
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
$("#veti").click(function(){
	alert("Your location is: " + geoplugin_countryName() + ", " + geoplugin_region() + ", " + geoplugin_city());
});
});
</script>
</head>
<body>
	<center>
		<label>REGISTRATION FORM</label><br/><br/><br/>
		<form id="registrationform" action="#" method="post" class="formstyle">
		<label for="fname">First Name:</label>
		<input type="text" id="fname"/><br/>
		<label for="lname">Last Name:</label>
		<input type="text" id="lname"/><br/>
		<label for="datepicker">Date Of Birth:</label>
		<input type="text" id="datepicker"/><br/>
		<label for="age">Age:</label>
		<label id="age"></label><br/>
		<label for="gender">Gender:</label>
		<input type="radio" name="gender" id="gender" value="male"/>Male
		<input type="radio" name="gender" id="gender" value="female"/>Female<br/>
		<label for="address">Address</label>
		<textarea id="address" rows="4" cols="20">			
		</textarea><br/>
		<label for="mobile">Mobile no:</label>
		<input type="text" id="mobile"/><br/>
		<label for="mail">Email:</label>
		<input type="text" id="mail"/><br/>
		<input type="button" id="veti"/>

		</form>
	</center>
</body>
</html>