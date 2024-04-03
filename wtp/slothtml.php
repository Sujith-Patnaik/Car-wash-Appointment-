<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>slot booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f3f3;
        }

        .lo-con {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }

        .l-con {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px;
            max-width: 600px;
        }

        .cell {
            width: 100px;
            height: 100px;
            background-color: green;
            margin-bottom: 10px; /* Add space between timings */
            border-radius: 5px; /* Add border radius */
            display: flex;
            justify-content: center;
            align-items: center;
            font-size:10px;
        }

        .cell:hover {
            background-color: red; /* Darker green color */
        }

        .cell.booked {
            background-color: #dc3545; /* Red color */
            cursor: not-allowed;
        }

        .cell.success {
            background-color: #ffc107; /* Yellow color */
        }

        .form-container {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-input {
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 200px;
            box-sizing: border-box;
        }

        .form-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-button:hover {
            background-color: #0056b3;
        }

        .message {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            z-index: 999;
            display: none;
        }

        /* CSS for changing color on click */
        .cell.clicked {
            background-color: red;
        }
    </style>
</head>

<body>
    <div class="lo-con">
        <div class="l-con">
            <div class="cell" id="1">8:00 AM - 9:00 AM</div>
            <div class="cell" id="2">9:00 AM - 10:00 AM</div>
            <div class="cell" id="3">10:00 AM - 11:00 AM</div>
            <div class="cell" id="4">11:00 AM - 12:00 PM</div>
            <div class="cell" id="5">12:00 PM - 1:00 PM</div>
            <div class="cell" id="6">1:00 PM - 2:00 PM</div>
            <div class="cell" id="7">2:00 PM - 3:00 PM</div>
            <div class="cell" id="8">3:00 PM - 4:00 PM</div>
            <div class="cell" id="9">4:00 PM - 5:00 PM</div>
            <div class="cell" id="10">5:00 PM - 6:00 PM</div>
        </div>

        <div class="form-container">
            <form action="payscript.php" method="post">
                <input type="number" id="amount" name="amount" placeholder="Enter Amount" class="form-input" required>
                <button type="submit" class="form-button">Submit</button>
            </form>
        </div>
    </div>

    <div class="message" id="message"></div>   

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let cells = document.querySelectorAll('.cell');
            cells.forEach(cell => {
                cell.addEventListener('click', e => {
                    let cellValue = e.target.id;
                    let xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            window.location.reload();
                            alert(this.responseText);
                        }
                    };
                    xhttp.open('POST', 'laundry.php', true);
                    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhttp.send('cellValue=' + encodeURIComponent(cellValue));

                    // Add class to change color
                    e.target.classList.add('clicked');
                });
            });
        });
    </script>
</body>

</html>
