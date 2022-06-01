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

        $podziel = explode(";", $subject);
        $subject=$podziel[0];
        $id=$podziel[3];

        $qu=mysqli_query($conn,"select * from ksiazka where tytul like '$subject'");
        $row2 = mysqli_fetch_array($qu);
        $ilosc= $row2['ilosc'];

        $ilosc++;
        $query = mysqli_query($conn, "SELECT * FROM `wypozyczone_i_w_trakcie` left join ksiazka on wypozyczone_i_w_trakcie.id_ksiazki=ksiazka.id_ksiazki  
  where ksiazka.tytul like '$subject' and stan=0 and wypozyczone_i_w_trakcie.id_czytelnika='$id'");
        $row1 = mysqli_fetch_array($query);

       $idk= $row1['id_ksiazki'];
        $idcz= $row1['id_czytelnika'];
        echo $idk;
        echo $idcz;


      mysqli_query($conn, "UPDATE `ksiazka` SET `ilosc`=$ilosc WHERE `id_ksiazki`=$idk");
       mysqli_query($conn, "DELETE FROM `wypozyczone_i_w_trakcie` WHERE  `id_ksiazki`=$idk and id_czytelnika=$idcz");}
    echo '<script>window.location.replace("biblio.php")</script>';
}
else{
    echo '<script>window.location.replace("biblio.php")</script>';
}
