<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script defer src="js/script.js"></script>
   <title>unprojet</title>
</head>
<body>
    <p>Beautiful website</p>
    <p>
      nombre de visite : 
      <?php 
      if (file_exists("nb_visite.txt")) {
        // read
        $myfile = fopen('nb_visite.txt','r');
        $line = fgets($myfile);
        $newValue = $line + 1;
        fclose($myfile);

        // show
        echo $newValue;

        // write
        $myfile = fopen("nb_visite.txt", "w");
        fwrite($myfile, $newValue);
        fclose($myfile);
      } else {
        // create
        $myfile = fopen("nb_visite.txt", "w");
        fwrite($myfile, 0);
        fclose($myfile);
      }
      ?>
    </p>
</body>
</html>