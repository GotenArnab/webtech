<?php
session_start();

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Profile</title>
	<link rel="stylesheet" href="../Css/admin_css.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>
	<div class="email">
		<h3> Welcome to Admin ! </h3>


		<?php
		echo "Your user is : " . $_SESSION['email']; ?>


		<br><br>

	</div>


	<div class="logout">

		<a href="../Control/adminlogout.php"> logout </a>
	</div>


	</div>

	<div class="container mt-5">

		<div class="row d-flex justify-content-center">

			<div class="col-md-7">

				<div class="card p-3 py-4">

					<div class="text-center">
						<img src="https://i.imgur.com/bDLhJiP.jpg" width="100" class="rounded-circle">
					</div>

					<div class="text-center mt-3">

						<h5 class="mt-2 mb-0"> Adnan Talukdar</h5>
						<span>Admin</span>

						<div class="px-4 mt-1">
							<p class="fonts">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>

						</div>

						<div class="buttons">


							<a href="tutorlist.php " class="btn btn-outline-primary px-4" role="button">Teachers</a>
							<a href="studentlist.php" class="btn btn-outline-primary px-4" role="button"> Students </a>
						</div>



					</div>




				</div>

			</div>

		</div>

	</div>





</body>

</html>