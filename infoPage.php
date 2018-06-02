<?php
	include 'header.php';
	include 'navbar.php';
?>

<div class="container-fluid">
	<div class="row padding">
	<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
 		<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab">Home</a>
		<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab">Profile</a>
		<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab">Messages</a>
		<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab">Settings</a>
	</div>

	<div class="tab-content" id="v-pills-tabContent">
  		<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel">This is home tab</div>
		<div class="tab-pane fade" id="v-pills-profile" role="tabpanel">This is profile tab</div>
		<div class="tab-pane fade" id="v-pills-messages" role="tabpanel">This is Messages tab</div>
		<div class="tab-pane fade" id="v-pills-settings" role="tabpanel">This is settings tab</div>
	</div>
</div>
</div>

<?php
	include 'footer.php';
?>