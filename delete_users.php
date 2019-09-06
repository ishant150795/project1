<?php

$conn=mysqli_connect('localhost','root','','sample');
$result=mysqli_query($conn,"DELETE FROM signup WHERE id='".$_GET['id']."' ");

header('location:users.php');

?>