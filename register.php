 <html>
<head><head>


<?php
$c=0;

$conn = new mysqli("localhost","root","","quizy") or die ("Odpowiedź: Błąd połączenia z serwerem ");
$user_nick = mysqli_real_escape_string($conn, $_POST["name"]);
$user_email = mysqli_real_escape_string($conn, $_POST["email"]);
$user_password = mysqli_real_escape_string($conn, $_POST["password"]);
$user_password_hash = password_hash($user_password, PASSWORD_DEFAULT);
mysqli_select_db($conn, "quizy") or die("Trwa konserwacja bazy danych… Odśwież stronę za kilka sekund.");

$cos =null;
$cos2 =null;
  $wynik = mysqli_query($conn,"SELECT user_nick from users WHERE user_nick like '$user_nick'");

while($row = mysqli_fetch_array($wynik))
{$cos= $row['user_nick']; }
$wynik1 = mysqli_query($conn,"SELECT user_email from users WHERE user_email like '$user_email'");

while($row2 = mysqli_fetch_array($wynik1))
{$cos2= $row2['user_email']; }
if($cos2==$user_email)
{

    echo  '<script>

    alert("ten mail jest w użyciu ");

    </script>';
    echo '
    <form method="POST" action="register.php">
       <input type="text" name="name" placeholder="Nick" required value="'.$user_nick.'" >
       <input type="email" name="email"  placeholder="E-mail" required value="'.$user_email.'">
       <input type="password" name="password" placeholder="Hasło" required>
       <input type="submit" name="submit" value="Wyślij">
    </form>
    ';

}
 else if($cos==$user_nick)
{

  echo  '<script>alert("ten psełdonim artystyczny jest zajety");
  </script>';
  echo '
  <form method="POST" action="register.php">
     <input type="text" name="name" placeholder="Nick" required value="'.$user_nick.'" >
     <input type="email" name="email" placeholder="E-mail" required value="'.$user_email.'">
     <input type="password" name="password" placeholder="Hasło" required>
     <input type="submit" name="submit" value="Wyślij">
  </form>
  ';

}
else{
mysqli_query($conn, "INSERT INTO users (user_nick, user_email, user_passwordhash) VALUES ('$user_nick', '$user_email', '$user_password_hash')");

echo  '<script>alert("Rejestracja sie udała");
 window.location.href =index.html;
</script>';
}



 ?>



</html>
