<?php

class preferencesForDishesDailyReport{

  private $order_date;

  // Validate Information with database
  //Preferences For Dishes
  public function getPreferencesForDishesDailyReport($order_date) {
    require_once('createReport.php');
    $query= new createReport();
    $result = array();
    $query = $query -> preferencesForDishesDailyReport($order_date);
    foreach ($query as $row) {
      array_push($result, $row["menuName"]);
      }
    $result = array_count_values($result);  
    arsort($result);

    return array_slice($result, 0, 3);
  }
  
}

?>