<?php 
//Run when submit
if (isset($_POST['submit'])) {
    $tableNumber = $_POST['tableNumber'];
    $foodID = $_POST['foodID'];
    $quantity = $_POST['quantity'];
  
    $run = new CreateOrder();

    $run -> newOrder($tableNumber,$foodID,$quantity);
}

class CreateOrder {
    function newOrder($tableNumber,$foodID,$quantity) {
        include('StaffEntity.php');

        // Create an instance
        $create = new FoodOrder();
        $result = $create -> add($tableNumber,$foodID,$quantity);
        // Create Order
        if ($result) {
            echo nl2br ("<h1 style='position:fixed; top:50%; left: 50%; transform: translate(-50%, -50%); width: auto; color:green';>Create Order Successful!</h1>");
            header("refresh:1;url=ManageOrder.html");
        }
    }
}
?>