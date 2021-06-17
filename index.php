<?php
require_once __DIR__  . '/classes/Movie.php';

$movie_1 = new Movie('SAW', 'Horror');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP-1</title>
</head>
<body>
  <h1>
    <?php echo $movie_1->title ?>
  </h1>
</body>
</html>