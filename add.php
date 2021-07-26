<?php
include 'connector.php';

$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];

mysqli_query($connector,"insert into tbl_data values('','$name','$email','$comment')");

header("location:index.php");

?>