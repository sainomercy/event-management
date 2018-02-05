<?php
	$page = 'registration';
	include 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>New Event</h2>
	</div>

	<form class="event-form" action="includes/newevent.inc.php" method="POST" >
		<div class="space">
			<label for="firstname">First name</label>
			<input type="text" name="firstname" placeholder="Firstname" required>
		</div>
		
		<div class="space">
			<label for="lastname">Last name</label>
			<input type="text" name="lastname" placeholder="Lastname" required>
		</div>		

		<div class="space">
			<label for="phonenumber">Phone number</label>
			<input type="number" name="phonenumber" placeholder="Phone number" required>
		</div>
		
		<div class="space">
			<label for="email">E-Mail</label>
			<input type="email" name="email" placeholder="E-Mail" required>
		</div>
		
		<div class="space">
			<label for="address">Address</label>
			<textarea name="address" placeholder="Enter address..." required></textarea>
		</div>

		<div class="space">
			<label for="event">Event type</label>
			<select name="eventtype" required>
				<option>Select event type</option>
			    <option value="wedding">Wedding</option>
			    <option value="anniversary">Anniversary</option>
			    <option value="birthday">Birthday</option>
			    <option value="graduation">Graduation</option>
			    <option value="annualmeeting">Annual Meeting</option>
		    </select>
		</div>
		
		<div class="space">
			<label for="date">Date</label>
			<input type="date" name="eventdate" required>
		</div>
		
		<div class="space">
			<label for="time">Time</label>
			<input type="time" name="eventtime" required>
		</div>

		<div class="space">
			<label for="guests">Expected no. of guests</label>
			<input type="number" name="guests" placeholder="Expected number of guests" required>
		</div>
		
		<div class="space">
			<label for="venue">Venue</label>
			<input type="text" name="venue" placeholder="Venue" required>
		</div>
				
		<div class="space">
			<label for="music">Music</label>
			<select name="music" required>
		    	<option>Select music </option>
				<option value="instrumental">Instrumental</option>
		    	<option value="livemusic">Live Music</option>
		    	<option value="disco">Disco</option>
			</select>
		</div>		
		
		<div class="space">
			<label for="photography">Photography</label>
			<select name="photography" required>
		    	<option>Select photography </option>
		    	<option value="photos">Photos</option>
		    	<option value="photos&videos">Photos &amp; Videos</option>
			</select>
		</div>
		
		<div class="space">
			<label for="catering">Catering</label>
			<select name="catering" required>
		    	<option>Select Catering </option>
				<option value="american">American</option>
		    	<option value="continental">Continental</option>
		    	<option value="asian">Asian</option>
		    	<option value="mexican">Mexican</option>
		    	<option value="custom">Custom made</option>
			</select>
		</div>
		
		<div class="space">
			<label for="extras">Customization</label>
			<textarea name="customization" placeholder="Enter any extras..."></textarea>
		</div>

		<div class="buttons">
			<input class="right" type="reset"></input>
			<button class="right" type="submit" name="submit">Submit Event</button>
		</div>
		
	</form>

</section>


<?php
	include_once 'footer.php';
?>
