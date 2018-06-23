<?php
	
	$page_title = "Blog";
	include("header.php");

?>

<link href="css/fileUpload.css" rel="stylesheet">

<main class="page-main">
	<!-- Breadcrumbs Block -->
	<div class="block breadcrumbs">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li>Blog Post</li>
			</ul>
		</div>
	</div>
	<!-- //Breadcrumbs Block -->
	<div class="block">
		<h2 class="text-center h-lg h-decor">Blog Posts</h2>
		<div class="container">
		<div class="row">
				<div class="col-md-12">
					<h3>Sorry for interruption, this page is in development phase. <span id="countdown"></span></h3>
				</div>
				
			</div>
		
<?php

	//if(!empty($_SESSION['userid'])) {
//		include('tpl/add-new-post.tpl.php');
//	}

?>
			<div class="blog-isotope">
				<input type="hidden" id="pageNumber" name="pageNumber" value="1">
				<div id = "postResultBox"></div>
			</div>
		</div>
	</div>
</main>

<?php

//<script src="js/fileUpload.js"></script>
//<script src="js/blog.js"></script>

?>

<script type="text/javascript">
	// Set the date we're counting down to
var countDownDate = new Date("Jun 30, 2018 23:59:59").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

<?php
	
	include("footer.php");

?>