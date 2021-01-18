<?php
  // VARIABLES & CONSTANTS INITIALIZATION
  $password_max_length = 10;
  $minimum_age = 18;
  $maximum_age = 120;
  $current_date = date('Y/m/d H:i:s');

  // INSTANCES (OR OBJECTS) CREATION
  $user_01 = new User(01, 'Francis', 'Bacon', 'francesco_pancetta', 'SpiderPork', 40, 'francis.bacon@email.uk', 0, $current_date);
  // Checking that password, age and e-mail are valid values
  $user_01->setPassword($user_01->password, $password_max_length);
  $user_01->setAge($user_01->age, $minimum_age, $maximum_age);
  $user_01->setEmail($user_01->email);
  // Assigning other values
  $user_01->gender = 'male';
  $user_01->nationality = 'British';
  $user_01->occupation = 'philosopher';


  $user_02 = new User(02, 'Homer', 'Simpson', 'omero_simpson', 'doh!', 38, 'homer.simpson@email.us', 1, $current_date);
  // Checking that password, age and e-mail are valid values
  $user_02->setPassword($user_02->password, $password_max_length);
  $user_02->setAge($user_02->age, $minimum_age, $maximum_age);
  $user_02->setEmail($user_02->email);
  // Assigning other values
  $user_02->gender = 'male';
  $user_02->nationality = 'American';
  $user_02->occupation = 'employee';

  $user_03 = new User(03, 'Paola', 'Cortellesi', 'paola_cort', '241973', 47, 'paola.cortellesi@email.it', 1, $current_date);
  // Checking that password, age and e-mail are valid values
  $user_03->setPassword($user_03->password, $password_max_length);
  $user_03->setAge($user_03->age, $minimum_age, $maximum_age);
  $user_03->setEmail($user_03->email);
  // Assigning other values
  $user_03->gender = 'female';
  $user_03->nationality = 'Italian';
  $user_03->occupation = 'actress';

  $user_04 = new User(04, 'Doris', 'Lessing', 'doris', 'kermanshah', 80, 'doris.lessing@email.it', 0, $current_date);
  // Checking that password, age and e-mail are valid values
  $user_04->setPassword($user_04->password, $password_max_length);
  $user_04->setAge($user_04->age, $minimum_age, $maximum_age);
  $user_04->setEmail($user_04->email);
  // Assigning other values
  $user_04->gender = 'female';
  $user_04->nationality = 'British';
  $user_04->occupation = 'writer';
?>
