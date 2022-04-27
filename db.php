<?php
    $servername='localhost';
    $username='root';
    $password='Saikrishna@2001';
    $dbname = "myDB";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysqli_connect_error());
        }
?>