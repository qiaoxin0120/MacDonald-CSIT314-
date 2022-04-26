<?php 

if (isset($_POST['submit'])) {
  redirect();
}

function validate() {
  // Declare variables
  $Message = "";
  $ErrorUname = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receive Data
    $sqlRole = $_POST['role'];
    $sqlUsername = $_POST['username'];
    $sqlPassword = $_POST['password'];

    // If Error occurred
    if ($ErrorUname!=""){
      $Message = "Login failed! Errors found";
    }
    else{
      // Connect Database
      include('conn.php');

      $query=mysqli_query($conn,"select * from users where role = '$sqlRole' && username ='$sqlUsername' && password ='$sqlPassword'");
      $num_rows=mysqli_num_rows($query);
      $row=mysqli_fetch_array($query);

      // If there is valid data
      if ($num_rows > 0){
        return true;
      }
      else{
        return false;
      }
    }
  }
}
    
function redirect() {
  $sqlRole = $_POST['role'];

  if (validate() == true) {
    switch($sqlRole) {
      case "Owner": {
        header("Location:Owner.html");
        break;
      }
      case "Admin": {
        header("Location:Administrator.html");
        break;
      }
      case "Manager": {
        header("Location:Restaurant_Manager.html");
        break;
      }
      case "Staff": {
        header("Location:Restaurant_Staff.html");
        break;
      }
      case "Customer": {
        header("Location:Customer.html");
        break;
      }
      default:
        header("Location:login.html");
    }
  }
  else {
    echo nl2br ("<h1>Login Failed. \nRedirecting to Login Page...</h2>");
    header("refresh:2;url=login.html");
  }
}
?>