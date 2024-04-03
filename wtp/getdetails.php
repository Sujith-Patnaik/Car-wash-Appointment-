<?php
// Establish database connection
$servername = "localhost"; // Change this to your database server name
$username = "your_username"; // Change this to your database username
$password = "your_password"; // Change this to your database password
$database = "ecoreg"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user_id from GET parameters
$user_id = $_GET['user_id'];

// Prepare SQL statement to fetch user details
$stmt = $conn->prepare("SELECT name, email, phone FROM ecouser WHERE user_id = ?");
$stmt->bind_param("i", $user_id); // 'i' indicates integer type for user_id

// Execute SQL statement
$stmt->execute();

// Get result
$result = $stmt->get_result();

// Initialize array to store user details
$userDetails = array();

// Check if user exists
if ($result->num_rows > 0) {
    // Fetch user details
    $row = $result->fetch_assoc();
    $userDetails['name'] = $row['name'];
    $userDetails['email'] = $row['email'];
    $userDetails['phone'] = $row['phone'];
    $userDetails['success'] = true;
} else {
    // User not found
    $userDetails['success'] = false;
    $userDetails['message'] = "User not found";
}

// Output JSON response
header('Content-Type: application/json');
echo json_encode($userDetails);

// Close statement and connection
$stmt->close();
$conn->close();
?>
