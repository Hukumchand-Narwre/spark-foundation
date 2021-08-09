
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "banking system";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql =  "SELECT Balance FROM coustomers where Name = '$_POST[sender]'";
    //echo $sql;
    $result = $conn->query($sql);
    $r = $result->fetch_assoc();
    //echo $row['Balance'];
   // echo $_POST['amount'];
    
    $sender =  ($r['Balance'] - $_POST['amount'] );
    // echo $sender;

    $updatequery = "UPDATE `coustomers` SET Balance = $sender where Name = '$_POST[sender]'";
    $conn->query($updatequery);

    //receiver
    $sql1 =  "SELECT Balance FROM coustomers where Name = '$_POST[name]'";
    //echo $sql1;
    $result1 = $conn->query($sql1);
    $row = $result1->fetch_assoc();
   // echo "$row[Balance]";
    
    
    $receiver =  ($row['Balance'] + $_POST['amount'] );
   // echo $receiver;

    $updatequery1 = "UPDATE `coustomers` SET Balance = $receiver where Name = '$_POST[name]'";
    // echo "<script>alert('Money transferd successfully')</script>";
    $conn->query($updatequery1);

 

$conn->close();
?> 


</body>
</html>

