<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>MediCure Pharmaceuticals (pvt) Ltd</title>
	<link rel="stylesheet" type="text/css" href="css/Aa.css">
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
	
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		


<div class="face">

	<div class="faceimage">
		<img src="Images/Img5.jpg" alt="Img5" width="1300px">
	</div>

	

	<div class="facetext">
		<h1><br>MediCure Pharmaceutical Distributors (pvt) ltd</h1>
		<p>The MediCure pharmaceutical 
		(pvt) ltd develops, produces and markets drugs licensed for use as medications island wide. For this we have a well equipped Research and Development department. Our company is making dealsal in generic and brand medications and medical services. We are strictly following a variety of laws and regulations of SriLankan government regarding the patenting, testing, pricing and ensuring safety and efficacy and marketing of drugs.</p>
	</div>
	
</div>
	
</body>
</html>