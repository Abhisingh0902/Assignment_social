<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $emailmobile = $_POST['emailmobile'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    //Database connection 
    // $conn =new mysqli('localhost','root','Abhi@9852','website');
    // if($conn->connect_error){
    //     die('Connection Failed : '.$conn->connect_error);
    // }
    $conn = mysqli_connect("localhost", "root", " ", "website");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

else{
        $stmt=$conn->prepare("insert into sign_up(firstname,lastname,gender,emailmobile,password,dob) values(?,?,?,?,?,?)");
        $stmt->bind_param("ssssss",$firstname,$lastname,$gender,$emailmobile,$password,$dob);
        $stmt->execute();
        echo "Sign Up Sucessfully...";
        $stmt->close();
        $conn->close();
    }
?>