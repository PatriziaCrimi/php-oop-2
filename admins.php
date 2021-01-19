<?php
  // VARIABLES & CONSTANTS INITIALIZATION
  $max_date_seniority_2 = 2015;
  $max_date_seniority_3 = 2010;

  // ----------------------- INSTANCES (OR OBJECTS) CREATION -----------------------

  $admin_01 = new Admin($_id_user = 01, $_nickname = "Liga", $_password = "radioreccia", $_age = 60, $_email = "ligabue@email.it", $_registration_date = "2000/05/18 22:02:05", $_role = 1, 01);
  // Checking that password, age and e-mail are valid values
  $admin_01->setPassword($admin_01->password, $password_max_length);
  $admin_01->setAge($admin_01->age, $minimum_age, $maximum_age);
  $admin_01->setEmail($admin_01->email);
  // Assigning other values
  $admin_01->first_name = 'Luciano';
  $admin_01->last_name = 'Ligabue';
  $admin_01->gender = 'male';
  $admin_01->nationality = 'Italian';
  $admin_01->occupation = 'singer-songwriter';
  // Assigning the seniority level by invoking "setSeniorityLevel" function
  $admin_01->setSeniorityLevel($admin_01->registration_date, $max_date_seniority_2, $max_date_seniority_3);


  $admin_02 = new Admin($_id_user = 02, $_nickname = "WithinTemptation", $_password = "MetalHead", $_age = 46, $_email = "sharon@email.nl", $_registration_date = "2012/08/03 16:26:02", $_role = 1, 02);
  // Checking that password, age and e-mail are valid values
  $admin_02->setPassword($admin_02->password, $password_max_length);
  $admin_02->setAge($admin_02->age, $minimum_age, $maximum_age);
  $admin_02->setEmail($admin_02->email);
  // Assigning other values
  $admin_02->first_name = 'Sharon';
  $admin_02->last_name = 'den Adel';
  $admin_02->gender = 'female';
  $admin_02->nationality = 'Dutch';
  $admin_02->occupation = 'singer';
  // Assigning the seniority level by invoking "setSeniorityLevel" function
  $admin_02->setSeniorityLevel($admin_02->registration_date, $max_date_seniority_2, $max_date_seniority_3);


  $admin_03 = new Admin($_id_user = 03, $_nickname = "caro", $_password = "figure_skating", $_age = 33, $_email = "carolina.kostner@email.it", $_registration_date = "2020/09/24 15:36:11", $_role = 1, 03);
  // Checking that password, age and e-mail are valid values
  $admin_03->setPassword($admin_03->password, $password_max_length);
  $admin_03->setAge($admin_03->age, $minimum_age, $maximum_age);
  $admin_03->setEmail($admin_03->email);
  // Assigning other values
  $admin_03->first_name = 'Carolina';
  $admin_03->last_name = 'Kostner';
  $admin_03->gender = 'female';
  $admin_03->nationality = 'Italian';
  $admin_03->occupation = 'athlete';
  // Assigning the seniority level by invoking "setSeniorityLevel" function
  $admin_03->setSeniorityLevel($admin_03->registration_date, $max_date_seniority_2, $max_date_seniority_3);
?>
