<?php
include 'connection.php';
$id = $_GET['userid'];
if($_SERVER["REQUEST_METHOD"]==="POST"){
  $name = $_POST['name'];
  $pwd = $_POST['pwd'];
  $txt = $_POST['txt'];
    $update = "UPDATE `form_control` SET `name`='$name', `pwd`='$pwd', `txt`='$txt' WHERE `id`='$id'";
    $updated = mysqli_query($con, $update);

  if($updated){
    echo "
    <script>
    alert('Data Updated!');
    </script>
    ";
    header("location:view.php");
  }
  else{
    echo "
    <script>
    alert('Data Could Not be Updated!');
    </script>
    ";
  }
 
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>


<form method="post">
    <div style="margin:5%">
        <h1>UPDATE CONTACT US</h1>
        <a href="view.php"><button type="button" class="btn btn-primary">View Data</button></a>
        <a href="index.php"><button type="button" class="btn btn-primary">Insert Data</button></a>
       
        <br><br>
        <label for="NameInput">Enter your name</label>
        <input type="text" name="name" id="exampleInputEmail1" class="form-control">
        <br>
        <label for="PasswordInput">Enter your Password</label>
        <input type="text" name="pwd" id="exampleInputEmail1" class="form-control">
        <br>
        Enter Detail:
        <textarea class="form-control" name="txt" id="" cols="30" rows="10"></textarea>
        <br>
        <input class="form-control bg-primary"  type="submit" value="Update" style="color:white">
    </div>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>