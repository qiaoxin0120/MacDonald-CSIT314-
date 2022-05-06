<?php
     private $logout
        
     // Create an instance
     $logout = new LogoutController();

     // Call the logout function
     $logout -> logout();

    class LogoutController
    {
        function logout() 
        {
            session_start();
            unset($_SESSION['username']);
            unset($_SESSION['password']);
            header("Location:login.html");
        }
    }
?>
