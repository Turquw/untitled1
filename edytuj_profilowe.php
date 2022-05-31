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

        }
    }


}
$id=$_SESSION["id"];

if (isset($_SESSION["current_user"])){
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
<div style="opacity: 1;position: absolute;
    top: -25%;
    left: 20%;
    width: 200%;
    height: 70%;
    padding: 1%;">
';


    $query22 = mysqli_query($conn, "SELECT * FROM czytelnik WHERE id_klient like '$id'");
    if(mysqli_num_rows($query22) > 0) {
        while($row22 = mysqli_fetch_array($query22))
        {
            $profil= $row22['user_profil'];
        }
    }



    echo '
<img src="/profilowe/'.$profil.'" alt="xd" style="width: 15%;height: 20%;border-color: darkorange;border-size: 2%;border-style: solid;">
    <br> <span style="font-size: 20px;">
    <form action="edytuj_profilowe.php"  action="edytuj_profilowe.php" method="POST" enctype="multipart/form-data" style="display: inline-block; width: 100%;">
    <table style="width: 55%; height:70%;position: absolute;top:10%; padding: 0;border-spacing: 0;">
    ';
    $query124 = mysqli_query($conn, "SELECT * FROM czytelnik
where id_klient ='$id'");
    while($row4444 = mysqli_fetch_array($query124))
    {echo '
<tr><td style="width:10%;" ></td><td style="width: 40%;"></td><td style="width: 10%;"></td><td style="width: 40%;"></td></tr>
<tr><td style="height: 20%;color: darkorange;font-size: 20px; width: 10%;">Imie: </td><td style="width: 4%;"><input type="text" name="imie"  style="height: 10%;background-color:#0005;color: white;width: 98%;" size="4" value="'.$row4444['imie'].'"></td><td style="color: darkorange;font-size: 20px;width: 10%;height: 20%;">email: </td><td><input type="mail" name="email"  style="width: 110%;height: 80%;background-color:#0005;color: white;" size="4" value="'.$row4444['email'].'"></td></tr>';
     echo '<tr><td style="height: 20%;color: darkorange;font-size: 20px; width: 10%;">Nazwisko: </td><td style="width: 30%;"><input type="text" name="nazwisko"  style="height: 10%;background-color:#0005;color: white;width: 100%;" size="2" value="'.$row4444['nazwisko'].'"></td><td style="color: darkorange;font-size: 20px;width: 10%;height: 20%;">haslo: </td><td></a><input type="password" name="haslo" " style="width: 110%;height: 40%;background-color:#0005;color: white;" size="4" value=""></td></tr>';
  echo '<tr><td style="color: darkorange;font-size: 20px;height: 20%;width: 10%">miasto: </td><td style="width: 30%;"><input type="text" name="miasto"  style="width: 100%;height: 10%;background-color:#0005;color: white;" size="4" value="'.$row4444['miasto'].'"></td><td style="color: darkorange;font-size: 20px;width: 10%;height: 20%;">ulica: </td><td></a><input type="text" name="ulica"  style="width: 110%;height: 40%;background-color:#0005;color: white;" size="4" value="'.$row4444['ulica'].'"></td></tr>';
  echo '<tr><td style="color: darkorange;font-size: 20px;width: 10%;height: 20%;">telefon: </td><td style="width: 30%;"><input name="numer_telefonu" type="number" min="000000000" max="999999999" step="1" style="width: 100%;height: 70%;background-color:#0005;color: white;" size="4" value="'.$row4444['numer_telefonu'].'"</td><td style="color: darkorange;font-size: 20px;width: 10%;height: 20%;">kraj: </td><td></a><input type="text" name="kraj"  style="width: 110%;height: 40%;background-color:#0005;color: white;" size="4" value="'.$row4444['kraj'].'"></td></tr>';
    }

    echo '
</table>
</span>
<span  style="width: 30%;height: 75%;position: absolute;top:10%;right: 10%;font-size: 24px;background-color: #0005;padding: 0;">
';
    $opis4=mysqli_query($conn,"SELECT * FROM `czytelnik` WHERE `id_klient`='$id'");
    while($row222 = mysqli_fetch_array($opis4)) {
        echo '<textarea name="tekst" style="width: 120%;height: 100%;position: absolute;right: -20%;display: block; color:white;background-color: #0005;"">'.$row222['user_opis'].'</textarea>';
    }echo '
</span>


         <input  style="height: 5%;width: 57%; position: absolute;bottom: 15%;background-color: darkorange;color: black;" type="submit" value="zapisz zmiany"/>
            <input type="file" class="custom-file-input"  name="image[]" style="position: absolute;top:22%;width: 20%;height: 5%;" >
</form>


';


    if (isset($_FILES['image'])) {
        $errors = array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $extensions = array("jpeg", "jpg", "png", "webp", "pdf");
        foreach ($file_name as $key => $value) {
            $tmp = explode('.', $_FILES['image']['name'][$key]);
            $file_ext = strtolower(end($tmp));
            if (in_array($file_ext, $extensions) === false) {
                $errors[] = "Rozszerzenie niedozwolone.";
            }
            if ($file_size[$key] > 2097152) {
                $errors[] = 'Plik nie może być większy niż 2 MB.';
            }
        }
        if (empty($errors) == true) {
            foreach ($file_name as $key => $value) {
                move_uploaded_file($file_tmp[$key], "profilowe/" . $file_name[$key]);
                $imie=$_SESSION["id"];
                $conn = new mysqli("localhost","root","","ksiegarnia") or die ("Odpowiedź: Błąd połączenia z serwerem ");


                mysqli_query($conn, "UPDATE czytelnik SET user_profil = '$file_name[$key]' WHERE id_klient like '$imie'");
               // echo "Pliki poprawnie wysłane!";
            }
        } else {
            print_r($errors);
        }
    }
    if (isset($_POST['imie'])){
        $imie=$_POST['imie'];
    mysqli_query($conn,"UPDATE `czytelnik` SET `imie`='$imie'");}
    if (isset($_POST['nazwisko'])){
        $imie=$_POST['nazwisko'];
        mysqli_query($conn,"UPDATE `czytelnik` SET `nazwisko`='$imie'");}
    if (isset($_POST['email'])){
        $imie=$_POST['email'];
        mysqli_query($conn,"UPDATE `czytelnik` SET `email`='$imie'");}
    if (isset($_POST['miasto'])){
        $imie=$_POST['miasto'];
        mysqli_query($conn,"UPDATE `czytelnik` SET `miasto`='$imie'");}
    if (isset($_POST['numer_telefonu'])){
        $imie=$_POST['numer_telefonu'];
        mysqli_query($conn,"UPDATE `czytelnik` SET `numer_telefonu`='$imie'");}
    if (isset($_POST['ulica'])){
        $imie=$_POST['ulica'];
        mysqli_query($conn,"UPDATE `czytelnik` SET `ulica`='$imie'");}
    if (isset($_POST['kraj'])){
        $imie=$_POST['kraj'];
        mysqli_query($conn,"UPDATE `czytelnik` SET `kraj`='$imie'");}
    if (isset($_POST['tekst'])){
        $imie=$_POST['tekst'];
        mysqli_query($conn,"UPDATE `czytelnik` SET `user_opis`='$imie'");}






    echo '<script>
function  funkcja()
{
    window.location.replace("moj_profil.php")
}
</script>
<button style="position: absolute;bottom: 0;left:2%; width: 10%;height: 10%;background-color: black;"onClick="funkcja()">cofnij</button>
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
</script>


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
    width: 200%;
    height: 70%;
    background: rgba(0,0,0,1);
    opacity: 0.6;
    position: absolute;
    top: -25%;
    left: 20%;
    border: 1px solid rgba(255,255,255,1);
    overflow: hidden;

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
} else {
    echo $_SESSION["current_user"]." Nie Dziala";}

?>
