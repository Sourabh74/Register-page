<?php
if(isset($_POST['name'])){


  $server = "localhost";
  $username = "root";
  $password ="";
  $dbname ="register";
  $con = mysqli_connect($server, $username, $password,$dbname);

  if(!$con){
      die("connection to this database failed due to" . 
      mysqli_connect_error());
  }
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
 
 $sql = "INSERT INTO `info` (`name`, `email`, `phone`, `address`) VALUES ('$name', '$email', '$phone', '$address'); ";
 
 if($con->query($sql)== true)
 {
   echo "succefully sing up";
 }
 else{
   echo "Error: $sql<br> $con->error";
 }
 $con->close();
}
?>

