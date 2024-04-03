<?php
if(isset($_POST['submit'])) {
    // Validate and sanitize user inputs
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $car = isset($_POST['car']) ? $_POST['car'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';

    // Check if required fields are not empty
    if(empty($name) || empty($email) || empty($car) || empty($address)) {
        echo "All fields are required.";
        exit;
    }

    // Database connection
    $conn = mysqli_connect("localhost", "root", "", "ecoreg");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Prepared statement
    $sql = "INSERT INTO ecouser (name, email, car, address) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $car, $address);

    // Execute the statement
    if(mysqli_stmt_execute($stmt)){
        echo "<script>alert('Welcome to ecosplash');</script>";
        echo "<script>window.open('page1.php', '_self');</script>";
    } else{
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }

    // Close statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
