<link rel="stylesheet" href="./public/css/style.css">
<?php
include('database/db.php');


error_reporting(E_ERROR | E_PARSE);

$q = "select * from products";

$query = mysqli_query($con, $q);

while ($result = mysqli_fetch_array($query)) {
    $id = $result['id'];
?>
<div class="col-4">
                <img src="<?php echo $result['image'];?>" alt="" />
                <h4><?php echo $result['title'];?></h4>
                <p>₹<?php echo $result['price'];?></p>
            </div>

<?php
} ?>