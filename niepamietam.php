<?php
$conn = new mysqli("localhost","root","","quizy") or die ("Odpowiedź: Błąd połączenia z serwerem ");
$hasz=mysqli_real_escape_string($conn, $_POST["hasz"]);
$npassword=mysqli_real_escape_string($conn, $_POST["nowehaslo"]);

$wynik = mysqli_query($conn,"SELECT * from users WHERE user_sekret like '$hasz'");
$nowehaslo=password_hash($npassword, PASSWORD_DEFAULT);
while($row = mysqli_fetch_array($wynik))
{$cos= $row['user_sekret']; }
if($cos==$hasz)
{
  mysqli_query($conn, "UPDATE users SET user_passwordhash='$nowehaslo' WHERE user_sekret like '$hasz'");
  mysqli_query($conn, "UPDATE users SET user_sekret=0 WHERE user_sekret like '$hasz'");
  echo '<script>window.open("localhost","_self")</script>';
}
else
{
  echo 'erer';
}
 ?>
