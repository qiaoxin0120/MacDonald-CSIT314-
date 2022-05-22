<?php
include('StaffEntity.php');
include('conn.php');

$query = $_POST["order_id"];

if($_POST['action'] == 'Fetch Single Data')
{   
    $run = new UpdateQuantity();
    $run -> fetchSingleData($query);
}

if($_POST["action"] == "Edit")
{  
    $quantity = mysqli_real_escape_string($conn, $_POST["quantity"]);   
    $run = new UpdateQuantity();
    $run -> edit($quantity,$query);
}  

class UpdateQuantity {
    function fetchSingleData($query) {
        $foodorder = new FoodOrder();
        $output = $foodorder -> fetch_data($query);
        echo json_encode($output);
    }

    function edit($quantity,$query) {
        $foodorder = new FoodOrder();
        $result = $foodorder->update($quantity, $query);   
        if ($result) {
            echo 'Data Updated';  
        }
    }
}
?>
