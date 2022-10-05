<?php
include_once('dbconnect.php');

$query = "SELECT * FROM ajaxinsert";
$result=mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['username']?></td>
            <td><?php echo $row['password']?></td>
        </tr>
    <?php }
}
?>