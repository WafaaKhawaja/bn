<?php
$FullName = $_POST[ 'FullName' ];
$username = $_POST[ 'username' ];
$email = $_POST[ 'email' ];
$phoneNumber = $_POST[ 'phoneNumber' ];
$password = $_POST[ 'password' ];
$gender = $_POST[ 'gender'];

//DATA BASE CONNECTION

$conn = new mysqli('localhost','root','','test_1');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into t_1(FullName,username,email,phoneNumber,password,gender) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $FullName, $username, $email, $phoneNumber, $password, $gender);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
?>




