<?php
    logout();
    
    function logout() {
        session_start();
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        header("Location:login.html");
    } 
?>