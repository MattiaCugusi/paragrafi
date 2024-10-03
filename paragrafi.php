<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragrafi</title>
</head>
<body>

<?php
   $size = 10;
   $num = 5;

   for ($i = 0; $i < $num; $i++){
      echo "<p style='font-size: " . $size . "px;'>Paragrafo</p>";
      $size =  $size + 2;

   }


?>
    
</body>
</html>