<!DOCTYPE html>
<html lang="pl">
<head>
<title>Projekt 1B</title>
<meta charset="utf-08" />
<link rel="stylesheet" href="styl.css" />
<script src ="plik.js"></script>
</head>
<body>
<section id="kontener">
<header id="naglowek"><h5>STRONA INTERNETOWA</h5>
Przydatne walidatory: <a href="http://html5.validator.nu">http://html5.validator.nu</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://validator.w3.org">http://validator.w3.org</a>
</header>
<nav id="menu">
<a href="index.php?strona=start">Strona główna</a><br /><br />
<a href="index.php?strona=gra">Gry</a>
</nav>
<section id="main">
<?php
if(isset($_REQUEST["strona"]))$strona = $_REQUEST["strona"];
else $strona = "start";
if(file_exists("skrypty/$strona.php"))
{
include("skrypty/$strona.php");
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