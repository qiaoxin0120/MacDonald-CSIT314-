<?php 
// Run when submit (Main Function)
if (isset($_POST['submit'])) {
  $main = new LoginController();
  $main->redirect();
}

class LoginController {
  // Declare variables
  private $message = "";
  private $sqlRole = "";
  private $sqlUsername = "";
  private $sqlPassword = "";

  // Validate Information with database
  public function validate($sqlRole, $sqlUsername, $sqlPassword) {
    include('conn.php');

    $query=mysqli_query($conn,"select * from users where role = '$sqlRole' && username ='$sqlUsername' && password ='$sqlPassword' && isActivate ='Y'");
    $num_rows=mysqli_num_rows($query);
    $row=mysqli_fetch_array($query);

    // If there is valid data
    if ($num_rows > 0) {
      return true;
    }
    else{
      return false;
    }
  }

  // Redirect Page
  public function redirect() {
    $sqlRole = $_POST['role'];
    $sqlUsername = $_POST['username'];
    $sqlPassword = $_POST['password'];

    // Call validate function
    if ($this->validate($sqlRole, $sqlUsername, $sqlPassword) == true) {
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
      echo nl2br ("<h2>Login Failed. \nRedirecting to Login Page...</h2>");
      header("refresh:2;url=login.html");
    }
  }
}
?>