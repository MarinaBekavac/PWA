document.getElementById("gumb").onclick = function(event) {

var slanje_forme = true;


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


 //password
 var poljeUsername = document.getElementById("password");
 var username = document.getElementById("password").value;
 if (username.length == 0)
 {
   slanjeForme = false;
   poljeUsername.style.border="1px dashed red";
  document.getElementById("porukaPassword").innerHTML="<br>Unesite korisničko ime!<br>";
 }
 else
 {
   poljeUsername.style.border="1px solid green";
   document.getElementById("porukaPassword").innerHTML="";
 }


if (slanje_forme != true) {

		event.preventDefault();

}



}
