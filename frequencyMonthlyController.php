<?php

class frequencyPerVisitMonthlyReport{

  private $order_date;

  // Validate Information with database
  
  public function getFrequencyPerVisitMonthlyReport($order_date) {
    require_once('createReport.php');
    $query= new createReport();
    return $query -> frequencyPerVisitMonthlyReport($order_date);
  }
  
}

?>