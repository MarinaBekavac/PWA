document.getElementById("send").onclick = function(event) {

   var slanjeForme = true;

   // Naslov vjesti (5-30 znakova)
   var poljeTitle = document.getElementById("title");
   var title = document.getElementById("title").value;
   if (title.length < 5 || title.length > 30) {
     slanjeForme = false;
     poljeTitle.style.border="1px solid red";
     document.getElementById("porukaTitle").innerHTML="<br/>Naslov vjesti mora imati između 5 i 30 znakova!<br/>";
   } else {
     poljeTitle.style.border="1px solid green";
     document.getElementById("porukaTitle").innerHTML="";
   }

   // Kratki sadržaj (10-100 znakova)
   var poljeAbout = document.getElementById("about");
   var about = document.getElementById("about").value;
   if (about.length < 10 || about.length > 100) {
     slanjeForme = false;
     poljeAbout.style.border="1px solid red";
     document.getElementById("porukaAbout").innerHTML="<br/>Kratki sadržaj mora imati između 10 i 100 znakova!<br/>";
   } else {
     poljeAbout.style.border="1px solid green";
     document.getElementById("porukaAbout").innerHTML="";
   }
   // Sadržaj mora biti unesen
   var poljeContent = document.getElementById("content");
   var content = document.getElementById("content").value;
   if (content.length == 0) {
     slanjeForme = false;
     poljeContent.style.border="1px solid red";
     document.getElementById("porukaContent").innerHTML="<br/>Sadržaj mora biti unesen!<br/>";
   } else {
     poljeContent.style.border="1px solid green";10
     document.getElementById("porukaContent").innerHTML="";
   }

   if (slanjeForme != true) {
   event.preventDefault();
   }

 };
