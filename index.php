<?php
// include connection string
require_once("inc/config.php");

session_start();


if (!isset($_SESSION['admin_email'])) {
	header("location:signin.php");
}

if (isset($_GET['delete'])) {
	$id = $_GET['delete'];

	// delete the user with id
	$del = "DELETE from student where id='$id'";
	mysqli_query($db, $del);
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



<!-- card -->
<section>
<div class="container-fluid">
<div class="row">
<div class="col-lg-9 ml-auto">
<div class="row pt-5 mt-3">
<div class="col-sm-4">
<div class="card card-common bg-warning">
<div class="card-body">
	<div class="d-flex justify-content-between">
		<i class="fas fa-money-bill fa-3x text-success"></i>
		<div class="text-right text-white">
			<h5>Number of student</h5>
			<h3>
				<?php
				$stu_count = "SELECT * FROM student";
				$stu_res = mysqli_query($db, $stu_count);

				echo mysqli_num_rows($stu_res);

				?>
			</h3>
		</div>
	</div>
</div>
<div class="card-footer text-white">
	<i class="fas fa-sync mr-3"></i>
	<span>See more</span>
	
</div>

</div>
</div>
<div class="col-sm-4">
<div class="card card-common bg-danger">
<div class="card-body">
	<div class="d-flex justify-content-between">
		<i class="fas fa-shopping-cart  fa-3x text-warning"></i>
		<div class="text-right text-secondary">
			<h5>Total</h5>
			<h3>$135,000</h3>
		</div>
	</div>
</div>
<div class="card-footer text-secondary">
	<i class="fas fa-sync mr-3"></i>
	<span>See more</span>
	
</div>
</div>
	
</div>

<div class="col-sm-4">
<div class="card card-common bg-warning">
<div class="card-body">
	<div class="d-flex justify-content-between">
		<i class="fas fa-user fa-3x text-info"></i>
		<div class="text-right text-secondary">
			<h5>Number of stuff</h5>
			<h3>5</h3>
		</div>
	</div>
</div>
<div class="card-footer text-secondary">
	<i class="fas fa-sync mr-3"></i>
	<span>See more</span>
	
</div>	
</div>
</div>
</div>
</div>
</div>
<!-- end od card -->
	<br>
 <div class="col-lg-9 ml-auto">
<h3 class="text-muted text-center mb-3">My Earning</h3>
<table class="table text-center table-dark">
	<thead>
		<tr class="text-muted">
			<th>First Name</th>
			<th>last NAme</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Age</th>
			<th>state</th>
			<th>class</th>
			<th>Action</th>
			
		</tr>
	</thead>
	<tbody>


		<?php
				$stu_count = "SELECT * FROM student";
				$stu_res = mysqli_query($db, $stu_count);

				while ($row = mysqli_fetch_assoc($stu_res)) {
					
				

				?>
		<tr>
			<th><?php echo $row['firstname'];?></th>
			<th><?php echo $row['lastname'];?></th>
			<th><?php echo $row['email'];?></th>
			<th><?php echo $row['gender'];?></th>
			<th><?php echo $row['age'];?></th>
			<th><?php echo $row['state'];?></th>
			<th><?php echo $row['class'];?></th>
			<th>
				<a href="view.php?edit=<?php echo $row['id'];?>" class='btn btn-info'>view</a>
				<a href="index.php?delete=<?php echo $row['id'];?>" class='btn btn-danger'>Delete</a>
			</th>
		
		</tr>
		<?php  }?>

		
	</tbody>

</table>
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