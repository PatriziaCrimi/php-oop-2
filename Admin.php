<?php
  // INCLUDING OTHER PHP FILES
  require_once 'User.php';

  // CLASS CREATION
  class Admin extends User {
    public $level;

    // ------------------------------ CONSTRUCTOR ------------------------------

    function __construct($_id = "", $_first_name = "", $_last_name = "", $_nickname = "", $_password = "", $_age = "", $_email = "", $_mailing_list = "", $_registration_date = "", $_level = 1) {

      // All the mandatory parameters already in "User" are passed to "Admin"
      parent::__construct($_id, $_first_name, $_last_name, $_nickname, $_password, $_age, $_email, $_mailing_list, $_registration_date);

      // Defining "level", which is another mandatory parameter for "Admin"
      $this->level = $_level;
    }

    // ------------------------------ METHODS ------------------------------

    // GETTER FUNCTIONS
    public function getLevel() {
      return $this->level;
    }

    // SETTER FUNCTIONS
    public function setLevel($_registration_date, $min_date_level_2, $min_date_level_3) {
      // Getting only the year from the registration date
      $registration_year = date('Y', strtotime($_registration_date));
      // Checking if the registration date is old enough to assign Level 2 or 3
      if($registration_year <= $min_date_level_2 && $registration_year > $min_date_level_3) {
        $this->level = 2;
      } else if($registration_year <= $min_date_level_3) {
        $this->level = 3;
      }
    }
  }
?>
