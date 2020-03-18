<?php
  require('user_validator.php');
  if(isset($_POST['submit'])){
    // validate entries
    $validator = new UserValidator($_POST);

    $errors = $validator->validateForm();
  }
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form validation</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="new-user">
    <h2>Create new user</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
 
      <label>Username:</label>
      <input type="text" name="username">
      
 
      <label>Email:</label>
      <input type="text" name="email">

      <input type="submit" value="Submit" name="submit">
    </form>
  </div>
</body>
</html>