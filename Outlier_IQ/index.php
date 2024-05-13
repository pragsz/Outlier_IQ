<?php
if((isset($_GET['status']))){
    if($_GET['status']==0)
    {
        echo"
        <script>
        alert('INVALID CREDENTIALS')
        </script>
        ";
    }
}

if((isset($_POST['username'])) && (isset($_POST['password']))){
    if((($_POST['username'])=='admin@outlieriq.rf.gd')&& (($_POST['password'])=='admin@12345')){
        header("location:dashboard.php");
        session_start();
        $_SESSION['username']=$_POST['username'];
    }
    else{
        header("location:index.php?status=0");
    }
}

?>




<!doctype html>
<html lang="en">
  <head>
    <meta name="google-site-verification" content="szr-CxwOJvkJzqShv1EKP_RYS90SIT9IKSVC4jSDwMI" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Outlier IQ</title>
      <link rel="icon" type="image/x-icon" href="assets/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://bernii.github.io/gauge.js/dist/gauge.min.js"></script>
  </head>
  <body>
    <header>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
<center style="margin-top: 10%">
  <form method="post" action="index.php">
  <div>
        <div  class="card" style="width: 18rem;">
             <img src="assets/img/logo.png" class="card-img-top" alt="...">
            <div class="card-body">
             <input style="border-radius:0px" name="username" type="email" placeholder="EMAIL" class="form-control" >
             <input name="password" style="margin-top:4%;border-radius:0px" type="password" class="form-control" placeholder="PASSWORD">
             <input style="margin-top:4%;border-radius:0px" class="btn btn-success" type="submit" value="LOGIN">
            </div>
          </div>
    </div>
</form>

</center>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>