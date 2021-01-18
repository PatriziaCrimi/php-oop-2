<?php
  // VARIABLES & CONSTANTS INITIALIZATION
  $current_date = date('Y/m/d H:i:s');

  // INSTANCES (OR OBJECTS) CREATION
  $user_01 = new User(01, 'Francis', 'Bacon', 'francesco_pancetta', 'SpiderPork', 40, 'francis.bacon@email.uk', 0, $current_date);
    $user_01->gender = 'male';
?>
