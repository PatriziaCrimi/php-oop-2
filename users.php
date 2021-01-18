<?php
  // VARIABLES & CONSTANTS INITIALIZATION
  $current_date = date('Y/m/d H:i:s');

  // INSTANCES (OR OBJECTS) CREATION
  $user_01 = new User(01, 'Francis', 'Bacon', 'francesco_pancetta', 'SpiderPork', 40, 'francis.bacon@email.uk', 0, $current_date);
  $user_01->gender = 'male';
  $user_01->nationality = 'British';
  $user_01->occupation = 'philosopher';

  $user_02 = new User(02, 'Homer', 'Simpson', 'omero_simpson', 'doh!', 38, 'homer.simpson@email.us', 1, $current_date);
  $user_02->gender = 'male';
  $user_02->nationality = 'American';
  $user_02->occupation = 'employee';

  $user_03 = new User(03, 'Paola', 'Cortellesi', 'paola_cort', '241973', 47, 'paola.cortellesi@email.it', 1, $current_date);
  $user_03->gender = 'female';
  $user_03->nationality = 'Italian';
  $user_03->occupation = 'actress';

  $user_04 = new User(04, 'Doris', 'Lessing', 'doris', 'kermanshah', 80, 'doris.lessing@email.it', 0, $current_date);
  $user_04->gender = 'female';
  $user_04->nationality = 'British';
  $user_04->occupation = 'writer';
?>
