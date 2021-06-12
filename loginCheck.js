document.getElementById("gumb").onclick = function(event) {

var slanje_forme = true;


//Ime
var poljeIme = document.getElementById("ime");
 var ime = document.getElementById("ime").value;
 if (ime.length == 0)
 {
	 slanjeForme = false;
	 poljeIme.style.border="1px dashed red";
	 document.getElementById("porukaIme").innerHTML="<br>Unesite ime!<br>";
 }
 else
 {
	 poljeIme.style.border="1px solid green";
	 document.getElementById("porukaIme").innerHTML="";
 }

//Prezime
var poljePrezime = document.getElementById("prezime");
 var prezime = document.getElementById("prezime").value;
 if (prezime.length == 0)
 {
	 slanjeForme = false;
	 poljePrezime.style.border="1px dashed red";
 		document.getElementById("porukaPrezime").innerHTML="<br>Unesite Prezime!<br>";
 }
 else
 {
	 poljePrezime.style.border="1px solid green";
	 document.getElementById("porukaPrezime").innerHTML="";
 }

 //username
 var poljeUsername = document.getElementById("user");
 var username = document.getElementById("user").value;
 if (username.length == 0)
 {
	 slanjeForme = false;
	 poljeUsername.style.border="1px dashed red";
	document.getElementById("porukaUsername").innerHTML="<br>Unesite korisničko ime!<br>";
 }
 else
 {
	 poljeUsername.style.border="1px solid green";
	 document.getElementById("porukaUsername").innerHTML="";
 }


// Provjera lozinki
	var poljePassword = document.getElementById("password");
	var password = document.getElementById("password").value;

	var poljePassword1 = document.getElementById("password1");
	var password1 = document.getElementById("password1").value;



if (password != password1 || password.length==0 || password1.length==0) {

		slanje_forme = false;
		poljePassword.style.border = "1px solid red";
		poljePassword1.style.border = "1px solid red";
		document.getElementById("porukaPassword").innerHTML = "Lozinke moraju biti iste";

}
else
{
	poljePassword.style.border = "1px solid green";
	poljePassword1.style.border = "1px solid green";
}





if (slanje_forme != true) {

		event.preventDefault();

}



}
