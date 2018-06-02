<?php
	include 'views/header.php';
	include 'views/navbar.php';
?>

	<!--Welcome Message-->
		<div class="carousel-inner" id="home">
			<div class="carousel-item active">
				<img src="img/pexels-photo-776653.jpeg">
				<div class="carousel-caption">
					<h1 class="display-2">WELCOME</h1>
					<h3>Unplanned Pregnancy</h3>

				<!--Search bar-->
					<form action="includes/search.php" method="POST">
						<div class="input-group mb-3">
							<input type="text" name="search" class="form-control" placeholder="Search">
							<span class="input-group-append">
								<button type="submit" name="submit-search" class="btn btn-primary btn-lg">Search</button>
							</span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!--Jumbotron-->
		<div class="container-fluid">
			<div class="row jumbotron">
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
					<p class="lead">Emergency Button</p>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
					<button type="button" class="btn btn-outline-secondary btn-md" data-toggle="modal" data-target="#buttonModalCenter">Download</button>
				</div>
			</div>
		</div>

	<!--Information Pages-->
	<?php
		include 'views/pages.php';
	?>

	<!--Two Column Section (Text and image)-->
		<div class="container-fluid padding">		
			<div class="row padding">
			<!--Image for Forum-->
				<div class="col-lg-6">
					<a href="Forum.php">
						<img src="img/blur.jpg" class="img-fluid">
					</a>
				</div>

			<!--Text for Forum-->
				<div class="col-lg-6">
					<h2>Forum</h2>
					<p>An online discussion board where people can hold conversations in the form of posted messages.</p>
					<p>To join a forum, you must be logged in.</p>
					<p>Click 'View' to view a forum now.</p>
					<br>
					<a href="Forum.php" class="btn btn-primary btn-lg">View</a>
				</div>
			</div>
			<hr class="my-4">
		</div>

		<!--chat-->
		<div class="container-fluid padding">
			<div class="row padding">
				<div class="col-lg-6" id="chat">
					<h2>Group Chat</h2>
					<p>Chat with other users on the website.You can join an open group chat or start a private chat with your friends.</p>
					<br>
					<a href="#" class="btn btn-primary btn-lg">View</a>
				</div>
				<div class="col-lg-6">
					<a href="#">
						<img src="img/flower.jpeg" class="img-fluid">
					</a>
				</div>
			</div>
			<hr class="my-4">
		</div>

		<!--Guidance booking-->
		<div class="container-fluid padding">		
			<div class="row padding">			
				<div class="col-lg-6">
					<a href="#" data-toggle="modal" data-target="#exampleModalCenter">
						<img src="img/blur.jpg" class="img-fluid">
					</a>
				</div>

				<div class="col-lg-6">
					<h2>Guidance Chat Session</h2>
					<p>This is a private one-on-one chat with a qualified guidance counsellor. Recieve guidance in any area relating to an unplanned pregnancy.</p>
					<p>Book your time slot now.</p>
					<br>
					<!--Button to trigger modal-->
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Book Guidance Session</button>
				</div>
			</div>
			<hr class="my-4">
		</div>

	<!-- Modals -->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog">
 			<div class="modal-dialog modal-dialog-centered" role="document">
   				<div class="modal-content">
    				<div class="modal-header">
       					<h5 class="modal-title" id="exampleModalLongTitle">Book Guidance Session</h5>
      					<button type="button" class="close" data-dismiss="modal">
          					<span aria-hidden="true">&times;</span>
        				</button>
     				</div>
      				<div class="modal-body">
      					Please select the following:<br/><br/>
       			 		<form>
       			 			Date: &nbsp;<input type="text" name="bookDate" id="datepicker"><br/>
       			 			Councellor: &nbsp;<input type="text" name="bookCouns"><br/>
       			 			Urgency: &nbsp;
       			 				<div class="btn-group" role="group">
  									<button type="button" class="btn btn-success">Not Urgent</button>
 									<button type="button" class="btn btn-warning">Help</button>
 									<button type="button" class="btn btn-danger">Urgent</button>
								</div>
       			 		</form>
      				</div>
      			
      				<div class="modal-footer">
       					<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
        				<button type="button" class="btn btn-primary">Book Date</button>
     				</div>
    			</div>
  			</div>
		</div>

		<div class="modal fade" id="buttonModalCenter" tabindex="-1" role="dialog">
 			<div class="modal-dialog modal-dialog-centered" role="document">
   				<div class="modal-content">
    				<div class="modal-header">
       					<h5 class="modal-title" id="exampleModalLongTitle">Emergency Button</h5>
      					<button type="button" class="close" data-dismiss="modal">
          					<span aria-hidden="true">&times;</span>
        				</button>
     				</div>
      				<div class="modal-body">
       			 		<form>
       			 			<p>This is a phone application that allows you to press a button in an emergency situation and alert a counsellor.</p>
       			 			<p>The counsellor accesses your location and contacts your emergency contact or emergency services if you are in a dire situation.</p>
       			 			<p>You and the counsellor can cancel the emergency button.</p>
       			 			<img src="img/alarm.png" class="modalImg">
       			 		</form>
      				</div>
      			
      				<div class="modal-footer">
       					<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
        				<button type="button" class="btn btn-primary">Download</button>
     				</div>
    			</div>
  			</div>
		</div>
	<!--end of modals-->

<?php
	include 'views/footer.php';
?>