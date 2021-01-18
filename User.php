<?php
  // VARIABLES & CONSTANTS INITIALIZATION
  $psw_max_length = 10;

  // CLASS CREATION
  class User {
    // INSTANCE VARIABLES INTIALIZATION
    public $id;
    public $first_name;
    public $last_name;
    public $nickname;
    private $password;
    public $age;
    public $birth_date;
    public $gender;
    public $nationality;
    public $occupation;
    private $email;
    public $telephone;
    public $address;
    public $bio_description;
    public $interests;
    public $mailing_list;
    public $registration_date;
    public $notes;

    // ------------------------------ CONSTRUCTOR ------------------------------

    function __construct($_id, $first_name, $_last_name, $_nickname, $_password, $_age, $_email, $_mailing_list, $_registration_date) {
      $this->id = $_id;
      $this->first_name = $_first_name;
      $this->last_name = $_last_name;
      $this->nickname = $_nickname;
      $this->password = $_password;
      $this->age = $_age;
      $this->email = $_email;
      $this->mailing_list = $_mailing_list;
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
    public function setPassword($_password) {
      if(strlen($_password) > 0 && strlen($_password) <= $psw_max_length) {
        $this->password = $_password;
      } else {
        $this->password = null;
      }
    }

    public function setAge($_age) {
      if(is_numeric($_age) && $_age > 18 && $_age < 120) {
        $this->age = $_age;
      } else {
        $this->age = null;
      }
    }

    public function setEmail($_email) {
      if (strpos($this->email, '.') !== false && strpos($this->email, '@') !== false) {
        $this->mail = $_mail;
      } else {
        $this->mail = null;
      }
    }
  }
?>
