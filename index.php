<!DOCTYPE html>
<html>
	<head>
		<title>User Registration Form</title>
	<link rel="stylesheet" href="UserRegistration.css" type="text/css">
	<script src="function.js" type="text/javascript"></script>
	</head>
<body>
	<h1>User Registration Form</h1>
	<div id="block">
		<form name="userinfo">
			
			<div class="tr">
				<div class="td"><label>Name</label></div>
				<div class="td"><input id="inputfn" type="text" name="fname" placeholder="Input First name"></div>
			</div>

			<div class="tr">
				<div class="td"><label>E-Mail Id</label></div>
				<div class="td"><input id="inputemail" type="emailid" name="emailid" placeholder="Input Email-Id"></div>
			</div>

			<div class="tr">
				<div class="td"><label>Address</label></div>
				<div class="td"><input id="inputadd1"  type="text" name="address1" placeholder="Input Address(Line 1)"></div>
			</div>
			
			<div class="tr">
				<div class="td"><label>Contact</label></div>
				<div class="td"><input id="contact"  type="text" name="c" placeholder="Input contact"></div>
			</div>

			<div class="tr">
				<div class="td"><label>Payment</label></div>
				<div class="td"><input id="Payment"  type="text" name="Payment" placeholder="Input Payment"></div>
			</div>

			<div class="tr">
				<div class="td"><label></label></div>
				<div class="td"><input class="button" id="submit"  type="submit" name="submit" value="Register Now"></div>
			</div>
			
		</form>
	</div>
</body>
</html>
