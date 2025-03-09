<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$dbname = "gocab";

$conn= new mysqli_connect($host,$user,$password,$dbname);

//check connection

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

//handle login request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : null;
    $inputPassword = isset($_POST["password"]) ? $_POST["password"] : null;
    $role = isset($_POST["role"]) ? $_POST["role"] : null;

    // Check if all fields are filled
    if (!$email || !$inputPassword || !$role) {
        echo json_encode(["error" => "All fields are required"]);
        exit();
    }
}

 // Check if user exists
 $stmt = $conn->prepare("SELECT id, name, email, phone, password_hash, role FROM users WHERE email = ? AND role = ?");
 $stmt->bind_param("ss", $email, $role);
 $stmt->execute();
 $result = $stmt->get_result();

 // Verify credentials
 if ($result->num_rows > 0) {
     $user = $result->fetch_assoc();

     // Verify password
     if (password_verify($inputPassword, $user["password_hash"])) {
         // Set session variables
         $_SESSION["user_id"] = $user["id"];
         $_SESSION["name"] = $user["name"];
         $_SESSION["email"] = $user["email"];
         $_SESSION["role"] = $user["role"];

         // Successful login
         echo json_encode(["success" => "Login successful", "redirect" => "dashboard.php"]);
     } else {
         echo json_encode(["error" => "Incorrect password"]);
     }
 } else {
     echo json_encode(["error" => "No account found with this email and role"]);
 }

 $stmt->close();


// Close connection
$conn->close();
?>
