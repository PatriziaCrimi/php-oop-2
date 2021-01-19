<?php
  // INCLUDING OTHER PHP FILES
  require_once 'User.php';

  // CLASS CREATION
  class Admin extends User {
    public $id_admin;
    public $seniority_level;
    public $notes;

    // ------------------------------ CONSTRUCTOR ------------------------------

    function __construct($_id_user = "", $_nickname = "", $_password = "", $_age = "", $_email = "", $_registration_date = "", $_role = 1, $_id_admin) {

      // All the mandatory parameters already in "User" are passed to "Admin"
      parent::__construct($_id_user, $_nickname, $_password, $_age, $_email, $_registration_date, $_role);

      // Defining the new mandatory properties for the child Class "Admin"
      $this->id_admin = $_id_admin;
    }

    // ------------------------------ METHODS ------------------------------

    // GETTER FUNCTIONS
    public function getSeniorityLevel() {
      return $this->seniority_level;
    }

    // SETTER FUNCTIONS
    public function setSeniorityLevel($_registration_date, $max_date_level_2, $max_date_level_3) {
      // Getting only the year from the registration date
      $registration_year = date('Y', strtotime($_registration_date));
      // Checking if the registration date is old enough to assign Level 2 or 3
      if($registration_year > $max_date_level_2) {
        $this->seniority_level = 1;
      } else if($registration_year <= $max_date_level_2 && $registration_year > $max_date_level_3) {
        $this->seniority_level = 2;
      } else if($registration_year <= $max_date_level_3) {
        $this->seniority_level = 3;
      }
    }
  }
?>
