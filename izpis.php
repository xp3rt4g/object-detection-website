<!DOCTYPE html>
<html lang="sl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Detekcija</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  </head>
  <body>
    <img src="predictions.jpg" class="center" alt="lol" usemap="#skatle">

    <map name="skatle">
    <!-- <area shape="rect" coords="357,155,398,191" href="https://www.google.com" alt="gugl"> -->
    <?php

    $elements[] = $_GET['data'];
    $elements = $elements[0];
    $elements = str_replace('[', '', $elements);
    $elements = str_replace(']', '', $elements);
    $elements = str_replace('"', '', $elements);
    $elements = explode(",", $elements);

    $i=1;

    for ($i=1; $i < count($elements) ; $i = $i + 5) {

      echo '<area shape="rect" coords="'.$elements[$i].','.$elements[($i+1)].','.$elements[($i+2)].','.$elements[($i+3)].'" href="https://www.google.com" alt="slika">';

    }

    echo "</map>";

    // echo count($elements);
    $a=0;
    $elementsskup = implode(":", $elements);
    $elementi = explode(":", $elementsskup);
    // echo "<table border=1>";
    //
    // for ($b=0; $b < length($elementi) ; $b++)
    // }
    //
    // echo "</table>";


    ?>

    <div>
<a href="index.html">
      <button class="center-btn" type="button">Nazaj na prvo stran</button></a>

    </div>
  </body>
</html>
