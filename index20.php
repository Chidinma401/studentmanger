<?php
// include connection string
session_start();
require_once("inc/config.php");

// redirect to login page if user did not singin

if (!isset($_SESSION['admin_email'])) {
	header("location:signin.php");
}
?>
<h1>This is Index Page</h1>
<h3>Welcome<?php echo $_SESSION['fullname'];?>.</h3>