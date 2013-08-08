<?php
include ("inc/header.php");
?>        
    <div id="homepage-content" class="animated fadeIn">    
        <section class = "section" id="box1">
            <h1 class = 'title_h1'>Welcome</h1>
            <p>Welcome to maths academy. We decided to create this site after we found that children nowadays prefer teaching themselves rather than being spoken at.</p>
            <p>This site uses a combination of: html, css, php, jquery, javascript and ajax.</p>
            <p>Children fill out the quizes and once they submit, the grade gets stored. This is so schools can see who is getting the high grades and who is getting the low ones. This is a form of open data.</p>
            <p>Curabitur blandit tempus porttitor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui.</p>
             
            <div class = "quote">
                <p>'Pure mathematics is, in its way, the poetry of logical ideas.'</p>
                
                <p>Albert Einstein</p>
            </div>
        </section>
    </div>
    
    <div id="course-content">
         <section class = "section" id="box1">
                <h1 class = 'title_h1'>courses</h1>
                <div id="main-link">
                    <a class = "course-link" id ="course-link-1">Algebra</a>
                        <ul id = "1-course-list">
                            <li><a href="#" id ="nested-link">Formulae and equations</a></li>
                            <li><a href="#" id ="nested-link">Inequalities</a></li>
                            <li><a href="#" id ="nested-link">Graphs</a></li>
                            <li><a href="#" id ="nested-link">Quadratic Equations</a></li>
                            <li><a href="#" id ="nested-link">Sequences</a></li>
                        </ul>            
                </div>
                <div id="main-link">
                    <a class = "course-link" id ="course-link-2">Statistics and Probability</a>
                        <ul id = "2-course-list">
                            <li><a href="http://mathsacademy.montyman100.c9.io/stratified-sampling.php" id ="nested-link">Stratified Sampling</a></li>
                            <li><a href="http://mathsacademy.montyman100.c9.io/percentages.php" id ="nested-link">Percentages</a></li>
                            <li><a href="#" id ="nested-link">Representing Data</a></li>
                            <li><a href="#" id ="nested-link">Probability</a></li>
                            <li><a href="#" id ="nested-link">Questionaires</a></li>

                            
                        </ul>            
                </div>
                <div id="main-link">
                    <a class = "course-link" id ="course-link-3">Numbers and Fractions</a>
                        <ul id = "3-course-list">
                            <li><a href="#" id ="nested-link">Formulae and equations</a></li>
                            <li><a href="#" id ="nested-link">Inequalities</a></li>
                            <li><a href="#" id ="nested-link">Graphs</a></li>
                            <li><a href="#" id ="nested-link">Quadratic Equations</a></li>
                            <li><a href="#" id ="nested-link">Sequences</a></li>
                        </ul>            
                </div>
                <div id="main-link">
                    <a class = "course-link" id ="course-link-4">Geometry and measures</a>
                        <ul id = "4-course-list">
                            <li><a href="#" id ="nested-link">Symmetry</a></li>
                            <li><a href="#" id ="nested-link">Polygons</a></li>
                            <li><a href="#" id ="nested-link">Trigonometry</a></li>
                            <li><a href="#" id ="nested-link">Vectors</a></li>
                            <li><a href="#" id ="nested-link">3D shapes</a></li>
                        </ul>            
                </div>                  
        </section>
    </div>
     
<script>
$("#home-nav").on("click", function() {
        $("#homepage-content").show().removeClass().addClass("animated fadeInUpBig");
    	$("#course-content").removeClass().addClass("animated fadeOut");
        console.log('Clicked');
});

$("#courses-nav").on("click", function() {
        $("#course-content").show().removeClass().addClass("animated fadeInUpBig");
        $("#homepage-content").removeClass().addClass("animated fadeOut");
        console.log('Clicked');
});
</script>

<script type="text/javascript">
    $(document).ready(function(){
 
    	$("#1-course-list").hide();
      	$("#course-link-1").show();

       	$('#course-link-1').click(function(){
	       	$("#1-course-list").slideToggle();
});
 
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
 
        $("#2-course-list").hide();
      	$("#course-link-2").show();

       	$('#course-link-2').click(function(){
	       	$("#2-course-list").slideToggle();
});
 
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
 
        $("#3-course-list").hide();
      	$("#course-link-3").show();

       	$('#course-link-3').click(function(){
	       	$("#3-course-list").slideToggle();
});
 
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
 
        $("#4-course-list").hide();
      	$("#course-link-4").show();

       	$('#course-link-4').click(function(){
	       	$("#4-course-list").slideToggle();
});
 
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
 
        $("#5-course-list").hide();
      	$("#course-link-5").show();

       	$('#course-link-5').click(function(){
	       	$("#5-course-list").slideToggle();
});
 
});
</script>
     
<?php
include ("inc/footer.php");
?> 
