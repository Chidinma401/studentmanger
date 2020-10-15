<?php
// include connection string
require_once("inc/config.php");

session_start();


if (!isset($_SESSION['admin_email'])) {
	header("location:signin.php");
}



?>


<!DOCTYPE html>
<html>
<head>
	<?php include("inc/head.php");?>
	
	<title><?php basename($_SERVER['PHP_SELF']);?></title>
	
</head>
<body>
	<?php include("inc/nav.php");?>



	<br><br><br>
 <div class="col-lg-12 ml-auto">
<h3 class="text-muted text-center mb-3">View All Student</h3>

<?php 
if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$select ="SELECT * FROM student WHERE id='$id'";
	$query = mysqli_query($db, $select);
	$row = mysqli_num_rows($query);
	while ($row =mysqli_fetch_assoc($query)) {
	

?>
<div class="col-lg-3 col-lg-offset-3 ml-auto">
	<?php echo "<img src='uploads/$row[password]' class='img-fluid'>";
	?>
</div>
<div class="col-lg-7 ml-auto">
	<h2><?php echo $row['firstname'];?></h2>
	<h2><?php echo $row['lastname'];?></h2>
	<h2><?php echo $row['email'];?></h2>
	<h2><?php echo $row['gender'];?></h2>
	<h2><?php echo $row['age'];?></h2>
	<h2><?php echo $row['state'];?></h2>
	<h2><?php echo $row['class'];?></h2>
</div>
<div class="col-lg-9 ml-auto">
	<form action="" method="post">
		<div class="form-group">
			<label for="firstname">First Name</label>
			<input type="text" class="form-control" name="firstname" value="<?php echo $row['firstname'];?>">
		</div>

		<div class="form-group">
			<label for="lastname">Last Name</label>
			<input type="text" class="form-control" value="<?php echo $row['lastname']; ?>" name="lastname" >
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" value="<?php echo $row['email']; ?>" name="email" >
		</div>

		<div class="form-group">
			<label for="gender">Gender</label>
				<label for="gender">Gender</label>
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="none" checked="">Rather Not
		</div>

		<div class="form-group">
			<input type="submit" value="Edit Student" name="edit" class="btn btn-success btn-block" >
		</div>
	</form>
	<?php
	?>	
</div>

<?php
if (isset($_POST['edit'])) {
	$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$gender = mysqli_real_escape_string($db, $_POST['gender']);
	$update = "UPDATE student SET firstname='$firstname', lastname = '$lastname', email = '$email', gender = '$gender', WHERE id='$id'";
	$query = mysqli_query($db, $update);

	if ($query) {
	 	echo "<script>alert('updated')</script>";
	 }  
}
}
}

?>

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
</html>