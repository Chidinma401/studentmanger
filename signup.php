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
	
	<title>Create An Account</title>
	
</head>
<body style="background: #495057;">

	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3" id="form-section">
				<?php include("inc/error.php");?>
				<form action="#" method="post" id="form">

					<div class="form-group">
						<label for="fullname">FullName</label>
						<input type="text" name="fullname" id="fullname" class="form-control">
						<span id="fullnameError" class="text-danger"></span>
					</div>

					

					<div class="form-group">
						<label for="position">Position</label>
						<select name="position" id="position" class="form-control">
							<option value="">Choose a position</option>
							<option value="staff">Staff</option>
							<option value="nas">Nas</option>
							
						</select>
						<span id="positionError" class="text-danger"></span>
						
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control">
						<span id="emailError" class="text-danger"></span>
						
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="form-control">
						<span id="passwordError" class="text-danger"></span>
						
					</div>

					<div class="form-group">
						<label for="confirmpassword">Confirm Password</label>
						<input type="password" name="confirmpassword" id="confirmpassword" class="form-control">
						<span id="confirmpasswordError" class="text-danger"></span>
						
					</div>

					<div class="form-group">
						<input type="submit" value="sign Up" name="signup" id="signup" class="btn btn-primary btn-block">
					</div>

					<div class="form-group text-center">
						<span class="text-danger ">
							<a href="signin.php" name="signup" id="signup"  id="already">Already Have An Account</a>
							
						</span>
						
					</div>

					
				</form>
				
			</div>
			
		</div>
		
	</div>
<!-- <javascript -->
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
	<script> 
		// when form is submitted

		$("#form").on('submit', function(event){
			if ($("#fullname").val() =="") {
				event.preventDefault();
				$("#fullnameError").text("FullName can not be empty");
			}

				if ($("#position").val() =="") {
				event.preventDefault();
				$("#positionError").text("position can not be empty");
			}

			if ($("#email").val() =="") {
				event.preventDefault();
				$("#emailError").text("email can not be empty");
			}

			if ($("#password").val() =="") {
				event.preventDefault();
				$("#passwordError").text("password is too short");
			}

			if ($("#confirmpassword").val() =="") {
				event.preventDefault();
				$("#confirmpasswordError").text("password don't match");
			}		
				
			
		})



	</script>
</body>
</html>