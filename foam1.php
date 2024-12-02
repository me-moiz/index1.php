

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
<div class="container my-4">

<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <a class="btn btn-primary" href="#" role="button">INSERT</a>
<button class="btn btn-danger" type="submit">SUBMIT</button>
<input class="btn btn-info" type="button" value="UPDATE">
<input class="btn btn-danger" type="submit" value="DELETE">
 <input class="btn btn-warning" type="reset" value="Search">
  <!-- <button type="submit" name="insert" class="btn btn-primary">Submit</button>  -->
</form>

</div>








<?php

if(isset($_POST['search']))
$servername = "localhost";
$username = "root";
$password = "";
$database = "prado";

$conn = new mysqli ($servername,$username,$password,$database);

if($conn->connect_error){
    die("connection lost" . $conn->connect_error );
}

// $email =$_REQUEST['email'];
// $password =$_REQUEST['password'];
// $insert = "INSERT INTO waqar (email,password) VALUES ('$email','$password')";

// if(mysqli_query($conn,$insert)){
//     echo "New record saved";
// }
// else{
//     echo "Error :" . mysqli_error($conn);
// }

// $update = "UPDATE waqar SET email=  'SYEDMOIZ@GMAIL.COM' WHERE id=2";

// if($conn->query($update)){
//   echo "Record update successfully";
// }else{
//   echo "Error updating record:". $conn->error;
// }

// $delete = "DELETE FROM waqar WHERE id=4";

// if(mysqli_query($conn, $delete)){
//   echo "Record deleted successfully";
// }else{
//   echo "Error deleting record: ". mysqli_error($conn);
// }
$email = $_POST['email'];
$password = $_POST['pass'];
$select = "SELECT * FROM vigo  WHERE email = '$email'";
$result = $conn->query($select);

if($result->num_rows > 0){

  while($row = $result->fetch_assoc()){
    echo
    "<table class='table table-striped table-danger'>
    <tr>
    <td>" . $row["email"] . "</td>
    <td>" . $row["password"] . "</td>
    </tr>
    </table>";
  }
}else{
  echo "0 result";
}


$conn->close();



?>




</body>
</html>