<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="./public/css/style.css">
</head>  
<body>

          <?php 
          include('components/header.php');
          
          ?>
          <div class="row">
        <div class="col-2">
          <h1>
            Give Your product <br />
            A New !
          </h1>
        </div>
        <div class="col-2">
          <img src="public/image/bodyimg.png" alt="" />
        </div>
      </div>
    </div>
  </div>
  <div class="categories">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <img src="public/image/keyboard.png" alt="" />
        </div>
        <div class="col-3">
          <img src="public/image/mouse.png" alt="" />
        </div>
        <div class="col-3">
          <img src="public/image/headphone.png" alt="" />
        </div>
      </div>
    </div>
  </div>
  <div class="small-container">
    <h2 class="title">Products</h2>
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