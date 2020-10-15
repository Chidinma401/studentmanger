<?php
// include connection string
require_once("inc/config.php");

session_start();


if (!isset($_SESSION['admin_email'])) {
	header("location:signin.php");
}
// when add new student form submitted
if (isset($_POST['add'])) {
	$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$gender = mysqli_real_escape_string($db, $_POST['gender']);
	$age = mysqli_real_escape_string($db, $_POST['age']);
	$state = mysqli_real_escape_string($db, $_POST['state']);
	$class = mysqli_real_escape_string($db, $_POST['class']);
	// SECURE THIS PICTURE FROM YOUR SELF
	// $passport ="image";
	$passport = $_FILES['passport']['name'];
	$tmpname = $_FILES['passport']['tmp_name'];
	move_uploaded_file($tmpname, "uploads/$passport");

	// get admin's name
	$added_by = $_SESSION['admin_email'];
	$date = Date("d/m/y");

	// store in database
	$sql = "INSERT INTO student(`firstname`,`lastname`,`email`,`gender`,`age`,`state`,`class`,`passport`,`added_by`,`date_added`) VALUES('$firstname', '$lastname', '$email', '$gender', '$age', '$state', '$class', '$passport', '$added_by', NOW())";

	$query = mysqli_query($db, $sql);
	if ($query) {
		echo "<script>alert('New Student added suuccessfully')</script>";
	}
}


?>


<!DOCTYPE html>
<html>
<head>
	<?php include("inc/head.php");?>
	
	<title><?php basename($_SERVER['PHP_SELF']);?></title>
	
</head>
<body>
	<?php include("inc/nav.php");?>s



	<br><br><br>
 <div class="col-lg-9 ml-auto">
<h3 class="text-muted text-center mb-3">Add Student</h3>
<div class="card">
	

	<div class="card-body">
		<form action="<?php echo $pagename?>" method="post" autocomplet="offset" enctype="multipart/form-data">
			<div class="form-group">
				<label for="firstname">First Name</label>
				<input type="text" class="form-control" name="firstname" required="">
				
			</div>

			<div class="form-group">
				<label for="lastname">Last Name</label>
				<input type="text" class="form-control" name="lastname" required="">
				
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" name="email" required="">
				
			</div>

				<div class="form-group">
				<label for="gender">Gender</label>
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="none" checked="">Rather Not
				
			</div>

			<div class="form-group">
				<label for="age">Age</label>
				<input type="text" class="form-control" name="age" required="">
				
			</div>

			<div class=" form-group">
				<label for="state">State</label>
				<input type="text" class="form-control" name="state" required="">
			</div>
			<div class="form-group">
				<label for="class">Class</label>
				<input type="text" class="form-control" name="class" required="">
				
			</div>

			<div class="form-group">
				<label for="passport">Passport</label>
				<input type="file" class="form-control" name="passport" required="">
			</div>

			<div class="form-group">
				<input type="submit" value="Add New Student" name="add" class="btn btn-success btn-block">
			</div>



			
		</form>
		
	</div>
	
</div>

</div>
</div>

</div>
</div>
</div>
</div>
</section>





	<!-- <javascript -->
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
</body>