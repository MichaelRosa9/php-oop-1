<?php
require_once __DIR__  . '/classes/Movie.php';

$movie_1 = new Movie('SAW', 'Horror');
$movie_2 = new Movie('Project X', 'Comedy');

$movie_1->set_price();
$movie_2->set_price();

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
    Movie title: <?php echo $movie_1->title ?>, <br>
    Genre: <?php echo $movie_1->genre ?>,<br>
    Price: <?php echo $movie_1->get_price() ?>
  </h1>
  
  <h1>
    Movie title: <?php echo $movie_2->title ?>, <br>
    Genre: <?php echo $movie_2->genre ?>, <br>
    Price: <?php echo $movie_2->get_price() ?>
  </h1>
</body>
</html>