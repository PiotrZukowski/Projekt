<!DOCTYPE html>
<html lang="pl">
<head>
<title>STRONA z elementami HTML5</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="styl.css" />
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src ="plik.js"></script>
</head>
<body onload="$(document).ready(function(){wczytajZdjecie()});">
<section id="kontener">
<header id="naglowek"><div id="head1"><h5>Projekt</h5>
Przydatne walidatory: <a href="http://html5.validator.nu">http://html5.validator.nu</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://validator.w3.org">http://validator.w3.org</a>
</div>
<div id="head2"></div>
<div style="clear:both;"> 

</header>
<nav id="menu">
<a href="index.php?strona=start">Strona główna</a><br /><br />
<a href="index.php?strona=gra">Gry</a> <br /><br />
<a href="index.php?strona=losowanie">Losuj cwela</a> <br /><br />
<a href="index.php?strona=sqlphp">pierdyknij zapytanko</a> <br /><br />
<a href="index.php?strona=logowanie">logowanie</a>

</nav>
<section id="main">
<?php
if(isset($_REQUEST["strona"]))$strona = $_REQUEST["strona"];
else $strona = "start";
if(file_exists("$strona.php"))
{
include("$strona.php");
}
else
{
echo "Nieokreślony błąd strona niedostępna";
}

?>
</section>
<aside id="boczny"></aside>
<footer id="stopka"></footer>
</div>
</body>
</html>