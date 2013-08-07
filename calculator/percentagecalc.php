<form name="calc" action="percentagecalcprocess.php" method="post">

    <h3>Calculate percentage</h3>

    <span>what is</span> <input type="text" name="num1" placeholder="percentage" id="num"> <span>% of</span>

	<input type="text" name="num2" placeholder="number" id="num">
    
    <input type="submit" name="submit" value="Calculate" id="button"/>
    
    <br /><br />
    
    <h3>Calculate compound interest</h3>
    
    <span>Base amount</span><input type="text" name="base_amount" class="short" />£ <br />
    
    <span>Annual interest rate</span><input type="text" name="interest" class="short" />% <br />
    
    <span>Calculation period</span><input type="text" name="years" class="short" />(years) <br />

	<br />

	<input type="submit" name="submit" value="Calculate" id="button"/>

</form>