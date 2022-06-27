<?php 
require_once __DIR__ . '/classes/movie.php';

  $movies = [
    new Movie('Titanic', '1997', 'James Cameron'),
    new Movie('Taxi Driver', '1976', 'Martin Scorsese'),
    new Movie('The Shawshank Redemption', '1994', 'Frank Darabont'),
  ]
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Catalogo Films</h1>
  <ul>
    <?php foreach($movies as $movie) { ?>
    <li>
      <h2><?php echo $movie->title; ?></h2>
      <h3><?php echo $movie->year; ?></h3>
      <h4><?php echo $movie->director; ?></h4>
    </li>
    <?php } ?>
  </ul>
</body>
</html>