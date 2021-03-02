<?php

// è il php dedicato al frontend (alla view)

// per la prima milestone
require_once __DIR__ . '/database/database.php';

?>

<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="album-container">
      <h2>ALBUMS</h2>
      <?php foreach ($arrayDischi as $item) { ?>

        <div class="item">
          <img src="img/<?php echo $item['imgUrl']; ?>" alt="">
          <h3><?php echo $item['album']; ?></h3>
          <h4><?php echo $item['autore']; ?></h4>
          <h6><?php echo $item['anno']; ?></h6>
          <h4><?php echo $item['genere']; ?></h4>
        </div>

      <?php } ?>
    </div>



  </body>
</html>
