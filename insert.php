<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $pfame = $_POST['rpass'];
     $plname = $_POST['pass'];
     $choice = $_POST['flexRadioDefault'];
     $amount = 0 ;
     if(!strcmp($choice,"Basic Grooming")){
         $amount = $amount + 2000;
     }
     elseif(!strcmp($choice,"Partial Groom")){
         $amount = $amount + 1500;
     }
     elseif(!strcmp($choice,"Full-service")){
         $amount = $amount + 3000;
     }
     elseif(!strcmp($choice,"Same as before")){
         $amount = $amount + 4000;
     }
     elseif(!strcmp($choice,"Other")){
         $amount = $amount + 5000;
     }

     $sql = "INSERT INTO users (fname,lname,phone,email,pfame,plname)
     VALUES ('$fname','$lname','$phone','$email','$pfame','$plname')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        echo "\n$choice\n";
        echo "Amount is : $amount \n";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>