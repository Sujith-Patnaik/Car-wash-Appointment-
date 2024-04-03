<?php
session_start();
$pack = $_GET['pack'];
$price = $_GET['price'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview Page</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background:url(https://png.pngtree.com/thumb_back/fh260/back_our/20200630/ourmid/pngtree-ten-yuan-car-wash-image_340833.jpg) ;
            margin: 0;
            background-size:cover;
            background-repeat:no-repeat;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-top: 0;
            color: #333;
        }
        .customer-info {
            margin-bottom: 20px;
        }
        .customer-info label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .customer-info span {
            display: block;
            margin-top: 5px;
            color: #333;
        }
        .payment-methods {
            margin-bottom: 20px;
        }
        .payment-methods label {
            display: inline-block;
            margin-right: 15px;
            color: #555;
        }
        .payment-methods input[type="radio"] {
            display: none;
        }
        .payment-methods input[type="radio"] + label {
            background-color: #f0f0f0;
            padding: 8px 20px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .payment-methods input[type="radio"]:checked + label {
            background-color: #007bff;
            color: #fff;
        }
        .payment-details {
            margin-top: 20px;
        }
        .payment-details label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .slot-select {
            margin-bottom: 20px;
        }
        .slot-select label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .slot-select input[type="date"],
        .slot-select select {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            color: #333;
            font-size: 16px;
            margin-top: 5px;
            outline: none;
        }
        .slot-select select {
            appearance: none;
            background-color: #f0f0f0;
            background-image: url('data:image/svg+xml;utf8,<svg fill="%23555" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>');
            background-repeat: no-repeat;
            background-position: calc(100% - 10px) center;
            padding-right: 30px;
            cursor: pointer;
        }
        .slot-select select::-ms-expand {
            display: none;
        }
        .hidden {
            display: none;
        }
        .book-slot-btn {
            display: block;
            width: 100%;
            padding: 10px 0;
            text-align: center;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .book-slot-btn:hover {
            background-color: #0056b3;
        }
        .subtotal {
            margin-top: 20px;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 8px;
        }
        .subtotal label {
            font-weight: bold;
            color: #555;
        }
        .subtotal span {
            display: block;
            margin-top: 5px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Preview Page</h2>

        <?php
        // Database connection
        $conn = mysqli_connect("localhost", "root", "", "ecoreg");
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

     
        $sql = "SELECT name FROM ecouser where email='$email'"; 
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $customer_name = $row['name'];

       
        mysqli_close($conn);
        ?>

        <form id="bookingForm" action="" method="post">
            <div class="customer-info">
                <label>Customer Name:</label>
                <span><?php echo $customer_name; ?></span>
                <input type="hidden" name="customer_name" value="<?php echo $customer_name; ?>">
            </div>

            <div class="customer-info">
                <label>Selected Package:</label>
                <span><?php echo $pack;?></span>
                <input type="hidden" name="package" value="<?php echo $pack; ?>">
            </div>

            <div class="payment-methods">
                <input type="radio" id="upi" name="payment_method" value="upi">
                <label for="upi">UPI</label>
                
                <input type="radio" id="card" name="payment_method" value="card">
                <label for="card">Card</label>
            </div>

            <div id="qr-code" class="payment-details hidden">
                <!-- Display QR code here -->
                <img src="upi_qr_code.png" alt="UPI QR Code">
            </div>

            <div id="card-details" class="payment-details hidden">
                <label for="card_number">Card Number:</label>
                <input type="text" id="card_number" name="card_number">
               
            </div>



            <!-- <div class="slot-select">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date">
            </div>

            <div class="slot-select">
                <label for="slot">Slot:</label>
                <select id="slot" name="slot">
                    <option >9:00 to 9:30</option>
                    <option >9:30 t0 10:00</option>
                    <option >10:00 to 10:30</option>
                    <option >10:30 t0 11:00</option>
                    <option >11:00 to 11:30</option>
                    <option>11:30 t0 12:00</option>



                </select>
            </div> -->

            <div class="subtotal">
                <label for="subtotal">Subtotal:</label>
                <span id="subtotal" name="subtotal"><?php echo $price?></span>
                <input type="hidden" id="amount" name="amount" value="<?php echo $price; ?>">
            </div>

            <div class="amount">
                <label><b>Mobile Number:</b></label>
                <input type="number" name="mobile" id="mobile">
            </div>
    </br>
            <button type="submit" class="book-slot-btn"><a href="slothtml.php">Book Slot</a></button>
        </form>
    </div>
</body>
</html>
