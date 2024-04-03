<?php
@include 'connect.php';

$currentDate = date("Y-m-d");
$sql = 'SELECT * FROM date1';
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_assoc($result);
if ($rows['date'] != $currentDate) {
    $sql = 'UPDATE laundry SET occup = 0';
    $result = mysqli_query($conn, $sql);
    $sql = "UPDATE date1 SET date = '$currentDate'";
    $result = mysqli_query($conn, $sql);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['cellValue'])) {
        $res = $_POST['cellValue'];
        $sql = "SELECT * FROM laundry WHERE sno = '$res'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row['occup'] == 1) {
                echo "Slot already Booked!!";
            } else {
                echo "Slot booking Successful!!";
                $sql = "UPDATE laundry SET occup = 1 WHERE sno = '$res'";
                $result = mysqli_query($conn, $sql);
            }
        }
        exit();
    } else {
        echo "No cell value received"; // Provide a meaningful error message
        exit();
    }
}
?>
