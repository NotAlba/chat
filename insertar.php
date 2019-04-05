<?php

$usuario=$_POST['user'];
$message=$_POST['mensaje'];
$date = date("H:i:s");


include 'connexioBD.php';
$sql = "INSERT INTO missatges (usuari, text, hora)
VALUES ('$usuario','$message', '$date')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>