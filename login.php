<?php 
$Message = $ErrorUname = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $sqlRole = $_POST['role'];
  $sqlUsername = $_POST['username'];
  $sqlPassword = $_POST['password'];

  if ($ErrorUname!=""){
    $Message = "Login failed! Errors found";
  }
  else{
    include('conn.php');

    $query=mysqli_query($conn,"select * from users where role = '$sqlRole' && username ='$sqlUsername' && password ='$sqlPassword'");
    $num_rows=mysqli_num_rows($query);
    $row=mysqli_fetch_array($query);

    if ($num_rows>0){
      $Message = "Login Successful!";
    }
    else{
      $Message = "Login Failed! User not found";
    }

    
    if ($Message=="Login Successful!"){
      switch($sqlRole) {
        case "Owner": {
          header("Location:");
          break;
        }

        case "Admin": {
          header("Location:");
          break;
        }

        case "Manager": {
          header("Location:");
          break;
        }

        case "Staff": {
          header("Location:");
          break;
        }

        case "Customer": {
          header("Location:");
          break;
        }

        default:
          header("Location:login.html");
      }
    }
    else {
      echo $Message;
      header("refresh:3;url=login.html");
    }
  }
}
?>