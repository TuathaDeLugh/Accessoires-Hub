<?php
include '../database/db.php';
if (isset($_POST['newpro'])) {
    $title = $_POST['title'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    $q = "insert into `products` (`id`,`title`,`image`,`price`) values(NULL,'$title','$image','$price')";
    $query = mysqli_query($con, $q);
    header('location:../admin.php');
}
if (isset($_POST['contactus'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $subject = $_POST['subject'];
    $q = "insert into `contactus`  values(NULL,'$firstname','$lastname','$subject')";
    $query = mysqli_query($con, $q);
    header('location:../index.php');
}


?>