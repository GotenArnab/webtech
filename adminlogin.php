<?php include("adminlogincheck.php");
if (isset($_SESSION['email'])) {
	header("location: adminprofile.php");
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin</title>
	<link rel="stylesheet" href="../Css/login_css.css">
</head>

<body>
	<center>
		<h3>Login</h3>
	</center>

	<form action="" method="POST">

		<div class="imgcontainer">
			<img src="../Image/login.png" class="avatar">
		</div>


		<div class="container">

			<b>Email : </b>
			<input type="text" name="email" placeholder="Enter your email" id="email"> <span id="error"> <?php echo $valMsg; ?><br><br></span>

			<b>Password : </b>
			<input type="password" name="password" placeholder="Enter your password" id="password"> <span id="error"> <?php echo $valMsg2; ?><br><br></span>
			<input type="submit" name="submit" value="Submit" id="submit"><br><br>

			<div class="form-group">
				

				<p><a href="reset-password.php">Forget Password</a></p>
			</div>
		</div>

	</form>

	<center id="error"><?php echo $error; ?></center> <br><br>


</body>

</html>