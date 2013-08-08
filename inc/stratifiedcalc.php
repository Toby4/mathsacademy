<script>
function formSubmit()
{
document.getElementById("form_app").submit();
}
</script>

<form name="calc" action="stratifiedcalcprocess.php" method="post" id="form_app">

    <div class="app">

	<span class="g_big">How many groups are there?</span> 
	<select name="func">
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
	</select>


	<br />
</div>

	<input type="submit" name="submit" value="Submit" id="button"/>

</form>