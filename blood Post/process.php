<?php
$connection = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($connection, "blood");

if(isset($_POST['create'])){
    $etname  = $_POST['etname'];
    $bgroup = $_POST['bgroup'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $ecity = $_POST['ecity'];
    $pcode = $_POST['pcode'];
    $query = "INSERT INTO donate (etname, bgroup, email, phone, ecity, pcode)
    VALUES ('$etname', '$bgroup', '$email', '$phone', '$ecity', '$pcode')";
    $result = mysqli_query($connection, $query);
   echo'Saved!';
} 
else{
    echo'No data';
}
?>