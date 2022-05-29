<?php
$user_password = $_POST['tekst'];//pobieram z dormulaza cos o name tekst
$conn = new mysqli("localhost","root","","testowa");//połaczenie z nasza baza
$q=mysqli_query($conn,"SELECT * FROM `czytelnik`"); //zapytanie do bazy o selecta
while($row = mysqli_fetch_array($q)) //petla wykonywująca sie dopoki kolejne wiersze odpowiadają zapyaniu
{echo '<br>'.$row['imie']; } //wyswietl komurke z kolumny (np imie) która odpowiada zapytaniu
mysqli_query($conn, "INSERT INTO dlugosc(Dlugosc) VALUES ('$user_password')"); //wpierdol do bazy cos lub inne pojedycze zapytania

///triki
/// w php mozesz dodawac html przez napisanie '' i kropek w miejscu gdzie łącza sie z php np .''. patrz 6 linijka
?>
