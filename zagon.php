<!DOCTYPE html>
<html lang="sl" dir="ltr">
  <head>
    <meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <?php
session_start();
//s    $izpis0 = shell_exec("cd /home/xp3rt/darknet 2>&1");
    $imageFileType = $_SESSION['imageFileType'];

    $izpis = shell_exec("cd /home/xp3rt/darknet; pwd; ./darknet detect cfg/yolov3.cfg yolov3.weights data/slika.".$imageFileType." 2>&1");
//    echo "<pre>$izpis</pre>";
    ?>
  </body>
  <script>
    var x = `<?php echo $izpis; ?>`;
    var razdeljeno = x.split("seconds.")[1].split("\n").filter(x => x != "")
    console.log(razdeljeno);
    for (var i = 0; i < razdeljeno.length; i+=1) {
      document.write(razdeljeno[i]);
      document.write("<br>");
    }

    function moveForward() {
      var link = `kopiraj.php?data=${JSON.stringify(razdeljeno)}`;
      window.location = link;
    }
//    razdeljeno = [].join(',')
//    $.post('kopiraj.php', {razdeljeno: razdeljeno})
  </script>
    <a onclick="moveForward()"><strong>Naprej</strong></a> <br>
</html>
