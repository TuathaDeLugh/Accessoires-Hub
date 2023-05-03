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
          include("database/db.php");
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
    <?php
    $id=$_GET['id'];
    $q = "SELECT * FROM products WHERE id = $id";
    $res = mysqli_query($con, $q);
    $row = mysqli_fetch_assoc($res);
    ?>
  <h2><center>POST</center></h2>
  <form method="post" action="logic/update.php">
  <label for="fname">Title</label>
  <input type="text" name="title" placeholder="title" value="<?php echo $row['title'] ?>">

  <label for="lname">Image</label>
  <input type="text" id="lname" name="image" placeholder="image" value="<?php echo $row['image'] ?>">

  <label for="subject">Price</label>
  <input type="text" id="lname" name="price" placeholder="price" value="<?php echo $row['price'] ?>">
  <input type="hidden" id="lname" name="id" value="<?php echo $id ?>">
  <input type="submit" value="Submit" name="updatepro">
  </form>
</div>
</div>
</body>
</html>