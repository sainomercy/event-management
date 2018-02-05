<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Event Management System </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
	<nav>
		<div class="main-wrrapper">
			<ul>
				<li class="<?php if($page=='home'){echo 'active';} ?>"><a href="index.php">Home</a></li>
				<li class="<?php if($page=='services'){echo 'active';} ?>"><a href="services.php">Services</a></li>
				<li class="<?php if($page=='about'){echo 'active';} ?>"><a href="about.php">About</a></li>
				<?php
					if (isset($_SESSION['u_id'])) {
						if($page=='registration'){
							echo "<li class='active'><a href='registration.php'>Registration</a></li>";
						}else{
							echo "<li><a href='registration.php'>Registration</a></li>";
						}		

						echo "<li class='header-name' ><h1> Hello {$_SESSION['u_first']} </h1></li>";						
					}
				?>

			</ul>
			<div class="nav-login">

				<?php
					if (isset($_SESSION['u_id'])) {
						echo '<form action="includes/logout.inc.php" method="POST">
							  <button type="submit" name="submit">Logout</button>
							  </form>';
					}else{
						echo '<form action="includes/login.inc.php" method="POST">
							  <input type="text" name="uid" placeholder="Username" required>
							  <input type="password" name="pwd" placeholder="Password" required>
							  <button type="submit" name="submit">Login</button>
							  </form>
							  <a href="signup.php">Sign up</a>';
					}
				?>								
			</div>
		</div>
	</nav>
</header>

