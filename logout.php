<?php
    logout();
    
    function logout() {
        session_start();//session is a way to store information (in variables) to be used across multiple pages.
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        header("Location:login.html");//use for the redirection to some page
    } 
?>