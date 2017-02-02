<?php
srand(time()); // zarodnik, powoduje większa losowość
mt_srand(time());

$los = "tak";
if(isset($_REQUEST["los"]))$los = $_REQUEST["los"];
if ($los == "nie"){
	$numerek = $_REQUEST["numerek"];
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
<input type="text" name="numerek" value="$numerek" placeholder="Szczesliwy numerek" /><br />
<input type="radio" name="typLosowania" checked="checked" value="random"/>random
<input type="radio" name="typLosowania" value="mt_rand"/>mt_rand <br />
<input type="hidden" name="los" value="tak" />
<input type="submit" value="Losuj"/>
</form>
KONIEC;

}
else if($los=="tak")
	
{
	$numerek = $_REQUEST["numerek"];
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
<input type="text" name="numerek" value="$numerek" placeholder="Szczesliwy numerek" /><br />
<input type="radio" name="typLosowania" checked="checked" value="random"/>random
<input type="radio" name="typLosowania" value="mt_rand"/>mt_rand <br />
<input type="hidden" name="los" value="tak" />
<input type="submit" value="Losuj"/>
</form>
KONIEC;

$numerek = $_REQUEST["numerek"];
$typLosowania = $_REQUEST["typLosowania"];
$klasa = $_REQUEST["klasa"];
$grupa = $_REQUEST["grupa"];
//echo ($numerek); echo ($typLosowania); echo ($klasa); echo ($grupa);
$uczen = losujUcznia($klasa,$grupa,$numerek,$typLosowania);
echo($uczen);
}
else {echo "Ta strona jest unwajlable";}	
function losujUcznia($class,$group,$number,$type) 
{
	if($class == "3Ti"  && $group == "Grupa_1")
	{	
		$g1_3ti = Array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
		do
		{
			if($type == "rand") $i = rand(0, count($g1_3ti )- 1);
			else $i = mt_rand(0, count($g1_3ti )- 1);
			$x = $g1_3ti[$i];
		}while($x==$number);
		
	}
	if($class == "3Ti"  && $group == "Grupa_2")
	{	
		$g2_3ti = Array(16,17,18,19,20,21,22,23,24,25,26,27,28,29);
		do
		{
			if($type == "rand") $i = rand(0, count($g2_3ti )- 1);
			else $i = mt_srand(0, count($g2_3ti )- 1);
			$x = $g2_3ti[$i];
		}while($x==$number);
	}
	if($class == "2Ti"  && $group == "Grupa_1")
	{
		$g1_2ti = Array(3,4,6,7,11,15,16,18,19,20,22,24,25,28,29,32,33); 
		do
		{
			if($type == "rand") $i = rand(0, count($g1_2ti )- 1);
			else $i = mt_rand(0, count($g1_2ti )- 1);
			$x = $g1_2ti[$i];
		}while($x==$number);
		
	}
	if($class == "2Ti"  && $group == "Grupa_2")
	{
		$g2_2ti = Array(0,1,5,8,9,10,12,13,14,17,21,23,26,27,30,34,35);
		do
		{
			if($type == "rand") $i = rand(0, count($g2_2ti )- 1);
			else $i = mt_rand(0, count($g2_2ti )- 1);
			$x = $g2_2ti[$i];
		}while($x==$number);
	}
	return $x;
	
}
?>