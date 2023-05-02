<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact-us page</title>
    <link rel="stylesheet" href="public/css/contact.css">
</head>
<body>
<?php 
          include('components/header.php');
          
          ?>
          </div>
</div>
<div class="containn" id="cont">
    <div class="contain">
    <form method="post" action="logic/insert.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
    
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    
        <label for="subject">message</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    
        <input type="submit" name="contactus" value="Submit">
    </div>
</form>
    <div class="right">
        <img src="public/image/contact us.png" alt="">
    </div>
</div>
  
<?php 
          include('components/footer.php');
          
          ?>
</body>
</html>