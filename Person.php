<?php
class Person {
    public $id;
    public $username;
    public $password;
    public $role;
    public $phone;
    public $email;
    public $realname;
    public $isActivate;

    function __constructor($id, $username, $password, $role, $phone, $email, $realname, $isActivate) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
        $this->phone = $phone;
        $this->email = $email;
        $this->realname = $realname;
        $this->isActivate = $isActivate;
    }

    function set_id($id) {
        $this->id = $id;
    }

    function set_username($username) {
        $this->username = $username;
    }

    function set_password($password) {
        $this->password = $password;
    }

    function set_role($role) {
        $this->role = $role;
    }

    function set_phone($phone) {
        $this->phone = $phone;
    }

    function set_email($email) {
        $this->email = $email;
    }

    function set_realname($realname) {
        $this->realname = $realname;
    }

    function set_isActivate($isActivate) {
        $this->isActivate = $isActivate;
    }
    
    function get_id() {
        return $this->id;
    }

    function get_username() {
        return $this->username;
    }

    function get_password() {
        return $this->password;
    }

    function get_role() {
        return $this->role;
    }

    function get_phone() {
        return $this->phone;
    }

    function get_email() {
        return $this->email;
    }

    function get_realname() {
        return $this->realname;
    }

    function get_isActivate() {
        return $this->isActivate;
    }

    function validation($sqlRole, $sqlUsername, $sqlPassword) {
        include 'conn.php';
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
} 
?>
