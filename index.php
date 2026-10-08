<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hoja de vida PHP</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php
          $nombre = "Ronny Tupue";
          $profesion = "Ingeniero de Sistemas";
          $edad = 20;
          $habilidades = [
            "HTML","CSS","Java","C#","Javascript","Python","PHP",
          ];
    ?>
    <h1> <?php echo $nombre?> </h1>
    <h2> <?php echo $profesion?> </h2>
    <p><?php echo "Soy " .$nombre. " y soy " .$profesion ?></p>

    <?php  if($edad>=18):?>
         <p>Disponible para trabajar</p>
    <?php  else: ?>
        <p>Menor de edad - no puede trabajar</p>

    <?php  endif; ?>
</body>
</html>