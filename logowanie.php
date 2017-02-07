<?php session_start();
if(isset($_SESSION["zalogowany"]))$zalogowany = $_SESSION["zalogowany"];
else $zalogowany = "no";
if (isset($_REQUEST["test"]))$test = $_REQUEST["test"];
else $test = "nie";
if ($test == "tak")$zalogowany = zapytajBaze();
//jeżeli zalogowany

if ($zalogowany == "yes")
{
	dzialaj();
	}	

//nie zalogowany
else if($zalogowany == "no")
{
	formularzLogowania();

}


//złe hasło lub login
else if($zalogowany == "error")
{
	infoError("Nieprawidłowy login lub hasło");
	formularzLogowania();
}





//strona niedostepna
else
{
	infoError("strona niedostępna spróbuj ponownie za chwile" );
}




//----------------------------------------------------------------//
function dzialaj()
{
	echo "Zostałeś poprawnie zalogowany";
}
function infoError($string)
{
	echo($string);
}
function formularzLogowania()
{
	echo <<<END
	<br />
	<form action="index.php?strona=logowanie" method="POST">
	Login: &nbsp; <input type="text" name="login"  value=""/> <br /> <br />
	Hasło: &nbsp; <input type="password" name="password"  value="" /> <br /><br />
	<input type="hidden" name="test" value="tak" />
	<input type="submit" value="Zaloguj" />
	</form>
	
END;
}
function zapytajBaze()
{
	$login = $_REQUEST["login"];
	$haslo= $_REQUEST["password"];
	$host = "localhost"; $user = "root"; $password = ""; $baza = "korporacja";
	$zapytanie = "SELECT name, password FROM users";
	$connection = mysqli_connect($host,$user,$password,$baza);
	if ($connection)
	{
		$wynik = $connection -> query($zapytanie);
		if ($wynik)
		{
			$ile = mysqli_num_rows($wynik);
			if($ile >= 1)
			{
				$log ="error";
				for($i=1;$i<=$ile;$i++)
				{
					$wiersz = mysqli_fetch_assoc($wynik);
					
					$name = $wiersz['name'];
					$passwd = $wiersz["password"];
					if($login == $name && $haslo == $passwd) $log = "yes";
					
				}
			}
		}
	}
	
	return $log;
}



?>









