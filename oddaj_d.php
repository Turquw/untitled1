<?php
session_start();
$conn = new mysqli("localhost","root","","ksiegarnia") or die ("Odpowiedź: Błąd połączenia z serwerem ");
$data=date('Y-m-d');
// Check if any option is selected
if(isset($_POST["nazwa"]))
{
    $klient=$_SESSION["id"];
    // Retrieving each selected option
    foreach ($_POST['nazwa'] as $subject){

        $query = mysqli_query($conn, "SELECT * FROM ksiazka LEFT JOIN wypozyczone_i_w_trakcie on ksiazka.id_ksiazki=wypozyczone_i_w_trakcie.id_ksiazki
  where tytul like '$subject' and wypozyczone_i_w_trakcie.stan=1");
        $row1 = mysqli_fetch_array($query);

        $idk=$row1['id_ksiazki'];
        $ilosc=$row1['ilosc'];
        $ilosc++;
        mysqli_query($conn, "UPDATE `ksiazka` SET `ilosc`=$ilosc WHERE `id_ksiazki`=$idk");
        mysqli_query($conn, "UPDATE `wypozyczone_i_w_trakcie` SET `stan`=0  WHERE `id_ksiazki`=$idk");}}
echo '<script>
alert ("podejdz do punktu i odbierz ksiazki");
window.location.replace("oddaj.php");

</script>';
