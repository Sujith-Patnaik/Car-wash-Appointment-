<?php
if(isset($_POST['submit'])) {
    $name = isset($_POST['NAME']) ? $_POST['NAME'] : '';
    $email = isset($_POST['EMAIL']) ? $_POST['EMAIL'] : '';
    $phno = isset($_POST['CONTACT_NO']) ? $_POST['CONTACT_NO'] : '';
    $message = isset($_POST['MESSAGE']) ? $_POST['MESSAGE'] : '';

    if(empty($name) || empty($email) || empty($phno) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    $conn = mysqli_connect("localhost", "root", "", "ecoreg");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Prepared statement
    $sql = "INSERT INTO contact (cname, cemail, phno, msg) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $phno, $message);

    if(mysqli_stmt_execute($stmt)){
        echo "<script>alert('Our team will contact you shortly');</script>";
        echo "<script>window.open('page1.php', '_self');</script>";
    } else{
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }

    // Close statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
