<?php
	$page = 'home';
	include 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper index">
		<div class="container">
			<h1>Event Manage System</h1>
			<h2>Home</h2>
		</div>		
		
		<div class="image-wrapper">
			<img class="mySlides" src="./images/Wedding.jpg">
		  	<img class="mySlides" src="./images/cake.jpg">
		  	<img class="mySlides" src="./images/deco.jpg">
		  	<img class="mySlides" src="./images/decor.jpg" >
		  	<img class="mySlides" src="./images/decoration.png" >
		  	<img class="mySlides" src="./images/engagement.png">
		  	<img class="mySlides" src="./images/Graduation.jpg">
		  	<img class="mySlides" src="./images/annualmeet.jpg">
		  	<img class="mySlides" src="./images/birthday.jpg" >
		  	<img class="mySlides" src="./images/DJ.jpg">
		</div>

		<script>
		var myIndex = 0;
		carousel();

		function carousel() {
		    var i;
		    var x = document.getElementsByClassName("mySlides");
		    for (i = 0; i < x.length; i++) {
		       x[i].style.display = "none";  
		    }
		    myIndex++;
		    if (myIndex > x.length) {myIndex = 1}    
		    x[myIndex-1].style.display = "block";  
		    setTimeout(carousel, 2000); // Change image every 2 seconds
		}
		</script>
		
	</div>	
</section>

<?php
	include_once 'footer.php';
?>
