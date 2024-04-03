<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0px;
            background:url(https://t4.ftcdn.net/jpg/02/05/81/37/360_F_205813782_VH4yHYhfE9cCFyEiqRobclWUefkiIffd.jpg);
            background-size:cover;
            background-repeat:no-repeat;
        }
        table, th, td {
  border: 1px solid;
  border-collapse: collapse;
  padding:20px;
  color:black;
  background-color:white;
  margin-top:80px;
  margin-left:400px;
  border-width:3px;
}
.table th{
    background-color:grey;
}
.header{
    background:black;
    margin: 0px;
    height: 60px;


}
        </style>
</head>
<body>
    <
    <header class="header">
    <h1 style="text-align:center; color:white;padding:10px;">REPORTS</h1>
</header>
    <div>
    <table class="table">
        <thead>
            <tr>
                <th>CUSTOMER NAME</th>
                <th>PAYMENT METHOD</th>
                <th>DATE</th>      
                <th>SLOT</th>
                <th>AMOUNT</th>
                <th>MOBILE NO</th>   
</tr>
</thead>
<tbody>
    <?php 
    $con = mysqli_connect("localhost","root","","ecoreg");
    global $con;
    $query="select * from orders";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $name=$row ['name'];
        $email=$row['pay_mode'];
        $phno=$row['date'];
        $message=$row['slot'];
        $amount=$row['amount'];
        $number=$row['mobile'];
        echo"<tr>
        <td>$name</td>
        <td>$email</td>
        <td>$phno</td>
        <td>$message</td>
        <td>$amount</td/>
        <td>$number</td>
        
            </tr>";

    }

    ?>
</tbody>
</table>
</body>
</html>