<?php
  $username=$_POST['username'];
  $password=$_POST['password'];
  $conn = new mysqli('localhost','root','','test');
  if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
  }
  else{
    $stmt=$conn->prepare("insert into userlogin(username,password)values(?,?)"); 
    $stmt->bind_param("ss",$username,$password);
    $stmt->execute();
    echo "login sucessfully...";
    $stmt->close();
    $conn->close();
  }