<!--include nav bar-->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="HomePageLoggedIn.php"><img class="top-logo" src="img/logo name.png"></a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>

	<!--Navbar options-->
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href=".HomePageLoggedIn.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#" data-toggle="modal" data-target="#HelpModalCenter">Help</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#explore">Explore</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#chat">Chat</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Forum.php">Forum</a>
				</li>
				<li class="nav-item">
					<a class="btn dropdown-toggle" data-toggle="dropdown">Profile<span class="carot"></span></a>
					<ul class="dropdown-menu">
						<li><a class="nav-link" href="profile.php">Profile</a></li>
						<li><a class="nav-link" href="#">Settings</a></li>
						<li><a class="nav-link" href="#" data-toggle="modal" data-target="#LogoutModalCenter">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>

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

		<div class="modal fade" id="LogoutModalCenter" tabindex="-1" role="dialog">
 			<div class="modal-dialog modal-dialog-centered" role="document">
   				<div class="modal-content">
    				<div class="modal-header">
       					<h5 class="modal-title" id="exampleModalLongTitle">Help</h5>
      					<button type="button" class="close" data-dismiss="modal">
          					<span aria-hidden="true">&times;</span>
        				</button>
     				</div>

      				<div class="modal-body">
      					<p>Are you sure you want to logout?
      				</div>
      			
      				<div class="modal-footer">
      					<form action="login.php" method="POST">
      						<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
       						<button type="submit" name="logout" class="btn btn-primary">Logout</button>
       					</form>
     				</div>
    			</div>
  			</div>
		</div>