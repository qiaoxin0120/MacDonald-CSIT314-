<?php
    $id = $_GET['id'];
    $suspendAcc = new SuspendAccountController($id);
    $suspendAcc->suspendAccount();
?>
<?php
    class SuspendAccountController{
        private $id;

        public function __construct($id){
            $this->id = $id;
        }
    
        public function get_id(){
            return $this->id;
        }
    
        public function suspendAccount()
        {
            require_once 'Person.php';
            $suspendAccount = new Person();
            $result = $suspendAccount -> suspendAccount($this->get_id());

            if ($result)
            {
                echo nl2br ("<h1 style='position:fixed; top:50%; left: 50%; transform: translate(-50%, -50%); width: auto; color:green';>
                             User is suspended! \nRedirecting to Manage Account Page...</h1>");
                header("refresh:2;url=ManageUserAcc.php");
            }
            else
            {
                echo nl2br ("<h1 style='position:fixed; top:50%; left: 50%; transform: translate(-50%, -50%); width: auto; color:green';>
                             User is not suspended!!\nRedirecting to Manage Account Page...</h1>");
                header("refresh:2;url=ManageUserAcc.php");
            }
        }
    }
?>
