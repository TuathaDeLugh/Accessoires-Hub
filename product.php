<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/product.css">
    <title>Accessories Hub</title>
</head>

<body>
<?php 
          include('components/header.php');
          
          ?>
          </div>
</div>
    <div class="small-container">
        <h2 class="title">Latest Products</h2>
        <div class="row">
        <?php
      include('components/prod.php');
      ?>
      
        </div>
    </div>
  <?php 
          include('components/footer.php');
          
          ?>
</body>

</html>