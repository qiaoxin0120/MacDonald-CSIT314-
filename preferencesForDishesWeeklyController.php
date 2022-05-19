<?php

class preferencesForDishesWeeklyReport{

  private $order_date;

  // Validate Information with database

  public function getPreferencesForDishesWeeklyReport($order_date) {
    require_once('createReport.php');
    $query= new createReport();
    $result = array();
    $query = $query -> preferencesForDishesWeeklyReport($order_date);
    foreach ($query as $row) {
      array_push($result, $row["menuName"]);
      }
    $result = array_count_values($result);  
    arsort($result);

    return array_slice($result, 0, 3);
  }
  
}

?>