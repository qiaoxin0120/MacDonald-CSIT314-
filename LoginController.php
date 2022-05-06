<html>
  <head>
    <title>Food Ordering System</title>
    <!-- CSS StyleSheet -->
    <link rel = "stylesheet" type = "text/css" href ="stylesheet.css">
  </head>
  <body>
  </body>
</html>

<?php 
// Run when submit (Main Function)
if (isset($_POST['submit'])) {

  $sqlRole = $_POST['role'];
  $sqlUsername = $_POST['username'];
  $sqlPassword = $_POST['password'];

  // Create an instance
  $login = new LoginController();

  // Validate the login
  $result = $login -> validate($sqlRole, $sqlUsername, $sqlPassword);

  // Display the following pages
  $login -> redirect($result, $sqlRole);
}

class LoginController {
  // Declare variables
  private $message = "";
  private $sqlRole = "";
  private $sqlUsername = "";
  private $sqlPassword = "";

  // Validate Information with database
  public function validate($sqlRole, $sqlUsername, $sqlPassword) {
    include('Person_class.php');
    $query= new Person();
    return $query -> validation($sqlRole,$sqlUsername,$sqlPassword);
  }

  // Redirect Page
  public function redirect($result, $sqlRole) {
    if ($result== true) {
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
      echo nl2br ("<h1 style='position:fixed; top:50%; left: 50%; transform: translate(-50%, -50%); width: auto; color:red';>
                   Login Failed. \nRedirecting to Login Page...</h1>");
      header("refresh:2;url=login.html");
    }
  }
}
