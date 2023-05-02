<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="public/css/contact.css">
<link rel="stylesheet" href="public/css/log.css">
</head>
<body>
<?php 
          include('components/header.php');
          
          ?>
          </div>
</div>
<div class="login-page">
  <div class="form">

    <form class="login-form" action="logic/login.php" method="post">
      <input type="text" placeholder="username" name="sign-in-email"/>
      <input type="password" placeholder="password" name="sign-in-password"/>
      <input type="submit" class="button" name="login" value="login">

    </form>
  </div>
</div>
<?php 
          include('components/footer.php');
          
          ?>
</body>
</html>