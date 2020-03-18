<?php


  class User { 
    private $username;
    private $email;
    private $role = 'member';

    public function __construct($username, $email){
      $this->username = $username;
      $this->email = $email;
    }
    function addFriend(){
      echo "$this->username added a friend";
    }
  }

  class AdminUser extends User{
    public $level;
  private $role = 'admin';
    public function __construct($username, $email, $level)
    {
      $this->level = $level;
      parent::__construct($username, $email);
    }
  }
  
  print_r(get_class_vars('User'));
  echo '<br />';
  print_r(get_class_methods('User'));
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP in PHP</title>
</head>
<body>
  
</body>
</html>