<?php
    include 'connection.php';
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
    
  <div class="m-4">
    <h1>View Data</h1>
    <a href="index.php"><button type="button" class="btn btn-primary">Insert Data</button></a>
    <br>
      <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Password</th>
          <th scope="col">Message</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if($con){
            $slct = "SELECT * FROM form_control";
            $selected = mysqli_query($con,$slct);
            if($selected){
                while($row=mysqli_fetch_assoc($selected)){
                    $id = $row['id'];
                    $name = $row['name'];
                    $pwd = $row['pwd'];
                    $txt = $row['txt'];
                    echo'
                    <tr>
                      <th scope="row">'.$id.'</th>
                      <td>'.$name.'</td>
                      <td>'.$pwd.'</td>
                      <td>'.$txt.'</td>
                      <td>
                      <a href="update.php?userid='.$id.'"><button type="button" class="btn btn-primary">Update Data</button></a>
                      <a href="delete.php?userid='.$id.'"><button type="button" class="btn btn-danger">Delete Data</button></a>
                   
                      </td>
                    </tr>
                    ';
                }
            }
        }
        ?>
      </tbody>
    </table>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>