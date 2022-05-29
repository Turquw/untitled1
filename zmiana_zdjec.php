<?php
session_start();
echo '<form action="zmiana_zdjec.php" method="POST" enctype="multipart/form-data">
         <input type="submit" value="Wyślij pliki"/>
            <input type="file" class="custom-file-input"  name="image[]" >
</form>
<div class="card-body">
   <h4 class="card-title">Pliki w trakcie wysyłania, nie zamykaj tego okna… <i class="fa fa-upload"></i></h4>
   <div class="progress m-t-20">
      <div class="progress-bar bg-success" style="width: 0%; height:15px;" role="progressbar">0%</div>
   </div>
</div>

';


if (isset($_FILES['image'])) {
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $extensions = array("jpeg", "jpg", "png", "webp", "pdf");
    foreach ($file_name as $key => $value) {
        $tmp = explode('.', $_FILES['image']['name'][$key]);
        $file_ext = strtolower(end($tmp));
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Rozszerzenie niedozwolone.";
        }
        if ($file_size[$key] > 2097152) {
            $errors[] = 'Plik nie może być większy niż 2 MB.';
        }
    }
    if (empty($errors) == true) {
        foreach ($file_name as $key => $value) {
            move_uploaded_file($file_tmp[$key], "profilowe/" . $file_name[$key]);
            $imie=$_SESSION["current_user"];
            $conn = new mysqli("localhost","root","","quizy") or die ("Odpowiedź: Błąd połączenia z serwerem ");


            mysqli_query($conn, "UPDATE users SET user_profil = '$file_name[$key]' WHERE user_nick like '$imie'");
            echo "Pliki poprawnie wysłane!";
        }
    } else {
        print_r($errors);
    }
}


?>
