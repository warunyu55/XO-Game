<?php 
include('connect.php');
$point = json_encode($_POST['point']);
$table = $_POST['table'];
$win = $_POST['win'][0];
$sql = "INSERT into tb_gameplay (r_point,r_table,r_win)VALUES('$point','$table','$win')";
$query = mysqli_query($con,$sql);
if($query){
    echo "<script>";
    echo "alert('Success');";
    echo "</script>";
}else{
    echo "<script>";
    echo "alert('Error');";
    echo "</script>";
}
?>