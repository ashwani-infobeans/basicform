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
		<form name="userinfo" >
			<div class="tr">
				<div class="td"><label>First Name</label></div>
				<div class="td"><input id="inputfn" type="text" name="fname" placeholder="Input First name"></div>
				<div class="td"><span id="errorfn" class="error"></span></div>
			</div>
			<div class="tr">
				<div class="td"><label>Last Name</label></div>
				<div class="td"><input id="inputln" type="text" name="lname" placeholder="Input Last name"></div>
				<div class="td"><span id="errorln" class="error"></span></div>
			</div>
			<div class="tr">
				<div class="td"><label>E-Mail Id</label></div>
				<div class="td"><input id="inputemail" type="emailid" name="emailid" placeholder="Input Email-Id"></div>
				<div id="erroremail" class="td error"></div>
			</div>
			<div class="tr">
				<div class="td"><label>Address</label></div>
				<div class="td"><input id="inputadd1"  type="text" name="address1" placeholder="Input Address(Line 1)"></div>
				<div id="erroradd1" class="td error"></div>
			</div>
			<div class="tr">
				<div class="td"><label></label></div>
				<div class="td"><input id="inputadd2"  type="text" name="address2" placeholder="Input Address(Line 2)"></div>
				<div id="erroradd2" class="td error"></div>
			</div>
			<div class="tr">
				<div class="td"><label>Phone No.</label></div>
				<div class="td"><input id="inputphone"  type="text" name="phonenumber" placeholder="Input Contact No."></div>
				<div id="errorphone" class="td error"></div>
			</div>
			<div class="tr">
				<div class="td"><label>Zip Code</label></div> 
				<div class="td"><input id="inputzip"  type="text" name="zipcode" placeholder="Input Zip Code"></div>
				<div id="errorzip" class="td error"></div>
			</div>
			<div class="tr">
				<div class="td"><label>Number</label></div>
				<div class="td"><input id="inputno" type="text" name="number" placeholder="Input Number"></div>
				<div id="errorno" class="td error"></div>
			</div>
			<div class="tr">
				<div class="td"><label>Password</label></div>
				<div class="td"><input id="inputpass1" type="password" name="password"  placeholder="Input Password"></div>
				<div id="errorpass1" class="td error"></div>
			</div>
			<div class="tr">
				<div class="td"><label>Confirm Password</label></div>
				<div class="td"><input id="inputpass2" type="password" name="cpassword" placeholder="Re-Enter above Password"></div>
				<div id="errorpass2" class="td error"></div>
			</div>
			<div class="tr">
				<div class="td"><label>URL</label></div>
				<div class="td"><input id="inputurl" type="text" name="url" placeholder="Input the url"></div>
				<div id="errorurl" class="td error"></div>
			</div>
			<div class="tr">
				<div class="td"><button class="button" onclick="location.reload()">Reset</button></div>
				<div class="td"><input type="submit" class="button" onclick="return validate()" value="Register"></div>
				<div id="error" class="td"></div>
			</div>
		</form>
	</div>
</body>
</html>
