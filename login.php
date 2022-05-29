<?php
session_start();
$conn = new mysqli("localhost","root","","quizy") or die ("Odpowiedź: Błąd połączenia z serwerem ");
$user_password = mysqli_real_escape_string($conn, $_POST["password"]);
$user_email = mysqli_real_escape_string($conn, $_POST["email"]);
$query = mysqli_query($conn, "SELECT * FROM users WHERE user_email ='$user_email'");
if(mysqli_num_rows($query) > 0) {
   $record = mysqli_fetch_assoc($query);
   $hash = $record["user_passworhash"];
   if (password_verify($user_password, $hash)) {
      $_SESSION["current_user"] = user_id;
   }
   if (isset($_SESSION["current_user"])){
       /** @var TYPE_NAME $user_nick */
       echo '﻿
   <head>
   <link rel="stylesheet" href="index.css">
   <style>

   </style>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">


   </script>
   <script type="text/javascript">
   function otworz()
   {
   window.open("historia.html","_self")
   }
   function otworz1()
   {
   window.open("ksiazka.html","_self")
   }
   function otworz2()
   {
   window.open("kolor.html","_self")
   }
   </script>

   </head>
   <body>
   <div id="all">
   	<div id="top">
   	<h1 id="quizz" style="font-family:URW Chancery L, cursive;">QUIZY I TYLKO TYLE	</h1>
    <h1>"'.$user_nick.'"</h1>
   	</div>
   	<div id="botom" style="float:left;">
   	<p style="float:left; width:100%;">
   	<image type="Image" id="quiz" style="width:10%;height:20%;" src="historia.png " style="cursor:pointer;" onclick="otworz()"/>
   	<image type="Image" id="quiz" style="width:10%;height:20%;" src="ksiazka.png " style="cursor:pointer;" onclick="otworz1()"/>
   	<image type="Image" id="quiz" style="width:10%;height:20%;" src="Jtk2.png " style="cursor:pointer;" onclick="otworz2()"/>
   	</p>
   	<br><br> <div style="float:left;">
   	<p style="font-size:180%;">  Historia          Książki       Kolory</p></div>
   	</div>
   </div>
   </body>

';
} else {
   /* Użytkownik nie jest zalogowany */
}
}
 ?>
