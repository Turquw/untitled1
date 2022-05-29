<?php
$conn = new mysqli("localhost","root","","quizy") or die ("Odpowiedź: Błąd połączenia z serwerem ");


$secret = bin2hex(random_bytes(4));
$recovery_email = $_POST["recovery_email"];
$wynik1 = mysqli_query($conn,"SELECT * from users WHERE user_email like '$recovery_email'");
while($row2 = mysqli_fetch_array($wynik1))
{$cos2= $row2['user_email'];
$user_nick=$row2['user_nick'];}
if($cos2==$recovery_email)
{
mysqli_query($conn, "UPDATE users SET user_sekret = '$secret' WHERE user_email = '$recovery_email'");

$msg='
Witaj Przywoływaczu '.$user_nick.'
Najwidoczniej zapomniałeś/aś hasła
nic nie szkodzi ponizej
masz link do resetu hasla
oraz kod który musisz tam wprowadzic
'.$secret.'
<a href="localhost/pamiec.php">http://localhost/odzyskiwanie.php</a>
z fartem wilku
';
require_once('class.phpmailer.php');    //dodanie klasy phpmailer
    require_once('class.smtp.php');    //dodanie klasy smtp
    $mail = new PHPMailer();    //utworzenie nowej klasy phpmailer
$mail->CharSet = "UTF-8";

$imie = $user_nick;
$email = $_POST['recovery_email'];
$tresc = $msg;
$temat = "losowy temat";

date_default_timezone_set('Europe/Warsaw');

$mail = new PHPMailer(true);

 $mail->isSMTP(); // Używamy SMTP
 $mail->Host = 'smtp.gmail.com'; // Adres serwera SMTP
 $mail->SMTPAuth = true; // Autoryzacja (do) SMTP
 $mail->Username = "quiztame@gmail.com"; // Nazwa użytkownika
 $mail->Password = "zaq1@WSX"; // Hasło
 $mail->SMTPSecure = 'ssl'; // Typ szyfrowania (TLS/SSL)
 $mail->Port = 465; // Port

 $mail->CharSet = "UTF-8";
 $mail->setLanguage('pl', '/phpmailer/language');

 $mail->setFrom('quiztame@gmail.com');
 $mail->addAddress($recovery_email);
 $mail->addReplyTo($email, $imie);

 $mail->isHTML(true); // Format: HTML
 $mail->Subject = $temat;
 $mail->Body = $tresc;
 $mail->AltBody = 'By wyświetlić wiadomość należy skorzystać z czytnika obsługującego wiadomości w formie HTML';

 $mail->send();
 // Gdy OK:
echo 'dziala';



}
else {
  echo 'nie dziala';
}
 ?>
