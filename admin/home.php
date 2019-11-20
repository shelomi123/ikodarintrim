<?php include ('functions.php'); 
		//check if the user is logged in
		if (!isLoggedIn()) {
			$_SESSION['msg'] = "You must log in first.";
			header('location: ../login.php');
		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>

	<!--navigation bar-->
	<div class="split left">
	<center>
		<h3>iකෝඩර්</h3>
		<strong><?php echo "Hello "; echo$_SESSION['username']; ?></strong>
		<small><i  style="color: #888;">(<?php echo $_SESSION['user_type']; ?>)</i></small> 
		<br>
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="ongoing.php">Ongoing Projects</a></li>
			<li><a href="new.php">New Projects</a></li>
			<li><a href="add.php">Add User</a></li>
			<li><a href="manage.php">Manage Profiles</a></li>
			<li><a href="messages.php">View Messages</a></li>
		</ul>
		</center>
	</div>
	<!--end of navigation bar-->
	
	<!--content-->
	<div class="split right">
		<a href="../index.php?logout='1'" style="color: black; float:right;">Logout</a>
		<h2>Home Page</h2>
	</div>
	<!--end of content-->	
	
</body>
</html>