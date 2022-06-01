 <html>
<head><head>


<?php
$c=0;

$conn = new mysqli("localhost","root","","ksiegarnia") or die ("Odpowiedź: Błąd połączenia z serwerem ");
$user_nick = mysqli_real_escape_string($conn, $_POST["user_nick"]);
$user_nick2 = mysqli_real_escape_string($conn, $_POST["user_nick2"]);
$user_email = mysqli_real_escape_string($conn, $_POST["email"]);
$rok = mysqli_real_escape_string($conn, $_POST["rok"]);
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
       window.location.replace("register.html");
    </script>';


}

else{
mysqli_query($conn, "INSERT INTO czytelnik (imie, nazwisko, email,user_passwordhash,rok_urodzenia) VALUES ('$user_nick','$user_nick2','$user_email', '$user_password_hash','$rok')");

echo  '<script>alert("zarejestrowano pomyslnie");
 window.location.replace("register.html");
</script>';
}



 ?>



</html>
