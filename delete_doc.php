<?php

$conn=mysqli_connect('localhost','root','','sample');
$result=mysqli_query($conn,"DELETE FROM img WHERE id='".$_GET['id']."' ");

header('location:view_doc.php');

?>