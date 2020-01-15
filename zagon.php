<!DOCTYPE html>
<html lang="sl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
session_start();
//s    $izpis0 = shell_exec("cd /home/xp3rt/darknet 2>&1");
//    $imageFileType = $_SESSION['imageFileType'];
//".$imageFileType."
    $izpis = shell_exec("cd /home/xp3rt/darknet; pwd; ./darknet detect cfg/yolov3.cfg yolov3.weights data/slika.jpeg 2>&1");
    echo "<pre>$izpis</pre>";
    echo "<a href='kopiraj.php'>Kopiraj sliko</a>";
    ?>
  </body>
  <script>
    var x = `<?php echo $izpis; ?>`;
    x.split("seconds.")[1].split("\n").filter(x => x != "")
    console.log(x);
  </script>
</html>
