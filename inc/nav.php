<?php
// log out

if (isset($_GET['logout'])) {
	session_destroy();
	session_unset();

	// send the user to the login page
	header("location:signin.php");
}

$pagename = basename($_SERVER['PHP_SELF']);



?>














<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-light">
	<button class="navbar-toggler ml-auto mb-2 bg-light" id="nav-togge" type="button" data-toggle="collapse" data-target="#myNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapes navbar-collapse" id="myNavbar">
<div class="container-fluid">
<div class="row">
<!-- sidebar -->
<div class="col-lg-3 col-md-4 sidebar fixed-top bg-dark h-100">
<a href="#" class="navbar-brand d-block mx-auto text-center py-3 mb-4 bottom-border"></a>
<div class="bottom-border pb-3">
		<a href="#" class="text-white"><?php echo $_SESSION['fullname'];?></a>
		<br>
		<?php echo $_SESSION['admin_email'];?>
</div>
<ul class="navbar-nav flex-column mt-4">
	<li class="nav-item sidebar-link"><a href="index.php" class="nav-link text-white p-3 mb-2 "><i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard </a></li>
		<li class="nav-item sidebar-link"><a href="view.php" class="nav-link text-white p-3 mb-2 "><i class="fas fa-user text-light fa-user mr-3"></i>All student </a></li>
		<li class="nav-item sidebar-link"><a href="register.php" class="nav-link text-white p-3 mb-2 "><i class="fas fa-user text-light fa-user mr-3"></i>Add student </a></li>
	<li class="nav-item sidebar-link"><a href="#" class="nav-link text-white p-3 mb-2 "><i class="fas fa-money-bill text-light fa-lg mr-3"></i>staff</a></li>
	<li class="nav-item sidebar-link"><a href="#" class="nav-link text-white p-3 mb-2 "><i class="fas fa-sliders-h text-light fa-wrench mr-3"></i>Settings</a></li>
	<li class="nav-item sidebar-link"><a href="index.php?logout='1'" class="nav-link text-white p-3 mb-2 "><i class="fas fa-sliders-h text-light fa-wrench mr-3"></i>Log Out</a></li>

</ul>
</div>
<!-- end of sidebar -->
<!-- topnav -->
<div class="col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
<div class="row align-items-center">
<div class="col-md-4 ">
<h4 class="text-light text-uppercase mb-0">Dashboard</h4>
</div>
<div class="col-md-5">
 <form id="search-form">
    <div class="input-group">
   <input type="text" class="form-control search-input" placeholder="Search">
<button type="button" class="btn btn-white search-button"><i class="fas fa-search text-danger"></i></button>
  </div>
</form>
</div>
<div class="col-md-3">
	<ul class="navbar-nav">
    	<li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><i class="fas fa-comments text-muted fa-lg"></i></a></li>
		<li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-bell text-muted fa-lg"></i></a></li>
		<li class="nav-item ml-md-auto" ><a href="#signout"  data-toggle="modal" class="nav-link" ><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
		</ul>
	</div>
</div>
</div>
<!-- end of top-nav -->

</div>

</div>
</div>
</nav>
<!-- end of navbar -->