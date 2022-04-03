<?php
include ('connect.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO crud(name, email, mobile,password)
    VALUES('$name','$email','$mobile','$pass')";
    $result = mysqli_query($conn,$sql);
    
    if($result){
        header('location:display.php');
        #echo("Data Insert Successfully.");
    }
    else{
        die("Connection failed: " . $conn->connect_error);
    }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Crud Operation</title>
  </head>
  <body>
    <div class ="conteiner my-5">
        <form method="POST" action="user.php">
        <div class="form-group">
        <label>Name</label>
            <input type="text" class="form-control" name="name" 
            placeholder="Enter Your Name" autocomplete="off">
        </div> 
        <div class="form-group">
        <label>Email</label>
            <input type="text" class="form-control" name="email"
             placeholder="Enter Your Email" autocomplete="off"> 
        </div> 
        <div class="form-group">
        <label>Mobile</label>
            <input type="text" class="form-control" name="mobile"
             placeholder="Enter Your Mobile" autocomplete="off">
        </div> 
        <div class="form-group">
        <label>Password</label>
            <input type="password" class="form-control" name="pass" 
            placeholder="Enter Your Password">
        </div>   <br>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
  </body>
</html>