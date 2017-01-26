var nrZdjecia = 1;


function wczytajZdjecie()
{

	if (nrZdjecia>3)nrZdjecia=1;
	
	

	var tagImg = "<img id='slajd' src='obrazek"+nrZdjecia+".jpg' />";
	document.getElementById("head2").innerHTML = tagImg;	
	nrZdjecia++;
	setTimeout("wczytajZdjecie()", 3000);
}