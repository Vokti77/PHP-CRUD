<?php
include ('connect.php');

$id = $_GET['updateid'];
$sql = "SELECT * FROM crud WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $pass = $_POST['pass'];

    $sql = "UPDATE crud SET id=$id, name='$name', email='$email',mobile='$mobile',
    password='$pass' WHERE id= $id ";
    $result = mysqli_query($conn,$sql);
    
    if($result){
        header('location:display.php');
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
        <form method="POST">
        <div class="form-group">
        <label>Name</label>
            <input type="text" class="form-control" name="name" 
            placeholder="Enter Your Name" autocomplete="off" value="<?php echo $name; ?>">
        </div> 
        <div class="form-group">
        <label>Email</label>
            <input type="text" class="form-control" name="email"
             placeholder="Enter Your Email" autocomplete="off" value="<?php echo $email; ?>"> 
        </div> 
        <div class="form-group">
        <label>Mobile</label>
            <input type="text" class="form-control" name="mobile"
             placeholder="Enter Your Mobile" autocomplete="off" value="<?php echo $mobile; ?>">
        </div> 
        <div class="form-group">
        <label>Password</label>
            <input type="password" class="form-control" name="pass" 
            placeholder="Enter Your Password" value="<?php echo $pass; ?>">
        </div>   <br>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
  </body>
</html>