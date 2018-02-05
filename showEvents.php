<?php
	$page = 'registration';
	include_once 'header.php';
?>
<section class="main-container">
	<div class="main-wrapper">
		<h2>Show Events</h2>
	</div>

	<div class="show-data">
		<table align="center">
			<tr>
				<th>ID</th>
				<th>Firstname</th>
	    		<th>Lastname</th> 
	    		<th>Phone number</th>
	    		<th>E-mail</th>
	    		<th>Address</th>
	    		<th>Event Type</th>
	    		<th>Event Date</th>
	    		<th>Event Time</th>
	    		<th>Guests</th>
	    		<th>Venue</th>
	    		<th>Music</th>
	    		<th>Photography</th>
	    		<th>Catering</th>
	    		<th>Customising</th>
	  		</tr>
	  		<?php
	  			include_once 'includes/dbh.inc.php';
				$sql = "SELECT * FROM registration";
				$result = mysqli_query($conn,$sql);
	  			while($event = mysqli_fetch_assoc($result)) {
	  				echo "<tr>";

	  				echo "<td>{$event['id']}</td>";
	  				echo "<td>{$event['firstname']}</td>";
	  				echo "<td>{$event['lastname']}</td>";
	  				echo "<td>{$event['phonenumber']}</td>";
	  				echo "<td>{$event['email']}</td>";
	  				echo "<td>{$event['address']}</td>";
	  				echo "<td>{$event['eventtype']}</td>";
	  				echo "<td>{$event['eventdate']}</td>";
	  				echo "<td>{$event['eventtime']}</td>";
	  				echo "<td>{$event['guests']}</td>";
	  				echo "<td>{$event['venue']}</td>";
	  				echo "<td>{$event['music']}</td>";
	  				echo "<td>{$event['photography']}</td>";
	  				echo "<td>{$event['catering']}</td>";
	  				echo "<td>{$event['customization']}</td>";

	  				echo "</tr>";

	  			}
	  		?>
		</table>
	</div>

	<div class="back-button">
		<form action="registration.php" class="showEvent"><input type="submit" value="Back to registration page" />
		</form>
		
	</div>
</section>

<?php
	include_once 'footer.php';
?>
