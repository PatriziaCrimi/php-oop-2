<?php
  // CLASS CREATION
  class User {
    // INSTANCE VARIABLES INTIALIZATION
    public $id_user;
    public $first_name;
    public $last_name;
    public $nickname;
    public $password;
    public $age;  // It is better to use only "birth_date" because "age" changes every year
    public $birth_date;
    public $gender;
    public $nationality;
    public $occupation;
    public $email;
    public $telephone;
    public $address;
    public $bio_description;
    public $interests;
    public $registration_date;
    public $notes;
    public $newsletter = 1; // NOT NULL and DEAFULT(1)
    public $role = 4; // NOT NULL and DEAFULT(4)

    // ------------------------------ CONSTRUCTOR ------------------------------

    function __construct($_id_user, $_nickname, $_password, $_age, $_email, $_registration_date) {
      $this->id_user = $_id_user;
      $this->nickname = $_nickname;
      $this->password = $_password;
      $this->age = $_age;
      $this->email = $_email;
      $this->registration_date = $_registration_date;
    }

    // ------------------------------ METHODS ------------------------------

    // GETTER FUNCTIONS
    public function getPassword() {
      return $this->password;
    }

    public function getAge() {
      return $this->age;
    }

    public function getEmail() {
      return $this->email;
    }

    // SETTER FUNCTIONS
    public function setPassword($_password, $psw_max_length) {
      if(strlen($_password) > 0 && strlen($_password) <= $psw_max_length) {
        $this->password = $_password;
      } else {
        $this->password = null;
      }
    }

    public function setAge($_age, $min_age, $max_age) {
      if(is_numeric($_age) && $_age > $min_age && $_age < $max_age) {
        $this->age = $_age;
      } else {
        $this->age = null;
      }
    }

    public function setEmail($_mail) {
      if (strpos($_mail, '.') !== false && strpos($_mail, '@') !== false) {
        $this->email = $_mail;
      } else {
        $this->email = null;
      }
    }
  }
?>
