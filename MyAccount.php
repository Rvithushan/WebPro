<!DOCTYPE html>
<html>
<head>
	<title>MediCure Pharmaceuticals (pvt) Ltd</title>
	<link rel="stylesheet" type="text/css" href="css/Aa.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

.button {
    position: absolute;
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

</head>
<body>
	<div class="header">
		<div class="logo">
			<h1>MediCure Pharmaceutical (pvt) ltd</h1>
		</div>
	</div>
	<nav>
		<ul>
      <li><a href="Indexhome.php">Home</a></li>
			<li><a href="About_us.php">About Us</a></li>
			<li><a href="MyAccount.php">My Account</a></li>
			<li><a href="Produts.php">Products </a></li>
			<li><a href="Pharmacies.php">Pharmacies</a></li>
			<li><a href="Contact Us.php">Contact Us</a></li>
		</ul>
  </nav>
  
<div class="face">

	<div class="faceimage">
		<img src="Images/myaccount.jpg" alt="Img5" width="1300px">
	</div>


<br>
<br>
<br>

  <div class="facetext">
	  <h2 align="center" style="color: navy">Login to your account</h2>

    <button onclick=" window.open('login.php','_blank')"style="width:auto;margin:auto;display:block;background-color:seagreen">LOGIN</button>

  <br>
  <br>

    <h2 align="center" style="color: navy">Create a new account</h2>
    
    <button onclick=" window.open('register.php','_blank')"style="width:auto;margin:auto;display:block;background-color:seagreen">SIGNUP</button>

  </div>

</body>
</html>