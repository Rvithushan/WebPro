<!DOCTYPE html>
<html>
<head>
	<title>MediCure Pharmaceuticals (pvt) Ltd</title>
	<link rel="stylesheet" type="text/css" href="css/Aa.css">
	<link rel="stylesheet" type="text/css" href="css/contact_us.css">
</head>
<body>

	<div class="header">
		<div class="logo">
			<h1>MediCure Pharmaceutical (pvt) ltd</h1>
		</div>
	</div>
	<nav>
		<ul>
		<li>
			<li><a href="Indexhome.php">Home</a></li>
			<li><a href="About_us.php">About Us</a></li>
			<li><a href="MyAccount.php">My Account</a></li>
			<li><a href="Produts.php">Products </a></li>
			<li><a href="Pharmacies.php">Pharmacies</a></li>
			<li><a href="Contact Us.php">Contact Us</a></li>
		</ul>
	</nav>
	<div class="row">
		<div class="column">
		  <img src="Images/Contact-Us.jpg" style="width:100%">
		</div>
		<div class="column">
				<!-- JavaScript -->
				<script>
						function validateForm() {
						var x = document.forms["myForm"]["fname"].value;
						if (x == "") {
							alert("First name is required");
							return false;}
						var x = document.forms["myForm"]["subject"].value;
						if (x == "") {
							alert("You must provide what do you need to ask from us");
							return false;
						}
						var x = document.forms["myForm"]["email"].value;
						if (x == "") {
							alert("Email address is required");
							return false;
						}
					} 
				</script>
				
		  <form name="myForm" style="font-size: 18px" action="Success.html" onsubmit="return validateForm()" method="post">
			<label for="fname">First Name</label>
			<input type="text" id="fname" name="firstname" placeholder="Your name please">
			<label for="lname">Last Name</label>
			<input type="text" id="lname" name="lastname" placeholder="Your last name please">
			<label for="city">City</label>
			<select id="city" name="city">
					<option value="Batticaloa">Batticaloa</option>
					<option value="Colombo">Colombo</option>
			  	<option value="Jaffna">Jaffna</option>
			    <option value="Kandy">Kandy</option>
					<option value="Trincomalee">Trincomalee</option>
			</select>
			<label for="email">Email</label>
			<input type="text" id="email" name="email" placeholder="Your email address please">
			<label for="subject">What do you need from us?</label>
			<textarea id="subject" name="subject" placeholder="Your inquiry please ..." style="height:170px"></textarea>
			<input type="submit" value="SUBMIT">
		  </form>

		  
		</div>
	
</body>
</html>