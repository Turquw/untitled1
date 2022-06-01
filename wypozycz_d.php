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

        $query = mysqli_query($conn, "SELECT * FROM ksiazka  where tytul like '$subject'");
        $row1 = mysqli_fetch_array($query);

        $idk=$row1['id_ksiazki'];

        mysqli_query($conn, "INSERT INTO `wypozyczone_i_w_trakcie`(`stan`, `id_ksiazki`, `id_czytelnika`) VALUES (1,$idk,$klient)");}}
        echo '<script>
alert ("podejdz do punktu i odbierz ksiazki");
window.location.replace("wypozycz.php");

</script>';
