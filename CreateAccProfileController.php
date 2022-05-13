<!DOCTYPE html>
<html lang = "eng">
    <head>
        <meta charset="utf-8"/>
        <title>Create Account Profile </title>
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
        $curRole = $_POST['role'];
        $curUsername = $_POST['username'];
        $curPassword = $_POST['password'];
        $newRealName = $_POST['realname'];
        $newPhone = $_POST['phone'];
        $newEmail = $_POST['email'];

        // Create an instance
        $newProfile = new CreateAccProfileController($curRole,$curUsername,$curPassword, $newRealName, $newPhone, $newEmail);

        // Check if role is selected
        $newProfile -> checkRoleField();
        
        // Check if the username and role and password already in database
        $isExist = $newProfile -> checkExist();

        // if username and role is exist in data base, continue to create acc prof
        if($isExist)
        {
            $profileResult = $newProfile -> buildProfile();

            if($profileResult)
            {
                echo nl2br ("<script>alert('New Account Profile Created Successful')</script>");  
                header("refresh:0.5;url= CreateAccProfileController.php");
            }
            else
            {  
                echo nl2br ("<script>alert('Some problem occured. Account Not Created!')</script>"); 
                header("refresh:20;url= CreateAccProfileController.php"); 
            }
        }
        else
        {
            // display error, prompt user to create account page to create acc
            echo nl2br ("<script>alert('User Not Exist! Please create an account first!')</script>");
            header("refresh:0.5;url= CreateAccountController.php");

        }
    }
        class CreateAccProfileController
        {
            // Declare variables
            private $curRole;
            private $curUsername;
            private $curPassword;
            private $newRealname;
            private $newPhone;
            private $newEmail;

            public function __construct($curRole, $curUsername, $curPassword, $newRealname, $newPhone, $newEmail){
                $this->curRole = $curRole;
                $this->curUsername = $curUsername;
                $this->curPassword = $curPassword;
                $this->newRealname = $newRealname;
                $this->newPhone = $newPhone;
                $this->newEmail = $newEmail;

            }

            public function get_role(){
                return $this->curRole;
            }
            public function get_username(){
                return $this->curUsername;
            }

            public function get_password(){
                return $this->curPassword;
            }

            public function get_realName(){
                return $this->newRealname;
            }
            public function get_phone(){
                return $this->newPhone;
            }

            public function get_email(){
                return $this->newEmail;
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

            public function buildProfile()
            {
                $buildProfile = new Person();
                return $buildProfile -> createAccountProfile($this->get_role(), $this->get_username(), $this->get_password(),
                                                             $this->get_realName(), $this->get_phone(),$this->get_email());
            }
        }
    ?>
    <body style = "background-image: url(image/Background.png);">
        <div class="box" style = "height: 800px; margin-top: 100px; margin-bottom: auto;">
            <h1>Create Account Profile</h1>
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

                <p><strong>Full Name: </strong></p>
                <br>
                <input type = "text" name="realname" id = "realname" placeholder="Enter Real Name Here!" required="required">
                <br>

                <p><strong>Phone: </strong></p>
                <br>
                <input type = "text" name="phone" id = "phone" pattern = "[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Format: 111-222-3333" required="required">
                <br>

                <p><strong>Email: </strong></p>
                <br>
                <input type = "text" name="email" id = "email" pattern = ".+@.+.com" placeholder="Enter Email Here!" required="required">
                <br>

                <input type = "submit" value = "Save Profile" name="submit"><br><br>
                <a class = "backButton" href = "Restaurant_Administrator.html"> Back </a>
            </form>
        </div>
    </body>    
</html>
