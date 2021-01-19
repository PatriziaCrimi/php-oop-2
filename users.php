<?php
  // VARIABLES & CONSTANTS INITIALIZATION
  $password_max_length = 30;
  $minimum_age = 18;
  $maximum_age = 120;
  $current_date = date('Y/m/d H:i:s');

  // ----------------------- INSTANCES (OR OBJECTS) CREATION -----------------------

  $user_04 = new User(04, 'francesco_pancetta', 'SpiderPork', 40, 'francis.bacon@email.uk', $current_date);
  // Checking that password, age and e-mail are valid values
  $user_04->setPassword($user_04->password, $password_max_length);
  $user_04->setAge($user_04->age, $minimum_age, $maximum_age);
  $user_04->setEmail($user_04->email);
  // Assigning other values
  $user_04->first_name = 'Francis';
  $user_04->last_name = 'Bacon';
  $user_04->birth_date = '1981/01/22';
  $user_04->gender = 'male';
  $user_04->nationality = 'British';
  $user_04->occupation = 'philosopher';
  $user_04->role = 2;


  $user_05 = new User(05, 'omero_simpson', 'doh!', 38, 'homer.simpson@email.us', $current_date);
  // Checking that password, age and e-mail are valid values
  $user_05->setPassword($user_05->password, $password_max_length);
  $user_05->setAge($user_05->age, $minimum_age, $maximum_age);
  $user_05->setEmail($user_05->email);
  // Assigning other values
  $user_05->first_name = 'Homer';
  $user_05->last_name = 'Simpson';
  $user_05->birth_date = '1983/05/12';
  $user_05->gender = 'male';
  $user_05->nationality = 'American';
  $user_05->occupation = 'employee';
  $user_05->role = 3;


  $user_06 = new User(06, 'paola_cort', '241973', 48, 'paola.cortellesi@email.it', $current_date);
  // Checking that password, age and e-mail are valid values
  $user_06->setPassword($user_06->password, $password_max_length);
  $user_06->setAge($user_06->age, $minimum_age, $maximum_age);
  $user_06->setEmail($user_06->email);
  // Assigning other values
  $user_06->first_name = 'Paola';
  $user_06->last_name = 'Cortellesi';
  $user_06->birth_date = '1973/11/24';
  $user_06->gender = 'female';
  $user_06->nationality = 'Italian';
  $user_06->occupation = 'actress';


  $user_07 = new User(07, 'dory', 'kermanshah', 80, 'doris.lessing@email.it', $current_date);
  // Checking that password, age and e-mail are valid values
  $user_07->setPassword($user_07->password, $password_max_length);
  $user_07->setAge($user_07->age, $minimum_age, $maximum_age);
  $user_07->setEmail($user_07->email);
  // Assigning other values
  $user_07->first_name = 'Doris';
  $user_07->last_name = 'Lessing';
  $user_07->birth_date = '1941/10/22';
  $user_07->gender = 'female';
  $user_07->nationality = 'British';
  $user_07->occupation = 'writer';
?>
