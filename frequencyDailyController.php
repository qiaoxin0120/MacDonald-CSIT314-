<?php

class frequencyPerVisitDailyReport{

  private $order_date;

  // Validate Information with database
  //Frequency Per Visit
  public function getFrequencyPerVisitDailyReport($order_date) {
    require_once('createReport.php');
    $query= new createReport();
    return $query -> frequencyPerVisitDailyReport($order_date);
  }
  
}

?>