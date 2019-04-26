<!DOCTYPE html>
<html lang="ca">
 <head>
 <meta charset="UTF-8" />
 <title>xateja-ho!</title>
 <link rel="stylesheet" type="text/css" href="style.css" />
 </head>
 <body>
 
<a href="https://es.cooltext.com"><img src="https://images.cooltext.com/5282772.png" width="453" height="104" alt="xateja-ho!" /></a>
 
 <section id="missatges">
 <?php
include 'connexioBD.php';

$sql="SELECT * FROM missatges ORDER BY id DESC limit 10";
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
     <p><input type="submit" name="submit" value="Xateja-ho!"/> </p>
     
 </form>
 </section>
 <section id="errors">

  <p><a href="index.php"><?php if(empty($_GET['MensajeError'])){echo '';} else {echo $_GET['MensajeError'];} ?></a></p>

 </section>
     
 <section id="redes">
    <p>
        <b>
            Do you have any questions? Ask me! <a href="https://www.instagram.com/not_alba/">
            <img border="0" alt="@Not_alba" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1024px-Instagram_logo_2016.svg.png" width="20" height="20"></a>
        </b>
    </p>
    </section>
 </body>
</html>