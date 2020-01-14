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





    echo "<a href=zagon.php>Zaženi skripto</a><br />";
//      $izpis = shell_exec('ifconfig');
//      echo "<pre>$izpis</pre>";

     echo '<img src="predictions.jpg" alt="lol">';

    ?>

  </body>
</html>
