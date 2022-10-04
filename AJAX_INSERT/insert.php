<?php
$server="localhost";
$username="root";
$password="";
$database="ajax_db";

$conn=mysqli_connect($server,$username,$password,$database);
extract($_POST);
if(isset($_POST['submit'])){
    $sql="insert into ajaxinsert (username,password)value('$username','$password')";
    $result=mysqli_query($conn,$sql);
}
?>