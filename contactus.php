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
			<li><a href="Index.html">Home</a></li>
			<li><a href="About_us.html">About Us</a></li>
			<li><a href="MyAccount.html">My Account</a></li>
			<li><a href="Produts.html">Products </a></li>
			<li><a href="Pharmacies.html">Pharmacies</a></li>
			<!-- <li><a href="Sales & Distributions.html">Sales & Distributions</a></li> -->
			<li><a href="Contact Us.html">Contact Us</a></li>
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

<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "r.vithu0205@gmail.com";
    $email_subject = "Your email subject line";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['fname']) ||
        !isset($_POST['lname']) ||
        !isset($_POST['email']) ||
        !isset($_POST['city']) ||
        !isset($_POST['subject'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['fname']; // required
    $last_name = $_POST['lname']; // required
    $email_from = $_POST['email']; // required
    $city = $_POST['city']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($city)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
}

?>