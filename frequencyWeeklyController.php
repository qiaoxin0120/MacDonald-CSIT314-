<?php

class frequencyPerVisitWeeklyReport{

  private $order_date;

  // Validate Information with database

  public function getFrequencyPerVisitWeeklyReport($order_date) {
    require_once('createReport.php');
    $query= new createReport();
    return $query -> frequencyPerVisitWeeklyReport($order_date);
  }
  
}

?>