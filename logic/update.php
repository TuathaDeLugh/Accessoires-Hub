<?php
include '../database/db.php';
if (isset($_POST['updatepro'])) {
    $id =$_POST['id'];
    $title = $_POST['title'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    $q = "UPDATE `products` SET `title`='$title' ,`image`='$image' ,`price`='$price'WHERE `id`=$id";
    $query = mysqli_query($con, $q);
    header('location:../admin.php');
}
if (isset($_GET['deletecu'])) {
    $q = "delete from contactus";
    $query = mysqli_query($con, $q);
    header('location:../contactus.php');
}
if (isset($_GET['deletepro'])) {
    $id=$_GET['deletepro'];
    $q = "delete from products where id=$id";
    $query = mysqli_query($con, $q);
    header('location:../admin.php');
}
?>