<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<!--    <meta http-equiv="refresh" content="2" /> -->
    <title></title>
  </head>
  <body>

    <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" name="submit" value="Upload image">
    </form>


    <?php

session_start();

//$elements  = $_SESSION['koordinati'];

  //  foreach ($elements as $stvar) {
  //    echo "$stvar \n";
//    }

//    echo "<a href=zagon.php>Zaženi skripto</a><br />";
//      $izpis = shell_exec('ifconfig');
//      echo "<pre>$izpis</pre>";
?>
<img src="predictions.jpg" alt="lol" usemap="#skatle">

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

echo count($elements);
foreach ($elements as $data) {
 echo "<br> $data";
}


?>

</body>
</html>
