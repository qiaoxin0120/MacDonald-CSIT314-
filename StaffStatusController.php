<?php
include('StaffEntity.php');

if($_POST['action'] == 'Status')
{
    $query = $_POST["order_id"];
    $run = new OrderStatus();

    $run -> updateStatus($query);
}

class OrderStatus {
    function updateStatus($query) {
        $foodorder = new FoodOrder();
        $result = $foodorder -> status($query);
        
        if ($result) {
            echo 'alert("Updated Successfully")';
        }
    }
}
?>