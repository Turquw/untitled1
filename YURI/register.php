 <html>
<head><head>


<?php
$c=0;

$conn = new mysqli("localhost","root","","ksiegarnia") or die ("Odpowiedź: Błąd połączenia z serwerem ");
$user_nick = mysqli_real_escape_string($conn, $_POST["user_nick"]);
$user_nick2 = mysqli_real_escape_string($conn, $_POST["user_nick2"]);
$user_email = mysqli_real_escape_string($conn, $_POST["email"]);
$user_password = mysqli_real_escape_string($conn, $_POST["password"]);
$user_password_hash = password_hash($user_password, PASSWORD_DEFAULT);
mysqli_select_db($conn, "ksiegarnia") or die("Trwa konserwacja bazy danych… Odśwież stronę za kilka sekund.");
$cos2 =null;

$wynik1 = mysqli_query($conn,"SELECT email from czytelnik WHERE czytelnik.email like '$user_email'");

while($row2 = mysqli_fetch_array($wynik1))
{$cos2=$row2['email']; }
if($cos2==$user_email)
{

    echo  '<script>

    alert("ten mail jest w użyciu ");

    </script>';
    echo '
    <!DOCTYPE html>
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
    </style>






</head><body><div class="v0_3"><div style="color: white;height: 10%;width: 40%;position: absolute;left: 70%;top:8%; font-size: 35px">



    <a onclick="document.getElementById(&#39;id01&#39;).style.display=&#39;block&#39;" style="width:auto;cursor: pointer;
" class="as">Zaloguj</a>

    <div id="id01" class="modal">

        <form class="modal-content animate" action="zalogowany.php" method="post">


            <div class="container" style="background-color: black;">
                <label for="uname"><b>Email</b></label>
                <input type="text" placeholder="mail" name="user_name" required="" style="height: 30%;">

                <label for="psw"><b>Haslo</b></label>
                <input type="password" placeholder="haslo" name="user_password" required="" style="height: 30%;">

                <button type="submit" style="width: 90%;float: right">Login</button>

            </div>

            <div class="container" style="background-color: black;">
                <button type="button" onclick="document.getElementById(&#39;id01&#39;).style.display=&#39;none&#39;" class="cancelbtn">Anuluj</button>
                <span class="psw" style="color:white;">Zapomniałeś <a href="http://localhost/YURI/niepamietam.php" style="color:darkorange;text-decoration: none;">hasła?</a></span>
            </div>
        </form>
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById('.id01.');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>



</div><div class="v2_2"></div><div class="name"></div><div class="v3_12"></div><div class="v3_13"><div class="v2_4"></div><span class="v2_5">Księg</span><span class="v2_7">arnia</span></div><div class="v3_15"><div class="v3_16"></div><span class="v3_17">Księg</span><span class="v3_18">arnia</span></div><span class="v3_19">Księgarnia MA
DUŻO WIĘCEJ
NIŻ CI SIĘ
WYDAJE!</span><div class="v3_20"></div><span class="v3_21">Zarejestruj się, za darmo</span><span class="v3_22">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i poszerzaj swoje wrażenia
<div style="background-color: black;height: 4%; width: 100%;">
    <form method="post" action="http://localhost/YURI/register.php" style="">
        <input type="text" name="user_nick" placeholder="Imie" id="user_nick" required>
        <input type="text" name="user_nick2" placeholder="Nazwisko" id="user_nick2" required>
        <input type="email" name="email" placeholder="    Mail" id="email" required style="text-align: left">
        <input type="password" name="password" placeholder="Haslo" id="password" required>
        <input type="submit" value="Zarejestruj sie" style="
    width: 40%;background-color: darkorange;color: black; height: 170%;">
    <button style="
position: relative;
    top:0 ;
    left: 0;
    width: 40%;
    height: auto;
    background-color: darkorange;
    color:black;
">Nie Pamietasz hasła?</button>
    </form>


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
    width: 47%;
    height: 63%;
    background: rgba(0,0,0,1);
    opacity: 1;
    position: absolute;
    top: 200px;
    left: 628px;
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
    ';

}

else{
mysqli_query($conn, "INSERT INTO czytelnik (imie, nazwisko, email,user_passwordhash) VALUES ('$user_nick','$user_nick2','$user_email', '$user_password_hash')");

echo  '<script>alert($cos2." ".$user_email);
 window.location.href =register.php;
</script>';
}



 ?>



</html>
