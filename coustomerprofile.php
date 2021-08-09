<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="coustomerprofile.css">
    <title>Hello, world!</title>
  </head>
  <body>
    
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="sendmoney.css">
</head>
<body style="background-color: black;">
    <!-- <form action="successful.php" method="post">
       Name: <input type="text" name="name"><br>
       Balance: <input type="number" name="Balance" id="">
       <input type="submit">
       
    </form> -->

    
    <div  class="container login-box" >
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <span class="anchor" id="formLogin"></span> 
                            <!-- form card login -->
                <div class="card card-outline-secondary">
                    <div class="card-header">
                        <h3 class="mb-0">To see profile</h3>
                    </div>
                    <div class="card-body">
                        <form action="profile.php" method="post" autocomplete="off" class="form" id="formLogin" name="formLogin" role="form">
                            <div class="form-group">
                                <label for="uname1">Name</label> 
                                <input class="form-control" id="uname1" name="sender"  type="text">
                            </div>
                            <div class="form-group">
                                <label>Email</label> 
                                <input autocomplete="new-password" class="form-control" id="name" name="name" required="" type="text">
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

   
   
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

"