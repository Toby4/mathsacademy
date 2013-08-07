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
            <p>In statistics, stratified sampling is a method of sampling from a population.

When sub-populations vary considerably, it is advantageous to sample each subpopulation (stratum) independently. Stratification is the process of grouping members of the population into relatively homogeneous subgroups before sampling. The strata should be mutually exclusive: every element in the population must be assigned to only one stratum. The strata should also be collectively exhaustive: no population element can be excluded. Then random or systematic sampling is applied within each stratum. This often improves the representativeness of the sample by reducing sampling error. It can produce a weighted mean that has less variability than the arithmetic mean of a simple random sample of the population.</p>
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