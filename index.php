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
        <!-- Admins section -->
        <h2>Admins</h2>
        <div class="admins-wrapper">
          <div class="admin-box">
            <ul>
              <li>
                <span>
                  <li class="level">
                    Level:
                    <span>
                      <?php echo($admin_01->level) ?>
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
                </span>
              </li>
            </ul>
          </div>
          <div class="admin-box">
            <ul>
              <li>
                <span>
                  <li class="level">
                    Level:
                    <span>
                      <?php echo($admin_02->level) ?>
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
                </span>
              </li>
            </ul>
          </div>
          <div class="admin-box">
            <ul>
              <li>
                <span>
                  <li class="level">
                    Level:
                    <span>
                      <?php echo($admin_03->level) ?>
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
                  <?php echo($user_01->id) ?>
                </span>
              </li>
              <li>
                Name:
                <span>
                  <?php echo($user_01->first_name . " " . $user_01->last_name) ?>
                </span>
              </li>
              <li>
                Nickname:
                <span>
                  <?php echo($user_01->nickname) ?>
                </span>
              </li>
              <li>
                Age:
                <span>
                  <?php echo($user_01->age) ?>
                </span>
              </li>
              <li>
                Nationality:
                <span>
                  <?php echo($user_01->nationality) ?>
                </span>
              </li>
              <li>
                Occupation:
                <span>
                  <?php echo($user_01->occupation) ?>
                </span>
              </li>
              <li>
                Registration date:
                <span>
                  <?php echo($user_01->registration_date) ?>
                </span>
              </li>
            </ul>
          </div>
          <div class="user-box">
            <ul>
              <li class="user-id">
                User ID:
                <span>
                  <?php echo($user_02->id) ?>
                </span>
              </li>
              <li>
                Name:
                <span>
                  <?php echo($user_02->first_name . " " . $user_02->last_name) ?>
                </span>
              </li>
              <li>
                Nickname:
                <span>
                  <?php echo($user_02->nickname) ?>
                </span>
              </li>
              <li>
                Age:
                <span>
                  <?php echo($user_02->age) ?>
                </span>
              </li>
              <li>
                Nationality:
                <span>
                  <?php echo($user_02->nationality) ?>
                </span>
              </li>
              <li>
                Occupation:
                <span>
                  <?php echo($user_02->occupation) ?>
                </span>
              </li>
              <li>
                Registration date:
                <span>
                  <?php echo($user_02->registration_date) ?>
                </span>
              </li>
            </ul>
          </div>
          <div class="user-box">
            <ul>
              <li class="user-id">
                User ID:
                <span>
                  <?php echo($user_03->id) ?>
                </span>
              </li>
              <li>
                Name:
                <span>
                  <?php echo($user_03->first_name . " " . $user_03->last_name) ?>
                </span>
              </li>
              <li>
                Nickname:
                <span>
                  <?php echo($user_03->nickname) ?>
                </span>
              </li>
              <li>
                Age:
                <span>
                  <?php echo($user_03->age) ?>
                </span>
              </li>
              <li>
                Nationality:
                <span>
                  <?php echo($user_03->nationality) ?>
                </span>
              </li>
              <li>
                Occupation:
                <span>
                  <?php echo($user_03->occupation) ?>
                </span>
              </li>
              <li>
                Registration date:
                <span>
                  <?php echo($user_03->registration_date) ?>
                </span>
              </li>
            </ul>
          </div>
          <div class="user-box">
            <ul>
              <li class="user-id">
                User ID:
                <span>
                  <?php echo($user_04->id) ?>
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
        </div>
      </div>  <!-- Closing container -->
    </div>  <!-- Closing page-wrapper -->
  </body>
</html>
