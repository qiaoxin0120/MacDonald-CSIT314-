<?php
include('StaffEntity.php');

//Main Function
$result = new Search();

$result->view(); 

class Search {
    function view() {
        $foodorder = new FoodOrder();
        $query = $foodorder -> search(1);
        $page = 1;
    
        if ($_POST['query'] != '')
        {
            $query = $foodorder -> search(2);
        }
        $foodorder -> display($query);
    }
}
?>