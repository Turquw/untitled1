<?php

$conn = new mysqli("localhost","root","","quizy") or die ("Odpowiedź: Błąd połączenia z serwerem ");
$kategoria = mysqli_real_escape_string($conn, $_POST["kategoria"]);
$pytanie = mysqli_real_escape_string($conn, $_POST["pytanie"]);
$dobra_odp = mysqli_real_escape_string($conn, $_POST["dobra_odp"]);
$falszywa = mysqli_real_escape_string($conn, $_POST["falszywa"]);
$falszywa11 = mysqli_real_escape_string($conn, $_POST["falszywa11"]);
$falszywa12 = mysqli_real_escape_string($conn, $_POST["falszywa12"]);
$pytanie=$pytanie."?";
if($pytanie==False or $dobra_odp==False or $falszywa==false or $falszywa11==false or $falszywa11==false)
{
  echo "HA HA nie smieszne";
}
  else{
mysqli_query($conn, "INSERT INTO dodaj_quiz (kategoria, pytanie, dobra_odpowiedz, falszywa_odpowiedz, falszywa_odpowiedz11, falszywa_odpowiedz2) VALUES ('$kategoria', '$pytanie', '$dobra_odp', '$falszywa', '$falszywa11', '$falszywa12')");
}
 ?>
