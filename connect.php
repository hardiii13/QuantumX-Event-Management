<?php 
    $firstName=$_POST['fullName'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $location=$_POST['location'];
    $pin=$_POST['pin'];
    $birthday=$_POST['birthday'];
    $time=$_POST['time'];
    $duration=$_POST['duration'];
    $type=$_POST['type'];

    //Database Connection
    $host ="localhost";
    $dbname="event";
    $username = "root";
    $password ="";
    $conn =mysqli('localhost','root','','event');
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration (fullName,phone,email,location,pin,birthday,time,duration,type");
        values('?,?,?,?,?,?,?,?,?');
        $stmt->bind_param(" ssssiiiis",$fullName,$phone,$email,$location,$pin,$birthday,$time,$duration,$type);
        $stmt->execute();
        echo "registration successfully..";
        $stmt->close();
        $conn->close();
    }
?>  