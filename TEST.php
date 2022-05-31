<?php

use Shuchkin\SimpleXLSX;

echo '<html lang="">
<body>
<div id="wrapper">
 <form method="post" action="TEST.php" enctype="multipart/form-data">
  <input type="file" name="file"/>
  <input type="submit" name="submit_file" value="Submit"/>
 </form>
</div>
</body>
</html>';


$conn = new mysqli("localhost","root","","ksiegarnia") or die ("Odpowiedź: Błąd połączenia z serwerem ");

if(isset($_POST["submit_file"])) {
    $file = $_FILES["file"]["tmp_name"];


    if (substr($_FILES["file"]["name"], -4) == "xlsx" || substr($_FILES["file"]["name"], -3) == "csv") {
        if (substr($_FILES["file"]["name"], -4) == "xlsx") {
            require_once 'simplexlsx-master/src/SimpleXLSX.php';
            $xlsx = SimpleXLSX::parse($file);
            $cos='';
            $kot='';
            $cell="";
            foreach ( $xlsx->rows() as $r => $row ) {
                foreach ( $row as $c => $cell ) {
                    $cos=$cos.$cell.";";

                }
                    $cos=$cos."\n";



            }

            $fp = fopen('file.csv', 'w');
            fputs($fp,$cos);
           foreach ($cos as $fields) {
                fputcsv($fp, $fields);
            }

            fclose($fp);
            $file_open = fopen('file.csv', "r");

            while (($csv = fgetcsv($file_open, 1000, ";")) !== false) {
                $id_dlugosci = $csv[0];
                $dlugosc = $csv[1];

                mysqli_query($conn, "INSERT INTO dlugosc VALUES ('$id_dlugosci','$dlugosc')");
            }
            mysqli_query($conn, "DELETE FROM dlugosc WHERE Dlugosc like 'Dlugosc'");
        }
        $file_open = fopen($file, "r");

        while (($csv = fgetcsv($file_open, 1000, ";")) !== false) {
            $id_dlugosci = $csv[0];
            @   $dlugosc = $csv[1];
            @   mysqli_query($conn, "INSERT INTO dlugosc VALUES ('$id_dlugosci','$dlugosc')");
        }}

        }








else
    {

        echo 'not work';


    }







