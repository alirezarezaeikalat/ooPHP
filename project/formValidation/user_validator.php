<?php 

  class UserValidator{

    private $data;
    private $errors = [];
    private static $fields = ['username', 'email'];
    public function __construct($post_data)
    {
      $this->data = $post_data;
    }

    public function validateForm(){ 
      foreach(self::$fields as $field){
        if(!array_key_exists($field, $this->data)){
          trigger_error("$field is not present in the data");
        }
      }
      $this->validateUsername();
      $this->validateEmail();
      return $this->errors;
    }

    private function validateUsername(){
      $username = trim($this->data['username']);
      if(empty($username)){
        $this->addError('username', 'username cannot be empty');
      } else {
        if(!preg_match('/^[a-zA-Z0-9]{6,12}$/', $username)){
          $this->addError('username', 'username must be 6 to 12 chars or alphanumeric');
        }
      }
    }

    private function validateEmail(){
      $email = trim($this->data['email']);
      if (empty($email)) {
        $this->addError('email', 'email cannot be empty');
      } else {
        if (!filter_var($email, 'FILTER_VALIDATE_EMAIL')) {
          $this->addError('email', 'email must be a valid email');
        }
      }
    }

    private function addError($key, $value){
      $this->errors[$key] = $value;
    }

  }
?>