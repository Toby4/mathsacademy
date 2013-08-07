<?php
include ("inc/header2.php");
?>     

<div class = "animated fadeIn">
    <section class = "section" id="box1">
        <h1 class = 'title_h1'>Stratified Sampling</h1>
       <div class="switch switch-three android">
    			<input id="definition-nav" name="view8" type="radio" checked>
				<label for="definition-nav" onclick="">Definition</label>

				<input id="explanation-nav" name="view8" type="radio">	
				<label for="explanation-nav" onclick="">Explantion</label>
					
				<input id="quiz-nav" name="view8" type="radio">	
				<label for="quiz-nav" onclick="">Quiz</label>
					
				<span class="slide-button"></span>
			</div>
        <div id="definition-content">
            <p>fkjslfksjafkhjhkfgsajkgfsajfgsljfgsajkfhsakflhsakjfhdsjkt vyueiwrcryeuwrvlewujafksashjfgcJL.dfsjdfkdsjkdhgjkdsghkjdsfhdsjkhdsjkhdsjkghjkdshgjdshkbwyercubry iusjkfbjdsbgkd.j jlskf sdklf lkdsg jljdfhglis gk,bgdhsjkeghfes ,hvgd 'Strata' means 'layer'. A stratified sample is made up of different 'layers' of the population, for example, selecting samples from different age groups. The sample size for each layer is proportional to the size of the 'layer'. gz rgads.zkf esl aw</p>
        </div>
		<div id="explanation-content">
			<p>Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>

			<p>Donec ullamcorper nulla non metus auctor fringilla. Aenean lacinia bibendum nulla sed consectetur. Maecenas faucibus mollis interdum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
		</div>
		<div id="quiz-content">
		  <?php  include("stratified_quiz.php") ?>
		</div>        
    </section>
</div>

<script>
    $("#definition-nav").on("click", function() {
        $("#definition-content").slideDown();
    	$("#explanation-content").slideUp();
		$("#quiz-content").slideUp();
	});
	$("#explanation-nav").on("click", function() {
		$("#definition-content").slideUp();
		$("#explanation-content").slideDown();
		$("#quiz-content").slideUp();
	});
	$("#quiz-nav").on("click", function() {
		$("#definition-content").slideUp();
		$("#explanation-content").slideUp();
		$("#quiz-content").slideDown();
	});
</script>