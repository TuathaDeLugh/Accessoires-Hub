<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/contact.css">
</head>
<body>
<?php 
          include('components/header.php');
          
          ?>
          </div>
</div>
<div class="navbar container">
<nav>
          <ul id="MenuItems">
            <li><a href="admin.php">posts</a></li>
            <li><a href="contactus.php">contactus</a></li>

          </ul>
        </nav>
    </div>
<div class="container">
  <h2><center>POST</center></h2>
  <form method="post" action="logic/insert.php">
  <label for="fname">Title</label>
  <input type="text" name="title" placeholder="😁😁😁">

  <label for="lname">Image</label>
  <input type="text" id="lname" name="image" placeholder="📁📁📁">

  <label for="subject">price</label>
  <input type="text" id="lname" name="price" placeholder="₹🛒🛒🛒">

  <input type="submit" name="newpro" value="Submit">
  </form>
</div>
</div>
</body>
</html>