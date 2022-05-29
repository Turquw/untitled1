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
}

?>
