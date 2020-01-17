<!DOCTYPE html>
<html lang="sl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <?php

//    $elements = $_POST['elements'];
//    $elements = explode(',', $elements);
//    $_SESSION['koordinati'] = $elements;

    exec('cp /home/xp3rt/darknet/predictions.jpg /opt/lampp/htdocs/test/predictions.jpg 2>&1');
//    echo "<h1>Uspešno kopirano.</h1>";
    header( "refresh:3;url=izpis.php?data=".$_GET["data"] );

    ?>
  </body>
</html>
