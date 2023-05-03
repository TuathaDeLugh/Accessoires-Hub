<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <title>Accessories Hub</title>
</head>

<body>
    <?php
    session_start();
    ?>
  <div class="header">
    <div class="container">
      <div class="navbar">
        <div class="logo">

          <a href="index.html"><img src="public/image/Accessories Hub.svg" alt="Accessories Hub" /></a>

        </div>
        <nav>
          <ul id="MenuItems">
            <li><a href="index.php">Home</a></li>
            <li><a href="product.php">Products</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            
            <?php
            if (isset($_SESSION['admin'])) {
                ?>
                <!-- <li><a href="admin.php">admin panel</a></li> -->
                <li><a href="logic/login.php?logout=yes">logout</a></li>
            <?php
            }
            else{
            ?>
            <li><a href="login.php">login</a></li>
            <?php
            }
            ?>

          </ul>
        </nav>
      </div>
      