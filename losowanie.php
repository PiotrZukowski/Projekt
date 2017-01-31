<?php
$los = "tak";
if(isset($_REQUEST["los"]))$los = $_REQUEST["los"];
if ($los == "nie"){
echo "Wylosuj ucznia do odpowiedzi: nie  <br />";
echo <<<KONIEC
<form action="index.php?strona=losowanie" method="POST" >
<select name="klasa" >
	<option>2Ti</option>
	<option>3Ti</option>
</select>

<select name="grupa" >
	<option>Grupa_1</option>
	<option>Grupa_2</option>
</select>
<input type="text" name="numerek" value="" placeholder="Szczesliwy numerek" /><br />
<input type="radio" name="typLosowania" value="rand"/>random
<input type="radio" name="typLosowania" value="mt_rand"/>mt_rand <br />
<input type="hidden" name="los" value="tak" />
<input type="submit" value="Losuj"/>
</form>
KONIEC;

}
else if($los=="tak")
	
{
echo "Wylosuj ucznia do odpowiedzi: tak <br />";
echo <<<KONIEC
<form action="index.php?strona=losowanie" method="POST" >
<select name="klasa" >
	<option>2Ti</option>
	<option>3Ti</option>
</select>

<select name="grupa" >
	<option>Grupa_1</option>
	<option>Grupa_2</option>
</select>
<input type="text" name="numerek" value="" placeholder="Szczesliwy numerek" /><br />
<input type="radio" name="typLosowania" value="rand"/>random
<input type="radio" name="typLosowania" value="mt_rand"/>mt_rand <br />
<input type="hidden" name="los" value="tak" />
<input type="submit" value="Losuj"/>
</form>
KONIEC;
$uczen = losujUcznia();
echo($uczen);
}
else {echo "Ta strona jest unwajlable";}	
function losujUcznia() 
{
	return 20;
	
}
?>