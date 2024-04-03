<?php
 session_start();
 $email = $_SESSION['email'];
 $conn = mysqli_connect("localhost", "root", "", "ecoreg");
 if($conn === false){
     die("ERROR: Could not connect. " . mysqli_connect_error());
 }
 $sql = "SELECT name FROM ecouser where email='$email'"; // Assuming only one customer for simplicity
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($result);
 $customer_name = $row['name'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $payment_method = $_POST['payment_method'];
    $date = $_POST['date'];
    $slot = $_POST['slot'];
    $amount=$_POST['amount'];
    $mobile=$_POST['mobile'];

    // Inserting data into the database
    $sql = "INSERT INTO orders ( name,pay_mode, date, slot,amount,mobile) VALUES ('$customer_name ','$payment_method', '$date', '$slot','$amount','$mobile')";
    if(mysqli_query($conn, $sql)){
        echo "Records added successfully.";
        header("Location: payscript.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
