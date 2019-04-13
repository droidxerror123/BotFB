
<!DOCTYPE html>
<html>
  <head>
	<title>B N G S D !!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href='http://fonts.googleapis.com/css?family=Pirata+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Chicle|Yatra+One" rel="stylesheet" type="text/css" >
<style type="text/css">
html,body{height: 100%;font-family:Pirata One;} .bg-utama{ background-image: url(https://i.gifer.com/ItiR.gif);
background-size: cover;
background-position: center;
text-align: center;
height: 100%;
width: 100%;
display: table; vertical-align: middle;
}


p
{
animation-duration : 1000ms;
animation-name : blink;
animation-iteration-count : infinite;
}

@keyframes blink
{
from
{
opacity : 1;
}
to
{
opacity : 0;
}
}
p{color: red;font-size: 80px}
.konten-ditengah {
display: table-cell;
vertical-align: middle; }
h1{color: cyan;font-size: 70px}
.konten-ditengah {
display: table-cell;
vertical-align: middle; }
h2{color: white;font-size: 50px}
.konten-ditengah {
display: table-cell;
vertical-align: middle; }
h3{color: white;font-size: 50px}
.konten-ditengah {
display: table-cell;
vertical-align: middle; }
h4{color: white;font-size: 50px}
.konten-ditengah {
display: table-cell;
vertical-align: middle; }
h5{color: white;font-size: 50px}
.konten-ditengah {
    display: table-cell;
    vertical-align: middle;}
h6{color: white;font-size: 50px}
.konten-ditengah {
display: table-cell;
vertical-align: middle;}

</style>

  </head>
  <body>

	<div class="bg-utama">
	  <div class="konten-ditengah">
<h1><font face="Cooper Black" style="font-family:Pirata One"><center><SCRIPT>



farbbibliothek = new Array();



farbbibliothek[0] = new Array("#FF0000","#FF1100","#FF2200","#FF3300","#FF4400","#FF5500","#FF6600","#FF7700","#FF8800","#FF9900","#FFaa00","#FFbb00","#FFcc00","#FFdd00","#FFee00","#FFff00","#FFee00","#FFdd00","#FFcc00","#FFbb00","#FFaa00","#FF9900","#FF8800","#FF7700","#FF6600","#FF5500","#FF4400","#FF3300","#FF2200","#FF1100");



farbbibliothek[1] = new Array("#FF0000","#FFFFFF","#FFFFFF","#FF0000");



farbbibliothek[2] = new Array("#FFFFFF","#FF0000","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF");



farbbibliothek[3] = new Array("#FF0000","#FF4000","#FF8000","#FFC000","#FFFF00","#C0FF00","#80FF00","#40FF00","#00FF00","#00FF40","#00FF80","#00FFC0","#00FFFF","#00C0FF","#0080FF","#0040FF","#0000FF","#4000FF","#8000FF","#C000FF","#FF00FF","#FF00C0","#FF0080","#FF0040");



farbbibliothek[4] = new Array("#FF0000","#EE0000","#DD0000","#CC0000","#BB0000","#AA0000","#990000","#880000","#770000","#660000","#550000","#440000","#330000","#220000","#110000","#000000","#110000","#220000","#330000","#440000","#550000","#660000","#770000","#880000","#990000","#AA0000","#BB0000","#CC0000","#DD0000","#EE0000");


farbbibliothek[5] = new Array("#FF0000","#FF0000","#FF0000","#FFFFFF","#FFFFFF","#FFFFFF");


farbbibliothek[6] = new Array("#FF0000","#FDF5E6");



farben = farbbibliothek[4];



function farbschrift()



{



for(var i=0 ; i<Buchstabe.length; i++)



{



document.all["a"+i].style.color=farben[i];



}



farbverlauf();



}



function string2array(text)



{



Buchstabe = new Array();



while(farben.length<text.length)



{



farben = farben.concat(farben);



}



k=0;



while(k<=text.length)



{



Buchstabe[k] = text.charAt(k);



k++;



}



}



function divserzeugen()



{



for(var i=0 ; i<Buchstabe.length; i++)



{



document.write("<span id='a"+i+"' class='a"+i+"'>"+Buchstabe[i] + "</span>");



}



farbschrift();



}



var a=1;



function farbverlauf()



{



for(var i=0 ; i<farben.length; i++)



{



farben[i-1]=farben[i];



}



farben[farben.length-1]=farben[-1];







setTimeout("farbschrift()",30);



}



//



var farbsatz=1;



function farbtauscher()



{



farben = farbbibliothek[farbsatz];



while(farben.length<text.length)



{



farben = farben.concat(farben);



}



farbsatz=Math.floor(Math.random()*(farbbibliothek.length-0.0001));



}



setInterval("farbtauscher()",5000);



text ="InTech_Secure";//h



string2array(text);



divserzeugen();



//document.write(text);




</SCRIPT></center></font></h1>
<style>
#roll-bg {
margin:1em auto;
-webkit-perspective:1200px;
-moz-perspective:1200px;
-ms-perspective:1200px;
perspective:1200px;
}
#roll-bg p {
font-size:30px;
text-align:center;
color:#444;
padding:10px 0;
}
#roll-spin
{ -webkit-animation-name:roll-spin; -webkit-animation-timing-function:linear; -webkit-animation-iteration-count:infinite; -webkit-animation-duration:6s; animation-name:roll-spin; animation-timing-function:linear; animation-iteration-count:infinite; animation-duration:6s; -webkit-transform-style:preserve-3d; -moz-transform-style:preserve-3d; -ms-transform-style:preserve-3d; transform-style:preserve-3d; } #roll-spin:hover { -webkit-animation-play-state:paused; animation-play-state:paused; } @-webkit-keyframes roll-spin { from {-webkit-transform:rotateY(0deg);} to {-webkit-transform:rotateY(-360deg);} } @keyframes roll-spin { from {-moz-transform:rotateY(0deg); -ms-transform:rotateY(0deg); transform:rotateY(0deg);} to {-moz-transform:rotateY(-360deg); -ms-transform:rotateY(-360deg); transform:rotateY(-360deg);} }
</style>

		<div id="roll-bg">
		  <p id="roll-spin">
			<img style="width:480px;" src="http://intech-secure.rf.gd/droid.png"></p></div>
		<p style="text-align:center;color:yellow;font-family:Chicle;font-size:80px; text-shadow:0px 0px 5px red;">~{ Pecandu PHP }~</p>
		<br>
		<br>
		<h2 style='font-family:Electrolize;'>###<br><br>Merendah lah sampai tidak ada yang bisa Merendahkanmu :)<br>
		  Mengalah lah sampai tidak ada yang bisa Mengalahkanmu (:<br><br>###</h2>
		<br>
		<h4 style="color:red;font-family:Pirata One">#My Code Xploits Your Security</h4>
		<h5 style='color:yellow;font-family:Pirata One;'>#Have Fun With Your Code</h5>
		<br><br><marquee behavior=alternate>
<style type="text/css" typecss="[{http://sahabatblogger77.blogspot.com}]">#highlight{font:bold 40px Impact,Arial,Sans-Serif;}
</style>
<script language="javascript" type="text/javascript">
      teks="Touched by STR_Droid'x & STR_Shine'x"
      speed=10

if (document.all||document.getElementById) {
     document.write('<span id="highlight">' + teks + '</span>')
     var storetext=document.getElementById? document.getElementById("highlight") :
document.all.highlight
} else document.write(text)
var hex=new Array("00","14","28","3C","50","64","78","8C","A0","B4","C8","DC","F0")

var r=1
var g=1
var b=1
var seq=1

function changetext() {
     rainbow="#"+hex[r]+hex[g]+hex[b]
     storetext.style.color=rainbow
}

function change() {
if (seq==6) {
b--
if (b==0)
seq=1
}
if (seq==5) {
r++
if (r==12)
seq=6
}
if (seq==4) {
g--
if (g==0)
seq=5
}
if (seq==3) {
b++
if (b==12)
seq=4
}
if (seq==2) {
r--
if (r==0)
seq=3
}
if (seq==1) {
g++
if (g==12)
seq=2
}
changetext()
}

function starteffect() {
     if (document.all||document.getElementById)
     flash=setInterval("change()",speed)
}

starteffect()
</script> <span id="highlight" style="color:red;"></span> </marquee>

	  </div>
	</div>
  </body>
</html>


