<?php
session_start();
  echo '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">';
$conn = new mysqli("localhost","root","","quizy") or die ("Odpowiedź: Błąd połączenia z serwerem ");
@$user_password = mysqli_real_escape_string($conn, $_POST["password"]);
@$user_email = mysqli_real_escape_string($conn, $_POST["email"]);

$query = mysqli_query($conn, "SELECT * FROM users WHERE user_email like '$user_email'");
if(mysqli_num_rows($query) > 0) {
  while($row2 = mysqli_fetch_array($query))
  {$record= $row2['user_passwordhash'];
    if (password_verify($user_password, $record)) {
       $_SESSION["current_user"] = $row2['user_nick'];
    }
   }


}
if (isset($_SESSION["current_user"])){
   echo '

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
   window.open("kolor.php","_self")
   }
   function off()
   {
     window.open("kill_all.php","_self")
   }
   </script>

   </head>
   <body>
   <div id="all">
   	<div id="top">
   	<h1 id="quizz" style="font-family:URW Chancery L, cursive;">QUIZY I TYLKO TYLE	</h1>
    <h2>'.$_SESSION["current_user"].'</h2>
    <button type="button" onClick="off()"> WYLOGUJ SIE </button>
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
   echo '
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
   window.open("kolor.php","_self")
   }
   </script>

   </head>
   <body>
   <div id="all">
   	<div id="top">
   	<h1 id="quizz" style="font-family:URW Chancery L, cursive;">QUIZY I TYLKO TYLE	</h1>
   	<form method="POST" action="zalogowany.php">
      <input type="email" name="email" placeholder="E-mail" required style="color:#252a3a; value="'.$user_email.'"">
      <input type="password" name="password" placeholder="Hasło" required style="color:#252a3a;" >
      <input type="submit" name="submit" value="Wyślij">
   </form>
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
}

 ?>
