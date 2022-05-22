<?php
include('StaffEntity.php');

if($_POST['action'] == 'Delete')
{
    $query = $_POST["order_id"];
    $run = new DeleteOrder();

    $run -> oDelete($query);
}

class DeleteOrder {
    function oDelete($query) {
        $foodorder = new FoodOrder();
        $result = $foodorder -> delete($query);

        if ($result) {
            echo 'alert("Delete Successfully")';
        }
    }
}
?>