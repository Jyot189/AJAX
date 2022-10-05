<?php
include_once('dbconnect.php');
extract($_POST);
if(isset($_POST['submit'])){
    $sql="insert into ajaxinsert (username,password)value('$username','$password')";
    $result=mysqli_query($conn,$sql);
}
?>