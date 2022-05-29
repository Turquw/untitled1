<?php
//session_start();
//if($_SESSION["current_user"]!=true){
$conn = new mysqli("localhost","root","","quizy") or die ("Odpowiedź: Błąd połączenia z serwerem ");
echo '<form method="POST" action="send.php">
<select name="kategoria">
';
$wynik = mysqli_query($conn,"SELECT DISTINCT kategoria FROM quizy");

while($row = mysqli_fetch_array($wynik))
{$cos= $row['kategoria'];
echo '<option value="'.$cos.'">'.$cos.'</option>';
}
echo '



</select>
<input type="text" name="pytanie" placeholder="pytanie">
<input type="text" name="dobra_odp" placeholder="dobra odpowiedz">
<input type="text" name="falszywa" placeholder="odpowiedz podpucha">
<input type="text" name="falszywa11" placeholder="odpowiedz podpucha">
<input type="text" name="falszywa12" placeholder="odpowiedz podpucha">

<input type="submit" value="zmien haslo">
</form>
';
//}
//else {
//  echo 'niezla proba smieszku';
//}
 ?>
