<?php
$name = $_POST['name'];
$emaill = $_POST['emaill'];
$date = $_POST['date'];
$padd = $_POST['padd'];
$dadd = $_POST['dadd'];
$number = $_POST['number'];
$type = $_POST['type'];

$conn = new mysqli('localhost','root','','project');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
     $stmt = $conn->prepare("insert into pickup(name, emaill, date, padd, dadd, number, type)
     values(?,?,?,?,?,?,?)") ;
     $stmt->bind_param("sssssis",$name, $emaill, $date, $padd, $dadd, $number, $type);
     
     $stmt->execute();

     if($type == "Within City" ){ echo "<h2>Thankyou $name for doing business with us!</h2>";
        echo "Your pickup on $date is confirmed<br>";
        echo "The cost of your shipping will be Rs3500<br><br><br> ";
        echo "CAUSE EVERY DELIVERY MATTERS";}

     if($type == "Within State" ){echo "<h2>Thankyou $name for doing business with us!</h2>";
        echo "Your pickup on $date is confirmed<br>";
        echo "The cost of your shipping will be Rs5000<br><br><br>";
        echo "CAUSE EVERY DELIVERY MATTERS"; }
        
     if($type == "Inter-State" ){ echo "<h2>Thankyou $name for doing business with us!</h2>";
        echo "Your pickup on $date is confirmed<br>";
        echo "The cost of your shipping will be Rs7500 <br><br><br>"; 
        echo "CAUSE EVERY DELIVERY MATTERS";}
    
      
     $stmt->close();
     $conn->close();

}
?>