<?php
echo "Wylosuj ucznia do odpowiedzi: <br />";
echo <<<KONIEC
<form>
<select name="klasa" >
	<option>2Ti</option>
	<option>3Ti</option>
</select>

<select name="grupa" >
	<option>Grupa_1</option>
	<option>Grupa_2</option>
</select>
<input type="text" name="numerek" value="" /><br />
<input type="radio" name="typLosowania" value="rand"/>random
<input type="radio" name="typLosowania" value="rand"/>random_mt

</form>
KONIEC;
?>