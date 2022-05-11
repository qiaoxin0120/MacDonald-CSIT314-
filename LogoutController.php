<?php  
    // Create an instance
    $Logout = new LogoutController();

    // Call the logout function
    $Logout -> logout();

    class LogoutController
    {
        public function logout() 
        {
            session_start();
            unset($_SESSION['username']);
            unset($_SESSION['password']);
            header("Location:Login.html");
        }
    }
?>