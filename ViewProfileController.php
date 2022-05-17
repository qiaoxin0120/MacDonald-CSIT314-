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
            p{
                color: black;
                font-size: 20px;
            }
            h4{
                color: darkolivegreen;
                font-size: 18px;
                font-family: Georgia, serif;
            }
        </style>
    </head>
    
<?php
    class ViewAccController{

    // Declare variables
    private $id;

    public function __construct($id){
        $this->id = $id;
    }

    public function get_id(){
        return $this->id;
    }

    public function viewAccount()
    {
        include 'Person.php';
        $viewAccount = new Person();
        $viewAccount -> viewAccount($this->get_id());
        return $viewAccount-> viewAccount($this->get_id());
    }
}
?>
<body style = "background-image: url(image/Background.png);">
        <div class="box" style = "height: 820px;">
            <h2><u>VIEW ACCOUNT PROFILE</u></h2>
            <h4> You are currently viewing user with id <strong><?php $userid = $_GET['id']; echo $userid;?>.</strong></h4>

            <p><strong>Role: </strong></p>
            <h4><?php 
                     $id = $_GET['id'];
                     $acc = new ViewAccController($id);
                     $accDetail = $acc->viewAccount();
                     echo $accDetail['role'];?></h4><br>
            <p><strong>User Name: </strong></p>
            <h4><?php echo $accDetail['username'];?></h4><br>
            <p><strong>Password: </strong></p>
            <h4><?php echo $accDetail['password'];?></h4><br>
            <p><strong>Real name: </strong></p>
            <h4><?php echo $accDetail['realname'];?></h4><br>
            <p><strong>Phone: </strong></p>
            <h4><?php echo $accDetail['phone'];?></h4><br>
            <p><strong>Email: </strong></p>
            <h4><?php echo $accDetail['email'];?></h4>
            <a class = "backButton" href = "ManageUserProfile.php"> Back </a>
        </div>
    </body>    
</html>


