<?php

$name = $_POST['name'];
$emaill = $_POST['emaill'];
$date = $_POST['date'];
$padd = $_POST['padd'];
$dadd = $_POST['dadd'];
$number = $_POST['number'];

$conn = new mysqli('localhost','root','','project');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
     $stmt = $conn->prepare("insert into pickup(name, emaill, date, padd, dadd, number)
     values(?,?,?,?,?,?)") ;
     $stmt->bind_param("sssssi",$name, $emaill, $date, $padd, $dadd, $number );
     
     $stmt->execute();
     echo 
     $stmt->close();
     $conn->close();

     header('location:demo.php')

}
?>