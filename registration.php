<?php
	$page = 'registration';
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<?php
			if (isset($_SESSION['u_id'])) {
				echo "<h1> Hello {$_SESSION['u_first']} </h1>";
			}
		?>
		<h1>Wellcome to Registrations</h1>
		<div class="reg-buttons">
			
			<form action="showEvents.php" class="showEvents"><input type="submit" value="Show Registered Events" /></form>
			<form action="newEvent.php" class="newEvent"><input type="submit" value="Register New Events" /></form>
		</div>
	</div>	
</section>


<?php
	include_once 'footer.php';
?>