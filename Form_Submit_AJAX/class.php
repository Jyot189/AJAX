<?php
include_once('dbconnect.php');
$nameid=$_POST['datapost'];
echo $nameid;
$query="select * from classes where mid='$nameid'";
$result=mysqli_query($conn,$query);

while ($row=mysqli_fetch_array($result)){
    ?>
<option><?php echo $row['class'];?></option>
<?php }
?>