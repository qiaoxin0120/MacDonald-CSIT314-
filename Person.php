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

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_username($username) {
        $this->username = $username;
    }

    public function set_password($password) {
        $this->password = $password;
    }

    public function set_role($role) {
        $this->role = $role;
    }

    public function set_phone($phone) {
        $this->phone = $phone;
    }

    public function set_email($email) {
        $this->email = $email;
    }

    public function set_realname($realname) {
        $this->realname = $realname;
    }

    public function set_isActivate($isActivate) {
        $this->isActivate = $isActivate;
    }
    
    public function get_id() {
        return $this->id;
    }

    function get_username() {
        return $this->username;
    }

    public function get_password() {
        return $this->password;
    }

    public function get_role() {
        return $this->role;
    }

    public function get_phone() {
        return $this->phone;
    }

    public function get_email() {
        return $this->email;
    }

    public function get_realname() {
        return $this->realname;
    }

    public function get_isActivate() {
        return $this->isActivate;
    }

    // validate log in
    public function validation($sqlRole, $sqlUsername, $sqlPassword) {
        include 'conn.php';

        $query=mysqli_query($conn,"SELECT * FROM users WHERE role = '$sqlRole' && username ='$sqlUsername' && password ='$sqlPassword' && isActivate ='Y'");
        $num_rows=mysqli_num_rows($query);

        // If there is valid data
        if ($num_rows > 0) {
            return true;
        }
        else{
            return false;
        }
    }

    public function createAccountProfile($curRole, $curUsername, $curPassword, $newRealName, $newPhone, $newEmail) {
        include 'conn.php';

        $this -> set_role($curRole);
        $this -> set_username($curUsername);
        $this -> set_password($curassword);
        $this -> set_realname($newRealName);
        $this -> set_phone($newPhone);
        $this -> set_email($newEmail);

        $sql = "UPDATE users SET realname = '$newRealName', phone = '$newPhone',email = '$newEmail' WHERE role = '$curRole' && username ='$curUsername' && password = '$curPassword' && isActivate ='Y'";
        
        if(mysqli_query($conn, $sql))
        {
            return true;
        }
        else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            return false;
        }
    }

    public function createAccount($newRole, $newUsername, $newPassword) {
        include 'conn.php';

        $this -> set_role($newRole);
        $this -> set_username($newUsername);
        $this -> set_password($newPassword);

        $sql = "INSERT INTO users (role, username, password, isActivate) VALUES('$newRole','$newUsername','$newPassword', 'Y')";  

        if(mysqli_query($conn, $sql))
        {
            return true;
        }
        else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            return false;
        }
    }

    public function isUserExist($newRole, $newUsername, $newPassword){
        include 'conn.php';

        $this -> set_role($newRole);
        $this -> set_username($newUsername);
        $this -> set_password($newPassword);

        $qr = mysqli_query($conn, "SELECT * FROM users WHERE role = '$newRole' && username ='$newUsername' && password = '$newPassword' && isActivate ='Y'");  
        $num_rows=mysqli_num_rows($qr);
        $row=mysqli_fetch_array($qr);

        // If there is an exist account
        if ($num_rows > 0) {
            return true;
        }
        else{
            return false;
        }
    }  
} 
?>