<?php 

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/php-nba-vacanze/db/database.php'); 

$filteredMatches = [];

$home_team = $_GET['home_team'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>php-nba-vacanze</title>
</head>
<body>

   <header>
      <h1>NBA Matches</h1>

      <p><?php echo 'il team scelto è ' . $home_team ?></p>
   </header>

   <main>

      <?php foreach ($matches as $singleMatch) { ?>

         <?php if ($home_team == '') { ?>
         
            <div class="match-container">

               <!-- nome squadra casa -->
               <p>
                  <?php echo $singleMatch['home_team']['city'] . ' ' ; echo $singleMatch['home_team']['nickname'] ?>
               </p>

               <!-- logo squadra casa -->
               <img src="img/<?php echo $singleMatch['home_team']['logo'] ?>" alt="">

               <!-- punteggio squadra casa -->
               <h3>
                  <?php echo $singleMatch['home_team']['score']?>
               </h3>

               <!-- stadio -->
               <div class="stadium">

                  <p class="arena">
                     <?php echo $singleMatch['arena']?>
                  </p>
                  <p class="city">
                     <?php echo $singleMatch['city']?>
                  </p>

               </div>

               <!-- punteggio squadra ospite -->
               <h3>
                  <?php echo $singleMatch['away_team']['score']?>
               </h3>

               <!-- logo squadra ospite -->
               <img src="img/<?php echo $singleMatch['away_team']['logo'] ?>" alt="">

               <!-- nome squadra ospite -->
               <p>
                  <?php echo $singleMatch['away_team']['city'] . ' ' ; echo $singleMatch['away_team']['nickname'] ?>
               </p>

            </div>

      <?php } elseif ($singleMatch['home_team']['nickname'] == $home_team) { ?>
      
         <div class="match-container">

               <!-- nome squadra casa -->
               <p>
                  <?php echo $singleMatch['home_team']['city'] . ' ' ; echo $singleMatch['home_team']['nickname'] ?>
               </p>

               <!-- logo squadra casa -->
               <img src="img/<?php echo $singleMatch['home_team']['logo'] ?>" alt="">

               <!-- punteggio squadra casa -->
               <h3>
                  <?php echo $singleMatch['home_team']['score']?>
               </h3>

               <!-- stadio -->
               <div class="stadium">

                  <p class="arena">
                     <?php echo $singleMatch['arena']?>
                  </p>
                  <p class="city">
                     <?php echo $singleMatch['city']?>
                  </p>

               </div>

               <!-- punteggio squadra ospite -->
               <h3>
                  <?php echo $singleMatch['away_team']['score']?>
               </h3>

               <!-- logo squadra ospite -->
               <img src="img/<?php echo $singleMatch['away_team']['logo'] ?>" alt="">

               <!-- nome squadra ospite -->
               <p>
                  <?php echo $singleMatch['away_team']['city'] . ' ' ; echo $singleMatch['away_team']['nickname'] ?>
               </p>

            </div>

      <?php } ?>


      <?php } ?>

   </main>
   
</body>
</html>