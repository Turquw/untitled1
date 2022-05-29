<?php
$conn = new mysqli("localhost","root","","ksiegarnia") or die ("Odpowiedź: Błąd połączenia z serwerem ");
mysqli_query($conn, "mysqldump -u root");