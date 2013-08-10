<?php

session_start();

if (!isset($_COOKIE['visited']))
{
    setcookie('visited', '1', time() + (3600 * 24 * 30 * 365)); 
}

?>

<html>
    <head>
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <title>maths academy.</title>
        
        <div id="fb-root"></div>
        
        <?php include("inc/css.php"); ?>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src='https://cdn.firebase.com/v0/firebase.js'></script>
        <script src="//login.persona.org/include.js"></script>
        <script src="login/firebase.js"></script>
        <script src="login/persona.js"></script>
        <script src="login/gravatar.js"></script>
        <script src="js/alex.js"></script>
        <script src="js/animate.js" type="text/javascipt"></script>
        <script src="js/homepage.js"></script>
        
        <script src="js/modernizr.custom.js"></script>

        
        </head>
    <body>
        <nav id="nav1">
        <header>
            <a href="index.php" id="logo"><h1>maths academy.</h1></a>
        </header>
            <ul>
             <li><a id="home-nav" href="index2.php">Home</a></li>
        	 <li><a id="courses-nav" href='#'>Courses</a></li>
        	</ul>
        <button class="login-button" id="login">Login</button>
        <button class="md-trigger" data-modal="modal-11">Super Scaled</button>
        </nav>
    <!-- END OF NAV --->
    
    
    <!-- Start of aside --->
    <aside id="left">
    
    <!--Start of profile--->
        <section id="profile">
        
            <section id="img">
                <img id="gravatar" />
            </section>
            
            <section id="userid">
                <h3 id="user"></h3>
            </section>
            
            <section id="results">
            <?php echo $_COOKIE["quiz"]; ?>
            </section>
            
            
        </section>
    <!-- End of profile --->
   <p>You have completed stratified sampling with 1/10. You need to revise more</p>
   <!--<div id="progressbar">
          <div></div>
        </div>  --->
         
    </aside>
<!-- START OF Video SCREEN -->

    	<div class="md-modal md-effect-11" id="modal-11">
			<div class="md-content">
				<h3>Welcome!</h3>
				<div>
                <video id="video" >
                 <source src="../vid/school.mp4" type="video/mp4">
                 <source src="../vid/school.ogv" type="video/ogg">
                 <source src="../vid/movie.webm" type="video/webm">
                You're using a crappy browser, have slow internet or you have javascript disabled
                </video>
				<button onclick="videoStop()" class="md-close">Close me!</button>
				</div>
			</div>
		</div>
<div class="md-overlay"></div>



        <script src="js/cssParser.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/modalEffects.js"></script>
<?php

$cookieValue = $_COOKIE['visited'];

if ($cookieValue == true)
{
  echo "<script> console.log('Cookie found!'); </script>";
}
else
{

  echo "
  <script>
  function firstTime() {
  $('.md-trigger').click();
  var video = document.getElementById('video');
  video.play();
  };
 
  </script>
  ";
  }
 ?>
  
  <script>
  function videoStop() {
    var video1 = document.getElementById('video');
    video1.pause();
  }
  </script>
        <script> firstTime()</script>