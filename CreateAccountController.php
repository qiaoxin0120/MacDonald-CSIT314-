<!DOCTYPE html>
<html lang = "eng">
    <head>
        <meta charset="utf-8"/>
        <title>Create Account</title>
        <!-- CSS StyleSheet -->
        <link rel = "stylesheet" type = "text/css" href ="login.css">

        <style>
            .backButton{
                background-color: green;
                border: none;
                color: white;
                padding: 5px 10px;
                text-align: center;
                display: inline-block;
                font-size: 18px;
                cursor: pointer;
                text-decoration:none;
                width: 250px;
                height: 30px;
                border-radius: 20px;
            }
        </style>
    </head>
    <?php
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])){
        $newRole = $_POST['role'];
        $newUsername = $_POST['username'];
        $newPassword = $_POST['password'];

        // Create an instance
        $newAccount = new CreateAccountController($newRole,$newUsername,$newPassword);

        // Check if role is selected
        $newAccount -> checkRoleField();
        
        // Check if the role, username, password already in database
        $isExist = $newAccount -> checkExist();

        // if username and role is exist in data base
        if($isExist)
        {
            // display error
            echo nl2br ("<script>alert('User Already Exist! Try Again!')</script>");
            header("refresh:0.5;url= CreateAccountController.php");
        }
        else
        {
            // Insert data into database (role, username, password)
            $accResult = $newAccount -> buildAccount();

            if($accResult)
            {
                echo nl2br ("<script>alert('New Account Created Successful')</script>");  
                header("refresh:0.5;url= CreateAccountController.php");
            }
            else
            {  
                echo nl2br ("<script>alert('Some problem occured. Account Not Created')</script>"); 
                header("refresh:0.5;url= CreateAccountController.php"); 
            }
        }
    }
        class CreateAccountController
        {
            // Declare variables
            private $newRole;
            private $newUsername;
            private $newPassword;

            public function __construct($newRole, $newUsername, $newPassword){
                $this->newRole = $newRole;
                $this->newUsername = $newUsername;
                $this->newPassword = $newPassword;
            }

            public function get_role(){
                return $this->newRole;
            }
            public function get_username(){
                return $this->newUsername;
            }

            public function get_password(){
                return $this->newPassword;
            }

            public function checkExist()
            {
                require('Person.php');
                $checkExist = new Person();
                return $checkExist -> isUserExist($this->get_role(), $this->get_username(), $this->get_password());
            }

            public function checkRoleField()
            {
                if ($this->get_role() == "-- Select the role --"){
                    echo nl2br ("<h1 style='position:fixed; top:50%; left: 50%; transform: translate(-50%, -50%); width: auto; color:red';>
                    Role is Required! \nRedirecting to Create Account Page...</h1>");
                    header("refresh:2;url= CreateAccountController.php"); 
                }
            }

            public function buildAccount()
            {
                $buildAccount = new Person();
                return $buildAccount -> createAccount($this->get_role(), $this->get_username(), $this->get_password());
            }
        }
    ?>
    <body style = "background-image: url(image/Background.png);">
        <div class="box" style = "height: 500px;">
            <h1>Create Account</h1>
            <form action = " " method = "post" id = "createAcc">
                <select name="role" id="roleSelection">
                    <option hidden>-- Select the role --</option>
                    <option value="Owner">Restaurant Owner</option>
                    <option value="Manager">Restaurant Manager</option>
                    <option value="Staff">Restaurant Staff</option>
                </select>
                
                <br><br>
                <p><strong>User Name: </strong></p>
                <br>
                <input type = "text" name="username" id = "username" placeholder ="Enter Username" required="required">
                <br>

                <p><strong>Password: </strong></p>
                <br>
                <input type = "password" name="password" id = "password" placeholder="Enter Password" required="required">
                <br>

                <input type = "submit" value = "Create Account" name="submit"><br><br>
                <a class = "backButton" href = "Restaurant_Administrator.html"> Back </a>
            </form>
        </div>
    </body>    
</html>
