<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$dbname = "gocab";

$conn = mysqli_connect($host, $user, $password, $dbname);


//check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

$userfound=false;
foreach ($result as $i){
    var_dump(password_verify($password, $i['password_hash']));
    if($i['email'] === $email && password_verify($password, $i['password_hash'])){
        $userfound=true;
        break;
    }
}
var_dump($userfound);

if($userfound){
    switch ($role) {
        case 'admin':
            header("Location: admin/index.php");
            break;
        case 'driver':
            header("Location: driver_dashboard.php");
            break;
        case 'customer':
            echo "hkgjgh";
            header("Location: customer/index.php");
            break;
    }
    exit();
} 
// header("Location: index.php");


// Close connection
$conn->close();
?>
