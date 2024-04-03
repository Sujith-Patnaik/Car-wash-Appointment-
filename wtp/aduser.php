<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
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
.h1{
    background:black;

}
        </style>
</head>
<body>
    <
    <header class="h1">
    <h1 style="text-align:center; color:white;padding:10px;">ECOSPLASH CUSTOMER DETAILS</h1>
</header>
    <div>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Car Type</th>
                <th>Address</th>        
</tr>
</thead>
<tbody>
    <?php 
    $con = mysqli_connect("localhost","root","","ecoreg");
    global $con;
    $query="select * from ecouser";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $name=$row ['name'];
        $email=$row['email'];
        $car=$row['car'];
        $address=$row['address'];
        echo"<tr>
        <td>$name</td>
        <td>$email</td>
        <td>$car</td>
        <td>$address</td>
        
            </tr>";

    }

    ?>
</tbody>
</table>
</body>
</html>