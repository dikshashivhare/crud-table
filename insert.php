<?php

include 'connection.php';
error_reporting(0);

if(isset($_POST['done'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	$q = "INSERT INTO crudtable (username,password) VALUES ('$username','$password')";
	$query = mysqli_query($conn, $q);
}
?>
<!DOCTYPE html>
<html>
	<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
		<title></title>
	</head>
	<body>
		<div class="col-lg-6 m-auto">
			<form method="post">
				<div class="card">
					<div class="card-header bg-dark">
						<h1 class="text-white text-center">Insert Operation</h1>
					</div>
					<div class="card-body">

						<label> Username: </label>
						<input type="text" name="username" class="form-control"><br>

						<label> Password: </label>
						<input type="text" name="password" class="form-control"><br>

						<button class="btn btn-success" type="submit" name="done">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>