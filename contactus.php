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
    <table>
        <tr>
            <th>id</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>subject <button class="btn danger"><a href="logic/update.php?deletecu=deletekar">DELETE ALL</a></button> </th>
        </tr>
        <?php
        include('database/db.php');
         $q = "select * from contactus";

         $query = mysqli_query($con, $q);
         $i = 0;
         while ($result = mysqli_fetch_array($query)) {
             $i++; ?>
             <tr>
                 <td>
                     <?php echo $result['id']; ?>
                 </td>
                 <td>
                     <?php echo $result['firstname']; ?>
                 </td>
                 <td>
                     <?php echo $result['lastname']; ?>
                 </td>
                 <td>
                 <?php echo $result['subject']; ?>
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