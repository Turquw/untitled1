<?php
session_start();

echo '<html>
<head>
<link rel="stylesheet" href="index.css">
<style>

#botom{font-size:150%;font-family:URW Chancery L, cursive;}
</style>
 <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>


function obwod()
{
var ele = document.getElementsByName("first");
var ele2 = document.getElementsByName("secend");
var ele3 = document.getElementsByName("third");
var ele4 = document.getElementsByName("fourth");
var ele6 = document.getElementsByName("sixth");
var c=0;
var a=0;

            for(i = 0; i < ele.length; i++) {
                if(ele[i].checked){
                c=c+ele[i].value;
				if(c=="01"){
				a=a+1;}}

            }
			for(i = 0; i < ele2.length; i++) {
                if(ele2[i].checked){
               c=c+ele2[i].value;
                  if(c=="011" || c=="001"){
				a=a+1;}   }
            }
			for(i = 0; i < ele3.length; i++) {
                if(ele3[i].checked){
               c=c+ele3[i].value;
                  if(c=="0111" || c=="0011" || c=="0101" || c=="0001"){
				a=a+1;}   }
            }
			for(i = 0; i < ele4.length; i++) {
                if(ele4[i].checked){
               c=c+ele4[i].value;
                  if(c=="00001" || c=="00011" || c=="00101" || c=="00111" || c=="01001" || c=="01011" || c=="01101" || c=="01111"){
				a=a+1;}   }

            }
			for(i = 0; i < ele6.length; i++) {
                if(ele6[i].checked){
               c=c+ele6[i].value;
                  if(c=="000001"|| c=="000011" || c=="00101" || c=="00111" || c=="001001" || c=="001011" || c=="001101" || c=="001111"||c=="010001" || c=="010011" || c=="010101" || c=="010111" || c=="011001" || c=="01011" || c=="001101" || c=="001111"||c=="011111"){
				a=a+1;}   }

            }


			if(a==5){
			document.getElementById("demo").innerHTML =
              "<div style="background:rgba(25,238,65,1);width:100%;height:10%;display:inline-block;float:left;"border="1">Gratulacje zdobyłeś Full punktów</div>";}
			  else{
			  var xd=a*20;
			  var jd=xd+20;
			  document.getElementById("demo").innerHTML =
			    "<div style="background: linear-gradient(90deg, rgba(25,238,65,1) "+xd+"%,rgba(37,42,58,1) "+jd+"%);width:100%;height:10%;display:inline-block;float:left;""border="1">niestety zdobyłeś tylko: "+a+" punktów</div>";}







}

</script>
<script>function otworz()
{
window.open("zalogowany.php","_self")
}</script>
</head>
<body>
<div id="all">
	<div id="top">
	<h1 style="float:left;cursor: pointer;" onclick="otworz()" id="quiz">Strona Główna</h1>

	</div>
	<div id="botom" style="display:inline-block;overflow:auto;"><br>
	<div style="width:40%;height:20%;background-color:#d94da9;margin-left:1%;"></div>
	<input type="radio" name="first"id="sz" value="0"> Fukusja
	<input type="radio"name="first" id="sz1" value="1"> Majerankowy
	<input type="radio" name="first"id="sz2" value="0"> Magenta
	<input type="radio" name="first"id="sz3" value="0"> Amarantowy

	<div id="div3" style="display:none;"><div style="width:40%;height:20%;background-color:#00a693;margin-left:1%;"></div>
	<input type="radio" name="secend"id="z1" value="0"> Zieleń Veronese’a
	<input type="radio" name="secend"id="z2" value="0"> Morski
	<input type="radio" name="secend"id="z3" value="1"> Grynszpan
	<input type="radio" name="secend"id="z4" value="0"> Turkusowy
	<br>
	</div><div id="div4" style="display:none;">
	<div style="width:40%;height:20%;background-color:#19247c;margin-left:1%;"></div>
	<input type="radio" name="third"id="zs1" value="0"> Szafirowy
	<input type="radio" name="third"id="zs2" value="0"> Błekit Turnbulla
	<input type="radio" name="third"id="zs3" value="0"> Ultramaryna
	<input type="radio" name="third"id="zs4" value="1"> Kobaltowy</div>
	<div id="div5" style="display:none;">
	<div style="width:40%;height:20%;background-color:#f5f5dc;margin-left:1%;"></div>
	<input type="radio" name="fourth"id="zz1" value="0"> Piaskowy
	<input type="radio" name="fourth"id="zz2" value="1"> Beige / écru
	<input type="radio" name="fourth"id="zz3" value="0"> Porcelanowy
	<input type="radio" name="fourth"id="zz4" value="0"> Kość słoniowa</div>
	<div id="div6" style="display:none;">
	<div style="width:40%;height:20%;background-color:#841839;margin-left:1%;"></div>
	<input type="radio" name="sixth"id="zx1" value="1"> Karminowy
	<input type="radio" name="sixth"id="zx2" value="0"> Karmazynowy
	<input type="radio" name="sixth"id="zx3" value="0"> Szkarłatny
	<input type="radio" name="sixth"id="zx4" value="0"> Czerwień żelazowa
	<br>
	<p  id="demo" value="Obwod" Onclick="obwod()" style="cursor: pointer;">Szukaj</p></div>

	</div>
</div>
<script>
$( "#sz" ).on( "click", function() {
 $("#div3").fadeIn(3000);
});
$( "#sz1" ).on( "click", function() {
 $("#div3").fadeIn(3000);
});
$( "#sz2" ).on( "click", function() {
 $("#div3").fadeIn(3000);
});
$( "#sz3" ).on( "click", function() {
 $("#div3").fadeIn(3000);
});
$( "#z1" ).on( "click", function() {
 $("#div4").fadeIn(3000);
});
$( "#z2" ).on( "click", function() {
 $("#div4").fadeIn(3000);
});
$( "#z3" ).on( "click", function() {
 $("#div4").fadeIn(3000);
});
$( "#z4" ).on( "click", function() {
 $("#div4").fadeIn(3000);
});
$( "#zs1" ).on( "click", function() {
 $("#div5").fadeIn(3000);
});
$( "#zs2" ).on( "click", function() {
 $("#div5").fadeIn(3000);
});
$( "#zs3" ).on( "click", function() {
 $("#div5").fadeIn(3000);
});
$( "#zs4" ).on( "click", function() {
 $("#div5").fadeIn(3000);
});
$( "#zz1" ).on( "click", function() {
 $("#div6").fadeIn(3000);
});
$( "#zz2" ).on( "click", function() {
 $("#div6").fadeIn(3000);
});
$( "#zz3" ).on( "click", function() {
 $("#div6").fadeIn(3000);
});
$( "#zz4" ).on( "click", function() {
 $("#div6").fadeIn(3000);
});
</script>

</body>
</html>';

 ?>
