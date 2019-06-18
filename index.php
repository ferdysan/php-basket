<?php
include 'data.php';

$array_giocatori=genera_giocatore(100);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="container">

    <select class="" name="">
    <?php
      foreach ($array_giocatori as $key => $giocatore) {
        foreach ($giocatore as $key_giocatore => $stats) {
          ?>
          <option value="<?php echo $stats['id']; ?>"><?php echo $stats['id']; ?></option>
         <?php
        }
      }
     ?>
    </select>
    <h2>Id Giocatore : <?php echo $stats['id']; ?></h2>
    <p>Punti Fatti : <?php echo $stats['punti fatti']; ?></p>
    <p>Rimbalzi : <?php echo $stats['rimbalzi']; ?></p>
    <p>Falli :<?php echo $stats['falli']; ?></p>
    <p>Tiri da 2 : <?php echo $stats['perc. tiri da 2']; ?></p>
    <p>Tiri da 3 :<?php echo $stats['perc. tiri da 3']; ?></p>

    </div>

  </body>
</html>
