var nrZdjecia = 0;
function ukryjZdjecie()
{
	$("#head2").fadeOut(1000);	
}

function wczytajZdjecie()
{
nrZdjecia++;
	if (nrZdjecia>3)nrZdjecia=1;
	
	

	var tagImg = "<a href='#' id='odnosnik'><img id='slajd' src='obrazek"+nrZdjecia+".jpg' /></a>";
	document.getElementById("head2").innerHTML = tagImg;	
	
	$("#head2").fadeIn(1000);
	
	setTimeout("wczytajZdjecie()", 6000);
	setTimeout("ukryjZdjecie()", 5000);
	
	
}