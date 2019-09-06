<?php

$conn=mysqli_connect('localhost','root','','sample');
$result=mysqli_query($conn,"DELETE FROM feed WHERE id='".$_GET['id']."' ");
header('location:comments.php');

?>