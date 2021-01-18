<?php
  /* ASSIGNMENT
    definire la struttura di una tabella users che contiene i dati degli utenti di un blog
    definire una classe User che "mappa" la tabella users
    creare alcune istanze della classe User
    per stampare i dati degli utenti
  */
  require_once 'User.php';
  require_once 'Admin.php';
  require_once 'users.php';
  require_once 'admins.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Blog Users</title>
  </head>
  <body>
    <div id="page-wrapper">
      <div class="container">
        <h1>Blog users</h1>
        <h2>Admins</h2>
        <p>
          <?php echo('prova') ?>
        </p>
        <p>
          <?php echo('prova') ?>
        </p>
        <p>
          <?php echo($prova_us) ?>
        </p>
        <p>
          <?php echo($prova_adm) ?>
        </p>
      </div>
    </div>
  </body>
</html>
