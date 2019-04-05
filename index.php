<!DOCTYPE html>
<html lang="ca">
 <head>
 <meta charset="UTF-8" />
 <title>xateja-ho!</title>
 <link rel="stylesheet" type="text/css" href="css/style.css" />
 </head>
 <body>
 <section id="titol">
 <h1>xateja-ho!</h1>
 </section>
 <section id="missatges">
 <?php
include 'connexioBD.php';

$sql="SELECT * FROM missatges ORDER BY id DESC";
$result=mysqli_query($conn,$sql);

while ($row = mysqli_fetch_assoc($result)) {
 

    $id=$row["id"];
    $user=$row["usuari"];
    $text=$row["text"];
    $hora=$row["hora"];   
     
    echo "<p>($id) $hora | $user: </span>$text</p>\n";
}
?>


     
<?php

// Allibera recursos del resultat de la consulta
mysqli_free_result($result);
// Tanca la connexió
mysqli_close($conn);
?>
      </section>
     
 <section id="formulari">
 <form method="post" action="insertar.php">
     <input type="text" name="user" value="" placeholder="Nombre de usuario">
     <input type="text" id="cajam" name="mensaje" value="" placeholder="Mensaje">
    <input type="submit" name="submit" value="Xateja-ho!"/>
 </form>
 </section>
 <section id="errors">
 <p>línia per mostrar missatges d'error</p>
 </section>
 </body>
</html>