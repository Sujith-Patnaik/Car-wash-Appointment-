<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin home</title>
    <style>
        body{
            background-image:url(https://4kwallpapers.com/images/walls/thumbs_2t/1426.jpg);
            background-size:cover;
            background-repeat:no repeat;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: top;
            flex-direction: column;          
            margin-top: 20px; /* Adjusted margin */
            height: 100vh;
            align-items: center; /* Center items horizontally */
        }

        .user, .reports {
            background: transparent;
            position: relative;
            padding: 10px 20px; /* Adjusted padding */
            display: flex;
            width: 150px; /* Reduced width */
            align-items: center;
            justify-content: center; /* Center text horizontally */
            font-size: 17px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            border: 1px solid rgb(255,0,0);
            border-radius: 25px;
            outline: none;
            overflow: hidden;
            color: rgb(255,0,0);
            transition: color 0.3s 0.1s ease-out;
            text-align: center;
            margin: 10px 0; /* Adjusted margin */
        }

        button span {
            margin: 0; /* Removed margin */
        }

        button::before {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            content: '';
            border-radius: 50%;
            display: block;
            width: 20em;
            height: 20em;
            left: -5em;
            text-align: center;
            transition: box-shadow 0.5s ease-out;
            z-index: -1;
        }

        button:hover {
            color: #fff;
            border: 1px solid rgb(255,0,0);
        }

        button:hover::before {
            box-shadow: inset 0 0 0 10em rgb(255, 0, 0);
        }
    </style>
</head>
<body>
    <div class="container">
        <button class="user" onclick="window.location.href='aduser.php';">
            <span>USERS</span>
        </button>
        <button class="reports" onclick="window.location.href='adcont.php';">
            <span>REPORTS</span>
        </button>
        <button class="reports" onclick="window.location.href='adorder.php';">
            <span>ORDERS</span>
        </button>
    </div>
</body>
</html>
