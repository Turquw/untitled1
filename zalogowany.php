<?php
session_start();
  echo '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">';
$conn = new mysqli("localhost","root","","ksiegarnia") or die ("Odpowiedź: Błąd połączenia z serwerem ");
@$user_password = mysqli_real_escape_string($conn, $_POST["user_password"]);
@$user_email = mysqli_real_escape_string($conn, $_POST["user_name"]);


$query = mysqli_query($conn, "SELECT * FROM czytelnik WHERE email like '$user_email'");
if(mysqli_num_rows($query) > 0) {
  while($row2 = mysqli_fetch_array($query))
  {$record= $row2['user_passwordhash'];
    if (password_verify($user_password, $record)) {
       $_SESSION["current_user"] = $row2['imie'];
       $_SESSION["id"] = $row2['id_klient'];
        $_SESSION['a']=True;
    }
   }


}
if (isset($_SESSION["current_user"]) and $_SESSION['a']){
   echo '<!DOCTYPE html>
<!-- saved from url=(0035)http://localhost/YURI/register.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link href="./register_files/css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./register_files/styl.css" rel="stylesheet">

    <style>
        body {font-family: Arial, Helvetica, sans-serif;width: 100%;}

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

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

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;


        }


        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
            height: 40%;
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)}
            to {-webkit-transform: scale(1)}
        }

        @keyframes animatezoom {
            from {transform: scale(0)}
            to {transform: scale(1)}
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;

            }
        }
        .menu
{
 opacity: 1;
 width: 70%;
 height: 10%;
}
button.menu:hover{color:black;}
    </style>






</head><body><div class="v0_3"><div style="color: white;height: 10%;width: 40%;position: absolute;left: 70%;top:8%; font-size: 35px;">

<a style="color:darkorange;position: absolute;top:0;right: -50%;">'.$_SESSION["current_user"].'</a>




</div><div class="v2_2"></div><div class="name"></div><div class="v3_12"></div><div class="v3_13"><div class="v2_4"></div><span class="v2_5">Księg</span><span class="v2_7">arnia</span></div><div class="v3_15"></div><span class="v3_19"><div class="v3_20">


</div>
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
    window.open("moj_profil.php","_self")
}
</script>

<span class="v3_21">
<div style="opacity: 1;position: absolute;top:-50%;left:-56%;"><button class="menu" onclick="wypozycz()">wypożycz</button>
<button class="menu" style="position: absolute;top: 15%; left:0%;" onclick="oddaj()">oddaj</button>
<button class="menu" style="position: absolute;top: 30%; left:0%;" onclick="moj_profil()">moj Profil</button>
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
    height: 54%;
    background: rgba(0,0,0,1);
    opacity: 0.6;
    position: absolute;
    top: -20%;
    left: 64%;
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
</style></body></html>';
}
else {
    $query = mysqli_query($conn, "SELECT * FROM pracownicy WHERE email like '$user_email'");
    if (mysqli_num_rows($query) > 0) {
        while ($row2 = mysqli_fetch_array($query)) {
            $record = $row2['user_passwordhash'];
            if (password_verify($user_password, $record)) {
                $_SESSION["current_user"] = $row2['imie'];
                $_SESSION["id"] = $row2['id_Pracownika'];

            }
        }
    }
    if (isset($_SESSION["current_user"])) {
        echo '<script>
    window.location.replace("admin.php");
</script>';
    } else {
        echo $_SESSION["current_user"] . " Nie Dziala";
    }
}
 ?>
