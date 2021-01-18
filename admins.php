<?php
  // VARIABLES & CONSTANTS INITIALIZATION
  $date_level_2 = 2015;
  $date_level_3 = 2010;

  // INSTANCES (OR OBJECTS) CREATION
  $admin_01 = new Admin($_id = 01, $_first_name = "Luciano", $_last_name = "Ligabue", $_nickname = "Liga", $_password = "radioreccia", $_age = "60", $_email = "ligabue@email.it", $_mailing_list = "1", $_registration_date = "2000/05/18 22:02:05");
  // Assigning the level by invoking "setLevel" function
  $admin_01->setLevel($admin_01->registration_date, $date_level_2, $date_level_3);
  // Checking that password, age and e-mail are valid values
  $admin_01->setPassword($admin_01->password, $password_max_length);
  $admin_01->setAge($admin_01->age, $minimum_age, $maximum_age);
  $admin_01->setEmail($admin_01->email);
  // Assigning other values
  $admin_01->gender = 'male';
  $admin_01->nationality = 'Italian';
  $admin_01->occupation = 'singer-songwriter';


  $admin_02 = new Admin($_id = 02, $_first_name = "Carolina", $_last_name = "Kostner", $_nickname = "caro", $_password = "figure_skating", $_age = "33", $_email = "carolina.kostner@email.it", $_mailing_list = "0", $_registration_date = "2020/09/24 15:36:11");
  // Assigning the level by invoking "setLevel" function
  $admin_02->setLevel($admin_02->registration_date, $date_level_2, $date_level_3);
  // Checking that password, age and e-mail are valid values
  $admin_02->setPassword($admin_02->password, $password_max_length);
  $admin_02->setAge($admin_02->age, $minimum_age, $maximum_age);
  $admin_02->setEmail($admin_02->email);
  // Assigning other values
  $admin_02->gender = 'female';
  $admin_02->nationality = 'Italian';
  $admin_02->occupation = 'athlete';


  $admin_03 = new Admin($_id = 03, $_first_name = "Sharon Janny", $_last_name = "den Adel", $_nickname = "WithinTemptation", $_password = "MetalHead", $_age = "46", $_email = "sharon@email.nl", $_mailing_list = "1", $_registration_date = "2012/08/03 16:26:02");
  // Assigning the level by invoking "setLevel" function
  $admin_03->setLevel($admin_03->registration_date, $date_level_2, $date_level_3);
  // Checking that password, age and e-mail are valid values
  $admin_03->setPassword($admin_03->password, $password_max_length);
  $admin_03->setAge($admin_03->age, $minimum_age, $maximum_age);
  $admin_03->setEmail($admin_03->email);
  // Assigning other values
  $admin_03->gender = 'female';
  $admin_03->nationality = 'Dutch';
  $admin_03->occupation = 'singer';
?>
