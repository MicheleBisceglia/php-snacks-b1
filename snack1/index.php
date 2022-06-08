<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$nbaGame = [
  [
    'HomeTeam' => 'Chicago Bulls',
    'VisitingTeam' => 'Boston Celtics',
    'HomePti' => '114',
    'VisitingPti' => '112',
  ],
  [
    'HomeTeam' => 'Miami Heat',
    'VisitingTeam' => 'S.Antonio Spurs',
    'HomePti' => '133',
    'VisitingPti' => '129',
  ],
  [
    'HomeTeam' => 'Los Angeles Lakers',
    'VisitingTeam' => 'Toronto Raptors',
    'HomePti' => '83',
    'VisitingPti' => '89',
  ],
  [
    'HomeTeam' => 'Golden State Warriors',
    'VisitingTeam' => 'Dallas Mavericks',
    'HomePti' => '133',
    'VisitingPti' => '129',
  ],
];
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
  <H1>NBA Playoffs 2022 </H1>
  
  <?php for ($i = 0; $i < count($nbaGame); $i++) {
    $current_game = $nbaGame[$i];
  ?>
    <h3>
      <?php echo $current_game["HomeTeam"]; ?>
        -
      <?php echo $current_game["VisitingTeam"]; ?>
        |
      <?php echo $current_game["HomePti"]; ?>
        -
      <?php echo $current_game["VisitingPti"]; ?>
    </h3>
    <?php } ?>
</body>

</html>