console.log("I am connected");

// Dynamic games played data
var gamesPlayed = [
    {month:"November", games:"4"},
    {month:"October", games:"9"},
    {month:"September", games:"3"},
    {month:"August", games:"15"},
    {month:"July", games:"12"},
    {month:"June", games:"22"},
];
console.log(gamesPlayed);

var table = document.getElementById("siteTable");
table.setAttribute("class", "asideContent");

for (var i=0; i<gamesPlayed.length; i++) {

        var x = document.getElementById("row1");
        var row = document.createElement("TR");
        document.getElementById("siteTable").appendChild(row);
        var s = document.createElement("TD");
        var t = document.createTextNode(gamesPlayed[i].month);
        s.appendChild(t);
        row.setAttribute("id", "myTr1");

        var y = document.getElementById("row2");
        row = document.createElement("TR");
        document.getElementById("siteTable").appendChild(row);
        var p = document.createElement("TD");
        var u = document.createTextNode(gamesPlayed[i].games);
        p.appendChild(u);
        row.setAttribute("id", "myTr2");

        document.getElementById("myTr1").appendChild(s);
        document.getElementById("myTr2").appendChild(p);
        document.getElementById("myTr1").style.alignContent = "center";
        document.getElementById("myTr2").style.alignContent = "center";
};

//Show Games Function
function showGame(str) {
 if (str=="") {
   document.getElementById("txtHint").innerHTML="";
   return;
 }
 if (window.XMLHttpRequest) {
   // code for IE7+, Firefox, Chrome, Opera, Safari
   xmlhttp=new XMLHttpRequest();
 } else { // code for IE6, IE5
   xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 }
 xmlhttp.onreadystatechange=function() {
   if (this.readyState==4 && this.status==200) {
     document.getElementById("txtHint-game").innerHTML=this.responseText;
   }
 }
 xmlhttp.open("GET","getGame.php?q="+str,true);
 xmlhttp.send();
}

// GDPR - Accept Cookies
function myFunction() {
    document.getElementById("cookies").innerHTML = "Cookies were accepted. " + '<a href="http://martalic.dev.fast.sheridanc.on.ca/APP-DEV/individual/index.html">Would you like to revoke?</a>';
};
