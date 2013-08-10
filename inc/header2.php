<?php include("login/facebook.php"); ?>
<html>
    <head>
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <title>maths academy.</title>
        
        <div id="fb-root"></div>
        <link href="css/animate.min.css" rel="stylesheet" type="text/css" />
        <link href="css/animate-custom.css" rel="stylesheet" type="text/css" />
        <link href="css/base.css" rel="stylesheet" type="text/css" />
        <link href="css/header.css" rel="stylesheet" type="text/css" />
        <link href="css/fonts.css" rel="stylesheet" type="text/css" />
        <link href="css/body.css" rel="stylesheet" type="text/css" />
        <link href="css/footer.css" rel="stylesheet" type="text/css" />
        <link href="css/component.css" rel="stylesheet" type="text/css" />
        <link href="css/course-content.css" rel="stylesheet" type="text/css" />
        <link href="login/loginurl.php" rel="stylesheet" type="text/css" />
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//login.persona.org/include.js"></script>
        <script src="login/persona.js"></script>
        <script src="js/facebook.js" type="text/javascript"></script>
        <script src="js/alex.js"></script>
        <script src="js/animate.js" type="text/javascipt"></script>
        <script src="js/homepage.js"></script>
        
        
        
        <script src="js/modernizr.custom.js"></script>
        

        
    </head>
    <body>
        <nav id="nav1">
        <header>
            <a id="logo" href="http://mathsacademy.montyman100.c9.io/#"><h1>maths academy.</h1></a>
        </header>
            <ul>
             <li><a id="home-nav" href="http://mathsacademy.montyman100.c9.io/index.php#">Home</a></li>
        	 <li><a id="courses-nav" href='http://mathsacademy.montyman100.c9.io/index.php#course-content'>Courses</a></li>
        	</ul>
        <button class="login-button" id="login">Login</button>
        </nav>
    <!-- END OF NAV --->
    
    
    <!-- Start of aside --->
    <aside id="left">
    <h1 class="title_h1">Feed</h1>
        <p><button id="calculator-button" href="#">Calculator</button></p>
	    <div id="calculator">
		    <div class="calculator-arrow-up"></div>
		    <div class="calculator-box-wrap">
			    <div class="calculator-fill-bar"></div>
			    <div class="calculator-inside-box"><iframe src="inc/stratifiedcalcprocess.php" scrolling="no" seamless="seamless" height="450px"></iframe>
			</div>
		</div>
	
<script type="text/javascript">
	$(document).ready(function(){
 
    	$("#calculator").hide();
      	$("#calculator-button").show();

       	$('#calculator-button').click(function(){
	       	$("#calculator").toggle();
});
 
});
</script>

    <!--    <div id="progressbar">
          <div></div>
        </div> -->
    </aside> 
<!-- START OF FACEBOOK LOGIN SCREEN -->

    	<div class="md-modal md-effect-7" id="modal-7">
			<div class="md-content" id="login">
				<h3>Login With Facebook</h3>
				<div>
                
           <?php
            if($user) {
                echo "Logged in! - $user";
            } else {
                echo "<a href='$loginUrl'>Login</a>";
            }
            ?>
                
				<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
<div class="md-overlay"></div>



        <script src="js/cssParser.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/modalEffects.js"></script>