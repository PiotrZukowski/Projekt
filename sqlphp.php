<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8" />
</head>
<body>
<?php
$host = "localhost";
$user = "root";
$password = "";
$baza = "korporacja";
$tabela = "users";
$zapytanie = "CREATE TABLE $tabela (id INT NOT NULL PRIMARY KEY auto_increment, name TINYTEXT, password TINYTEXT)";

$connection  = mysqli_connect($host, $user, $password, $baza);
if ($connection)
{
	$wynik = $connection -> query($zapytanie);
	mysqli_close($connection);
	if($wynik)echo "Tabela: <b>".$tabela."</b> zostala poprawnie dodana do bazy <b>".$baza."</b>";
	else echo "Tabela: <b>".$tabela."</b> nie zostala poprawnie dodana do bazy <b>".$baza."</b>";
	
}
else echo "brak połączenia bazom < br />";


$zapytanie="INSERT INTO $tabela (id, name, password) VALUES (1, 'Andrzej','alpha'), (2,
'Beata','beta'), (3,'Cezary', 'Charlie')"; 
$connection  = mysqli_connect($host, $user, $password, $baza);
if ($connection)
{
	$wynik = $connection -> query($zapytanie);
	mysqli_close($connection);
	if($wynik)echo "Tabela: <b>".$tabela."</b> rekordy zostały poprawnie dodane <b>".$baza."</b>";
	else echo "Tabela: <b>".$tabela."</b> reokrdy <b>nie</b> zostały poprawnie dodane <b>".$baza."</b>";
	
}
else echo "brak połączenia bazom";
?>
</body>
</html>
