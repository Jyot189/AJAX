<?php
$data=$_GET['datavalue'];
$a=array('Pune','Mumbai');
$b=array('Gorakhpur','Luknow');
$c=array('Patna','Kishanganj');

if($data=="Maharashtra"){
    foreach($a as $a_value){
        echo"<option> $a_value </option>";
    }
}

if($data=="UP"){
    foreach($b as $b_value){
        echo"<option> $b_value </option>";
    }
}

if($data=="Bihar"){
    foreach($c as $c_value){
        echo"<option> $c_value </option>";
    }
}
?>
