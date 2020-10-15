<?php
// register a new admin user

session_start();

$error = array();

if(isset($_POST['signup'])) {
	$fullname = mysqli_real_escape_string($db, $_POST['fullname']);
	$position = mysqli_real_escape_string($db, $_POST['position']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password']);
	$password_2 = mysqli_real_escape_string($db, $_POST['confirmpassword']);

	if(empty($fullname)) {
		array_push($error, "fullname cannont be empty");
	}

	if(empty($position)) {
		array_push($error, "select position");
	}

	if(empty($email)) {
		array_push($error, "Enter email");
	}

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		array_push($error, "Enter a valid email");
	}

	if(empty($password_1) || empty($password_2)) {
		array_push($error, "Password cannont be empty");
	}

	if($password_1  != $password_2) {
		array_push($error, "password do not match");
	}
	
	// check if email exist
	$sql = "SELECT * FROM admin WHERE email = '$email' ";
	$querycheck = mysqli_query($db, $sql);

	if($querycheck->num_rows > 1){
		array_push($error, " Sorry, user already exist");
	} else{

		if(count($error) == 0){
			// insert
			$password = md5($password_1);
			$sqladd = "INSERT INTO admin(`fullname`, `position`, `email`,`password`) VALUES('$fullname', '$position','$email', '$password')";
			$queryadd = mysqli_query($db, $sqladd);

			if($queryadd) {
				// set a succcess cookie

				setcookie("msg", "<span class='text-success'>New user added</span>",
				time()+10, "/");
				header("location:signin.php");
			}else{
				echo $sqladd;
			}

		}
	}
}

// 	if(count($error) ==0) {
// 		// insert into database
// 		$sql = "SELECT * FROM admin WHERE email='$email'";
// 		$query = mysqli_query($db, $sql);
// 		if ($query->num_row == 1) {
// 		echo "user Exists";
// 	}else{
// 		$password =md5($password_1);
// 		$sql = "INSERT INTO admin(`fullname`, `position`, `email`,`password`) VALUES('$fullname', '$position','$email', '$password')";

// 		$query = mysqli_query($db, $sql);

// 		if($query) {
// 			// set a succcess cookie

// 			setcookie("msg", "<span class='text-success'>New user added</span>",
// 			time()+10, "/");
// 			header("location:signin.php");
// 		}else{
// 			echo $sql;
// 		}
// 	}
// }
// 	}


		

// Resigration Ends header_remove()


// login begin
if (isset($_POST['signin'])) {
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password =mysqli_real_escape_string($db, $_POST['password']);

	// check if email and password exist in the database decrypt the password
	
	$pass = md5($password);
	$sql = "SELECT * FROM admin WHERE email='$email' AND password='$pass' ";
	$query = mysqli_query($db, $sql);
	$result =mysqli_fetch_assoc($query);

	
	// do this if the user exist

	if ($result >0) {
		$_SESSION['admin_email']= $result['email'];
		$_SESSION['fullname']= $result['fullname'];
		$_SESSION['position']= $reuslt['fullname'];
		header("location: index.php");
		

	}else{
		array_push($error, "incorrect email or password");
	}

}

?>