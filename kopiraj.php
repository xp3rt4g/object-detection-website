<!DOCTYPE html>
<html lang="sl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    exec('cp /home/xp3rt/darknet/predictions.jpg /opt/lampp/htdocs/test/predictions.jpg 2>&1');
    echo "<h1>Uspešno kopirano.</h1>";
    header( "refresh:3;url=index.php" );

    ?>
  </body>
</html>
