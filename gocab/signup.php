<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "gocab";

// Connect to database
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process only if it's a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form data
    $name = isset($_POST["name"]) ? trim($_POST["name"]) : null;
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : null;
    $phone = isset($_POST["phone"]) ? trim($_POST["phone"]) : null;
    $password = isset($_POST["password"]) ? $_POST["password"] : null;
    $confirm_password = isset($_POST["confirm_password"]) ? $_POST["confirm_password"] : null;
    $role = "customer";

    // Validate required fields
    if (!$name || !$email || !$phone || !$password || !$confirm_password) {
        echo json_encode(["error" => "All fields are required"]);
        exit();
    }

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo json_encode(["error" => "Passwords do not match"]);
        exit();
    }

    // Check if email already exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode(["error" => "Email already exists"]);
        exit();
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Insert user into database
    $stmt = $conn->prepare("INSERT INTO users (name, email, phone, password_hash, role) VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $hashed_password, $role);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    }else {
        echo json_encode(["error" => "Failed to register user: " . $conn->error]);
    }

    $stmt->close();
}

// Close connection
$conn->close();
?>