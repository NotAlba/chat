<p><?php echo "insertar.php" ?></p>
<p><?php echo htmlspecialchars($_POST['user']); ?></p>
<p><?php echo htmlspecialchars($_POST['mensaje']); ?></p>
<?php
include 'connexioBD.php';
$usuario =  mysqli_real_escape_string($conn,$_POST['user']);
$message =   mysqli_real_escape_string($conn,$_POST['mensaje']);
$date = date("H:i:s");
if ($usuario == '' || $message == '' ){
	header("Location: index.php?MensajeError=Error: no se pueden instroducir datos vacios");
	exit();
}
else{$sql = "INSERT INTO missatges (id,usuari,text,hora) VALUES ('','$usuario','$message','$date')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
header("Location: index.php");
exit();
?>