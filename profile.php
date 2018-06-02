<?php
	include 'views/header.php';
  include 'views/navbar.php';

//temporary until i get login working correctly
  $_SESSION['Username'] = "Dr.G";
  $_SESSION['UserPassword'] = "";
  $_SESSION['Email'] = "hermy@gmail.com";
  $_SESSION['FirstName'] = "Hermione";
  $_SESSION['Surname'] = "Granger";
  $_SESSION['Gender'] = "Female";
  $_SESSION['Anonymous'] = "Anonymous";
  $_SESSION['City'] = "Port Elizabeth";
  $_SESSION['CellNo'] = "+27 81 652 1478";
  $_SESSION['DateOfBirth'] = "6 April 1995";
  
?>

  <div class="container">
    <div id="content" class="clearfix">
      <div class="userphoto">
        <img src="img/user.png" alt="default avatar" height="150" width="150">
      </div>

      <div class="screenName">
        <?php echo $_SESSION['Username']; ?>
      </div>

      <div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="settings" data-toggle="pill" href="#pills-settings" role="tab">Edit Details</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" id="priavte" data-toggle="pill" href="#pills-private" role="tab">Private</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" id="activity" data-toggle="pill" href="#pills-activity" role="tab">Activity</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" id="friends" data-toggle="pill" href="#pills-friends" role="tab">Friends</a>
          </li>
        </ul>
      </div>

      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-settings" role="tabpanel">
          <h5>Edit your profile information:</h5><br>
    
          <p class="setting"><span>First Name:</span>&nbsp;<?php echo $_SESSION['FirstName']; ?></p><hr class="my-4">    
          <p class="setting"><span>Last Name:</span>&nbsp;<?php echo $_SESSION['Surname']; ?></p> <hr class="my-4">      
          <p class="setting"><span>E-mail Address:</span>&nbsp;<?php echo $_SESSION['Email']; ?></p><hr class="my-4">
          <p class="setting"><span>Gender:</span>&nbsp;<?php echo $_SESSION['Gender']; ?></p><hr class="my-4">   
          <p class="setting"><span>Profile Status:</span>&nbsp;<?php echo $_SESSION['Anonymous']; ?></p><hr class="my-4"> 
          <p class="setting"><span>City:</span>&nbsp;<?php echo $_SESSION['City']; ?></p><hr class="my-4">
          <p class="setting"><span>Cell Phone Number:</span>&nbsp;<?php echo $_SESSION['CellNo']; ?></p><hr class="my-4">
          <p class="setting"><span>Date of birth:</span>&nbsp;<?php echo $_SESSION['DateOfBirth']; ?></p><hr class="my-4">
        </div>

        <div class="tab-pane fade" id="pills-private" role="tabpanel">
          <p>Information can go here</p>
        </div>

        <div class="tab-pane fade" id="pills-activity" role="tabpanel">
          <p>Most recent actions:</p>        
          <p class="activity">Created forum topic at 12:32 </p>
          <p class="activity">Like a story at 15:12 </p>
          <p class="activity">Posted a comment at 19:44 </p>
        </div>

        <div class="tab-pane fade" id="pills-friends" role="tabpanel">
          <p>Friends list:</p>
        
          <ul id="friendslist" class="clearfix">
            <li><a href="#"><img src="img/user.png" width="30" height="30"> Username</a></li>
            <li><a href="#"><img src="img/user.png" width="30" height="30"> SomeGuy123</a></li>
            <li><a href="#"><img src="img/user.png" width="30" height="30"> PurpleGiraffe</a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>


<!--<script type="text/javascript">
$(function(){
  $('#profiletabs ul li a').on('click', function(e){
    e.preventDefault();
    var newcontent = $(this).attr('href');
    
    $('#profiletabs ul li a').removeClass('sel');
    $(this).addClass('sel');
    
    $('#content section').each(function(){
      if(!$(this).hasClass('hidden')) { $(this).addClass('hidden'); }
    });
    
    $(newcontent).removeClass('hidden');
  });
});
</script>-->
</body>
</html>