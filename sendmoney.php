<?php
    if (isset($_POST['name'])) {
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
    echo "<script>alert('Money transferd successfully')</script>";
    $conn->query($updatequery1);

 

  $conn->close();
    }
?> 


<?php include("nav.php"); ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sendmoney</title>
    <link rel="shortcut icon" href="data:image/webp;base64,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" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="sendmoney.css">
</head>
<body>
    <!-- <form action="successful.php" method="post">
       Name: <input type="text" name="name"><br>
       Balance: <input type="number" name="Balance" id="">
       <input type="submit">
       
    </form> -->

    
    <div  class="container login-box">
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <span class="anchor" id="formLogin"></span> 
                            <!-- form card login -->
                <div class="card card-outline-secondary">
                    <div class="card-header">
                        <h3 class="mb-0">Online Money Transfer</h3>
                    </div>
                    <div class="card-body">
                        <form action="sendmoney.php" method="post" autocomplete="off" class="form" id="formLogin" name="formLogin" role="form">
                            <div class="form-group">
                                <label for="uname1">sender</label> 
                                <input class="form-control" id="uname1" name="sender"  type="text">
                            </div>
                            <div class="form-group">
                                <label>Benificary name</label> 
                                <input autocomplete="new-password" class="form-control" id="name" name="name" required="" type="text">
                            </div>
                            <div class="form-group">
                                <label>Amount</label> 
                                <input autocomplete="new-password" class="form-control" id="Balance" name="amount" required="" type="text">
                            </div>
                            <div class="form-check small">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox"> 
                                  <span>Remember me on this computer</span>
                                </label>
                            </div>
                            <button class="btn btn-success btn-lg float-right" type="submit">Send</button>
                        </form>
                    </div><!--/card-block-->
                </div><!-- /form card login -->
            </div>
       </div>
    </div>
   
</body>
</html>







