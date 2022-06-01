<?php
session_start();
if (isset($_SESSION["current_user"])) {
echo '
<!DOCTYPE html>
<!-- saved from url=(0035)http://localhost/YURI/register.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link href="./register_files/css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <style>
        body {font-family: Arial, Helvetica, sans-serif;width: 100%;}

       

        /* Set a style for all buttons */
        button {
            background-color: darkorange;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            height: 20%;
        }

        button:hover {
            opacity: 0.8;
        }
                .menu
{
 opacity: 1;
 width: 70%;
 height: 10%;
}
button.menu:hover{color:black;}

    </style>






</head><body><div class="v0_3"><div style="color: white;height: 10%;width: 40%;position: absolute;left: 70%;top:8%; font-size: 35px">

 <a style="color:darkorange;position: absolute;top:0;right: -50%;">'.$_SESSION["current_user"].'</a>
<script>
function wypozycz()
{
    window.open("wypozycz.php","_self")
}
function oddaj()
{
    window.open("oddaj.php","_self")
}
function moj_profil()
{
    window.open("ostatnie.php","_self")
}
function wypozycz()
{
    window.open("biblio.php","_self")
}
</script>



</div><div class="v2_2"></div><div class="name"></div><div class="v3_12"></div><div class="v3_13"><div class="v2_4"></div><span class="v2_5">Księg</span><span class="v2_7">arnia</span></div><div class="v3_15"></div><span class="v3_19"><div class="v3_20"></div><span class="v3_21">
<div style="opacity: 1;position: absolute;top:-50%;left:-56%;"><button class="menu" onclick="wypozycz()">inport</button>
<button class="menu" style="position: absolute;top: 15%; left:0%;" onclick="oddaj()">eksport</button>
<button class="menu" style="position: absolute;top: 30%; left:0%;" onclick="moj_profil()">ostatnie wpozyczenia</button>
<button class="menu" style="position: absolute;top: 45%; left:0%;" onclick="wypozycz()">wypozycz</button>
</div>

</span></div><style>* {
    box-sizing: border-box;
    margin:0;
    width: 100%;
    height: 100%;
}
body {
    font-size: 14px;
}
.v0_3 {
    width: 100%;
    height: 100%;
    background: black;
    opacity: 1;
    position: relative;
    top: 0px;
    left: 0px;
    overflow: hidden;
    margin:0;
    padding: 0;
}
.v2_2 {
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,1);
    opacity: 1;
    position: absolute;
    top: 616px;
    left: 210px;
    border: 1px solid rgba(0,0,0,1);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

a.as:hover{color:darkorange }

.name {
    color: #fff;
}
.v3_12 {
    width: 100%;
    height: 760px;
    background-image: url("tło-modified.jpg");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    opacity: 1;
    position: absolute;
    top: 18%;
    left: 43px;
    overflow: hidden;
    opacity: 0.5;
}
.v3_13 {
    width: 537px;
    height: 113px;
    background-color: black;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    opacity: 1;
    position: absolute;
    top: 0px;
    left: 36px;
    overflow: hidden;
}
.v2_4 {
    width: 267px;
    height: 110px;
    background: rgba(255,153,0,1);
    opacity: 1;
    position: absolute;
    top: 0px;
    left: 242px;
    border-top-left-radius: 27px;
    border-top-right-radius: 27px;
    border-bottom-left-radius: 27px;
    border-bottom-right-radius: 27px;
    overflow: hidden;
}
.v2_5 {
    width: 270px;
    color: rgba(255,255,255,1);
    position: relative;
    top: 0px;
    left: 0px;
    font-family: Inter;
    font-weight: Extra Bold Italic;
    font-size: 94px;
    opacity: 1;
    text-align: left;
}
.v2_7 {
    width: 232px;
    color: rgba(0,0,0,1);
    position: absolute;
    top: 0px;
    left: 248px;
    font-family: Inter;
    font-weight: Semi Bold Italic;
    font-size: 96px;
    opacity: 1;
    text-align: left;
}
.v3_15 {
    width: 406px;
    height: 160px;

    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    opacity: 1;
    position: absolute;
    top: 200px;
    left: 76px;
    overflow: hidden;
}
.v3_16 {
    width: 175px;
    height: 99px;
    background: rgba(255,153,0,1);
    opacity: 1;
    position: absolute;
    top: 0px;
    left: 168px;
    border-top-left-radius: 27px;
    border-top-right-radius: 27px;
    border-bottom-left-radius: 27px;
    border-bottom-right-radius: 27px;
    overflow: hidden;
}
.v3_17 {
    width: 253px;
    color: rgba(255,255,255,1);
    position: absolute;
    top: 10px;
    left: 0px;
    font-family: Inter;
    font-weight: Extra Bold Italic;
    font-size: 64px;
    opacity: 1;
    text-align: left;
}
.v3_18 {
    width: 226px;
    color: rgba(0,0,0,1);
    position: absolute;
    top: 10px;
    left: 168px;
    font-family: Inter;
    font-weight: Extra Bold Italic;
    font-size: 64px;
    opacity: 1;
    text-align: left;
}
.v3_19 {
    width: 477px;
    color: rgba(255,255,255,1);
    position: absolute;
    top: 304px;
    left: 76px;
    font-family: Inter;
    font-weight: Extra Bold Italic;
    font-size: 49px;
    opacity: 1;
    text-align: left;
}
.v3_20 {
    width: 100%;
    height: 63%;
    background: rgba(0,0,0,1);
    opacity: 0.6;
    position: absolute;
    top: -20%;
    left: 66%;
    border: 1px solid rgba(255,255,255,1);
    overflow: hidden;

}
.v3_21 {
    width: 572px;
    color: rgba(255,255,255,1);
    position: absolute;
    top: 211px;
    left: 663px;
    font-family: Inter;
    font-weight: Semi Bold Italic;
    font-size: 48px;
    opacity: 1;
    text-align: left;
}
.v3_22 {
    width: 484px;
    color: rgba(182,182,182,1);
    position: absolute;
    top: 277px;
    left: 664px;
    font-family: Inter;
    font-weight: Semi Bold Italic;
    font-size: 32px;
    opacity: 1;
    text-align: left;
}
</style></body></html>


';}
else{
    echo'<script>window.location.replace("register.php");</script>';
}