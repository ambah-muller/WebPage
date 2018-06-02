<?php
	include 'views/header.php';
?>

<!--Navigation Bar-->
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img class="top-logo" src="img/logo name.png"></a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>

		<!--Navbar options-->
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" data-toggle="modal" data-target="#HelpModalCenter">Help</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#explore">Explore</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Forum.php">Forum</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Login.html">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

<!-- Modal -->
		<div class="modal fade" id="HelpModalCenter" tabindex="-1" role="dialog">
 			<div class="modal-dialog modal-dialog-centered" role="document">
   				<div class="modal-content">
    				<div class="modal-header">
       					<h5 class="modal-title" id="exampleModalLongTitle">Help</h5>
      					<button type="button" class="close" data-dismiss="modal">
          					<span aria-hidden="true">&times;</span>
        				</button>
     				</div>

      				<div class="modal-body">
      					<br/><br/>
       			 		<form>
       			 			
       			 		</form>
      				</div>
      			
      				<div class="modal-footer">
       					<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
     				</div>
    			</div>
  			</div>
		</div>
	<!--end of modal-->

	<div id="slides" class="carousel slide" data-ride="carousel">
	<!--Welcome Message-->
		<div class="carousel-inner" id="home">
			<div class="carousel-item active">
				<img src="img/pexels-photo-776653.jpeg">
				<div class="carousel-caption">
					<h1 class="display-2">WELCOME</h1>
					<h3>Unplanned Pregnancy</h3>
					<button type="button" class="btn btn-outline-light btn-lg">Search</button>
					<a href="Register.html">
						<button type="button" class="btn btn-primary btn-lg">Sign Up</button>
					</a>
				</div>
			</div>
		</div>
	</div>

<!--Jumbotron-->
	<div class="container-fluid">
		<div class="row jumbotron">
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
				<p class="lead">Why should you sign up?</p>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
				<button type="button" class="btn btn-outline-secondary btn-lg" data-toggle="modal" data-target="#SignModalCenter">Learn More</button>
			</div>
		</div>
	</div>

<!-- Modal -->
	<div class="modal fade" id="SignModalCenter" tabindex="-1" role="dialog">
 		<div class="modal-dialog modal-dialog-centered" role="document">
   			<div class="modal-content">
    			<div class="modal-header">
    				<h5 class="modal-title" id="exampleModalLongTitle">Sign Up Now</h5>
    				<button type="button" class="close" data-dismiss="modal">
       					<span aria-hidden="true">&times;</span>
       				</button>
   				</div>

      			<div class="modal-body">
      				<br/><br/>
    		 		<form>
       			 			
   			 		</form>
   				</div>
      			
   				<div class="modal-footer">
   					<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
   					<button type="button" class="btn btn-primary">Sign Up</button>
   				</div>
   			</div>
    	</div>
  	</div>
	

<?php
	include 'views/pages.php';
?>

<!--Welcome Section-->

<!--Two Column Section (Text and image)-->
	<div class="container-fluid padding">

	<!--Text-->
		<div class="row padding">
			<div class="col-lg-6">
				<h2>Forums</h2>
				<p>An online discussion board where people can hold conversations in the form of posted messages.</p>
				<p>To join a forum, you must be logged in.</p>
				<p>Click 'View' to view a forum now.</p>
				<br>
				<a href="Forum.php" class="btn btn-primary">View</a>
			</div>

		<!--Image-->
			<div class="col-lg-6">
				<a href="Forum.php">
					<img src="img/blur.jpg" class="img-fluid">
				</a>
			</div>
		</div>
	</div>

	<hr class="my-4">

<?php
	include 'views/footer.php';
?>
