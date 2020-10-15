<?php
// include connection string
require_once("inc/config.php");

// include the validation page
require("inc/server.php");
?>

<!DOCTYPE html>
<html>
<head>
	<?php include("inc/head.php");?>
	
	<title><?php basename($_SERVER['PHP_SELF']);?></title>
	
</head>
<body style="background: #495057;">

	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3" id="form-section">
				<?php



				include("inc/error.php");?>
				<form action="#" method="post">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control">
						
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control">
						
					</div>

					<div class="form-group">
						<input type="submit" value="sign In" name="signin" class="btn btn-primary btn-block">
					</div>

					<div class="form-group text-center">
						<span class="text-danger ">
							<a href="signup.php" class="text-danger">Create an Account</a>
							
						</span>
						
					</div>

					
				</form>
				
			</div>
			
		</div>
		
	</div>
<!-- <javascript -->
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
</body>
</html>