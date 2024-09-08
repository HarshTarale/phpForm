
<?php

                                                         //  SQL Connection
$dbname = "mysql:host=localhost:3307;dbname=college;";
$user_name = "root";
$password = null ; 

$conn =  new PDO($dbname, $user_name ,$password);




                                          //  User information
if($_POST['fullName']){
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pin = $_POST['pin'];
    $state =  $_POST['state'];
    $qualification =$_POST['qualification'];
    $specialization = $_POST['specialization'];
    $password = $_POST['password'];

    }else{
       echo "not";
    };



    

    try{                                          //SQl Query RUN

        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = $conn->query("INSERT INTO register(fullName,email,number,gender,age,address,city,pin,state,qualification,specialization,pass) VALUES('$fullName','$email',$number,'$gender','$age','$address','$city',$pin,'$state','$qualification','$specialization','$password');");
      //   print_r($sql);
        echo "intered";


   }catch(PDOException $e){                          //SQL ERROR Handling
          echo "<div id='error' style=' margin:10% 10% 0% 10% ; padding: 20px; border: solid 10px red; border-radius: 10px;' >" .$e->getMessage()."</div>";

   };

?>





