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

  // Printing Admins Seniority Level
  function printSeniorityLevel($seniority_param) {
    if($seniority_param === 1) {
      echo('low');
    } else if($seniority_param === 2) {
      echo('medium');
    } else if($seniority_param === 3) {
      echo('high');
    }
  }

  // Printing Users Role
  function printRole($role_param) {
    if($role_param === 1) {
      echo('admin');
    } else if($role_param === 2) {
      echo('editor');
    } else if($role_param === 3) {
      echo('author');
    } else if($role_param === 4) {
      echo('subscriber');
    }
  }
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
        <!-- Admins section -->
        <h2>Admins</h2>
        <div class="admins-wrapper">
          <div class="admin-box">
            <ul>
              <li class="user-role">
                Role:
                <span>
                  <?php printRole($admin_01->role); ?>
                </span>
              </li>
              <li class="level">
                Seniority Level:
                <span>
                  <?php printSeniorityLevel($admin_01->seniority_level) ?>
                </span>
              </li>
              <li>
                Name:
                <span>
                  <?php echo($admin_01->first_name . " " . $admin_01->last_name) ?>
                </span>
              </li>
              <li>
                Nickname:
                <span>
                  <?php echo($admin_01->nickname) ?>
                </span>
              </li>
              <li>
                Age:
                <span>
                  <?php echo($admin_01->age) ?>
                </span>
              </li>
              <li>
                Nationality:
                <span>
                  <?php echo($admin_01->nationality) ?>
                </span>
              </li>
              <li>
                Occupation:
                <span>
                  <?php echo($admin_01->occupation) ?>
                </span>
              </li>
              <li>
                Registration date:
                <span>
                  <?php echo($admin_01->registration_date) ?>
                </span>
              </li>
            </ul>
          </div>
          <div class="admin-box">
            <ul>
              <li class="user-role">
                Role:
                <span>
                  <?php printRole($admin_02->role); ?>
                </span>
              </li>
              <li class="level">
                Seniority Level:
                <span>
                  <?php printSeniorityLevel($admin_02->seniority_level) ?>
                </span>
              </li>
              <li>
                Name:
                <span>
                  <?php echo($admin_02->first_name . " " . $admin_02->last_name) ?>
                </span>
              </li>
              <li>
                Nickname:
                <span>
                  <?php echo($admin_02->nickname) ?>
                </span>
              </li>
              <li>
                Age:
                <span>
                  <?php echo($admin_02->age) ?>
                </span>
              </li>
              <li>
                Nationality:
                <span>
                  <?php echo($admin_02->nationality) ?>
                </span>
              </li>
              <li>
                Occupation:
                <span>
                  <?php echo($admin_02->occupation) ?>
                </span>
              </li>
              <li>
                Registration date:
                <span>
                  <?php echo($admin_02->registration_date) ?>
                </span>
              </li>
            </ul>
          </div>
          <div class="admin-box">
            <ul>
              <li class="user-role">
                Role:
                <span>
                  <?php printRole($admin_03->role); ?>
                </span>
              </li>
              <li class="level">
                Seniority Level:
                <span>
                  <?php printSeniorityLevel($admin_03->seniority_level) ?>
                </span>
              </li>
              <li>
                Name:
                <span>
                  <?php echo($admin_03->first_name . " " . $admin_03->last_name) ?>
                </span>
              </li>
              <li>
                Nickname:
                <span>
                  <?php echo($admin_03->nickname) ?>
                </span>
              </li>
              <li>
                Age:
                <span>
                  <?php echo($admin_03->age) ?>
                </span>
              </li>
              <li>
                Nationality:
                <span>
                  <?php echo($admin_03->nationality) ?>
                </span>
              </li>
              <li>
                Occupation:
                <span>
                  <?php echo($admin_03->occupation) ?>
                </span>
              </li>
              <li>
                Registration date:
                <span>
                  <?php echo($admin_03->registration_date) ?>
                </span>
              </li>
            </ul>
          </div>
        </div>
        <!-- Users section -->
        <h2>Users</h2>
        <div class="users-wrapper">
          <div class="user-box">
            <ul>
              <li class="user-id">
                User ID:
                <span>
                  <?php echo($user_04->id_user) ?>
                </span>
              </li>
              <li class="user-role">
                Role:
                <span>
                  <?php printRole($user_04->role); ?>
                </span>
              </li>
              <li>
                Name:
                <span>
                  <?php echo($user_04->first_name . " " . $user_04->last_name) ?>
                </span>
              </li>
              <li>
                Nickname:
                <span>
                  <?php echo($user_04->nickname) ?>
                </span>
              </li>
              <li>
                Age:
                <span>
                  <?php echo($user_04->age) ?>
                </span>
              </li>
              <li>
                Nationality:
                <span>
                  <?php echo($user_04->nationality) ?>
                </span>
              </li>
              <li>
                Occupation:
                <span>
                  <?php echo($user_04->occupation) ?>
                </span>
              </li>
              <li>
                Registration date:
                <span>
                  <?php echo($user_04->registration_date) ?>
                </span>
              </li>
            </ul>
          </div>
          <div class="user-box">
            <ul>
              <li class="user-id">
                User ID:
                <span>
                  <?php echo($user_05->id_user) ?>
                </span>
              </li>
              <li class="user-role">
                Role:
                <span>
                  <?php printRole($user_05->role) ?>
                </span>
              </li>
              <li>
                Name:
                <span>
                  <?php echo($user_05->first_name . " " . $user_05->last_name) ?>
                </span>
              </li>
              <li>
                Nickname:
                <span>
                  <?php echo($user_05->nickname) ?>
                </span>
              </li>
              <li>
                Age:
                <span>
                  <?php echo($user_05->age) ?>
                </span>
              </li>
              <li>
                Nationality:
                <span>
                  <?php echo($user_05->nationality) ?>
                </span>
              </li>
              <li>
                Occupation:
                <span>
                  <?php echo($user_05->occupation) ?>
                </span>
              </li>
              <li>
                Registration date:
                <span>
                  <?php echo($user_05->registration_date) ?>
                </span>
              </li>
            </ul>
          </div>
          <div class="user-box">
            <ul>
              <li class="user-id">
                User ID:
                <span>
                  <?php echo($user_06->id_user) ?>
                </span>
              </li>
              <li class="user-role">
                Role:
                <span>
                  <?php printRole($user_06->role) ?>
                </span>
              </li>
              <li>
                Name:
                <span>
                  <?php echo($user_06->first_name . " " . $user_06->last_name) ?>
                </span>
              </li>
              <li>
                Nickname:
                <span>
                  <?php echo($user_06->nickname) ?>
                </span>
              </li>
              <li>
                Age:
                <span>
                  <?php echo($user_06->age) ?>
                </span>
              </li>
              <li>
                Nationality:
                <span>
                  <?php echo($user_06->nationality) ?>
                </span>
              </li>
              <li>
                Occupation:
                <span>
                  <?php echo($user_06->occupation) ?>
                </span>
              </li>
              <li>
                Registration date:
                <span>
                  <?php echo($user_06->registration_date) ?>
                </span>
              </li>
            </ul>
          </div>
          <div class="user-box">
            <ul>
              <li class="user-id">
                User ID:
                <span>
                  <?php echo($user_07->id_user) ?>
                </span>
              </li>
              <li class="user-role">
                Role:
                <span>
                  <?php printRole($user_07->role) ?>
                </span>
              </li>
              <li>
                Name:
                <span>
                  <?php echo($user_07->first_name . " " . $user_07->last_name) ?>
                </span>
              </li>
              <li>
                Nickname:
                <span>
                  <?php echo($user_07->nickname) ?>
                </span>
              </li>
              <li>
                Age:
                <span>
                  <?php echo($user_07->age) ?>
                </span>
              </li>
              <li>
                Nationality:
                <span>
                  <?php echo($user_07->nationality) ?>
                </span>
              </li>
              <li>
                Occupation:
                <span>
                  <?php echo($user_07->occupation) ?>
                </span>
              </li>
              <li>
                Registration date:
                <span>
                  <?php echo($user_07->registration_date) ?>
                </span>
              </li>
            </ul>
          </div>
        </div>
      </div>  <!-- Closing container -->
    </div>  <!-- Closing page-wrapper -->
  </body>
</html>
