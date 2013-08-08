<?php
include ("inc/header2.php");
?>     

<div class = "animated fadeIn">
    <section class = "section" id="box1">
        <h1 class = 'title_h1'>Percentages</h1>
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
            <p>In mathematics, a percentage is a number or ratio as a fraction of 100. It is often denoted using the percent sign, “%”, or the abbreviation “pct.”
For example, 45% (read as “forty-five percent”) is equal to 45/100, or 0.45. A related system which expresses a number as a fraction of 1,000 uses the terms "per mil" and "millage". Percentages are used to express how large/small one quantity is, relative to another quantity. The first quantity usually represents a part of, or a change in, the second quantity, which should be greater than zero. For example, an increase of $ 0.15 on a price of $ 2.50 is an increase by a fraction of 0.15/2.50 = 0.06. Expressed as a percentage, this is therefore a 6% increase. The word 'percent' means 'out of 100' or 'per 100'.</p>
        </div>
		<div id="explanation-content">
			<p>Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>

			<p>Donec ullamcorper nulla non metus auctor fringilla. Aenean lacinia bibendum nulla sed consectetur. Maecenas faucibus mollis interdum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
		</div>
		<div id="quiz-content">
		  <?php  include("percentage_quiz.php") ?>
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

<?php
include ("inc/footer.php");
?> 