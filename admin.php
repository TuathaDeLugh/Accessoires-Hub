<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/extra.css">
    <link rel="stylesheet" href="./public/css/style.css">
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
    <hr>
    <a href="insert.php"><button class="btn info">Create new</button></a>
    <table>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>price</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        <?php
        include('database/db.php');
         $q = "select * from products";

         $query = mysqli_query($con, $q);
         $i = 0;
         while ($result = mysqli_fetch_array($query)) {
             $i++; ?>
             <tr>
                 <td>
                     <?php echo $result['id']; ?>
                 </td>
                 <td>
                     <?php echo $result['title']; ?>
                 </td>
                 <td>
                     <?php echo $result['price']; ?>
                 </td>
                 <td>
                     <button class="btn success"><a href="update.php?id=<?php echo $result['id']?>">UPDATE</a></button>
                 </td>
                 <td>
                     <button class="btn danger"><a href="logic/update.php?deletepro=<?php echo $result['id']?>">DELETE</a></button>
                 </td>
         </tr>
         <?php
        }
        ?>
    </table>
</div>
<?php 
          include('components/footer.php');
          
          ?>
</body>
</html>