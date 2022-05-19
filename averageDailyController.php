<?php

class averageSpendDailyReport{

  private $order_date;

  // Validate Information with database
  //Average Spend

  public function getAverageSpendDailyReport($order_date) {
    require_once('createReport.php');
    $query= new createReport();
    return $query -> averageSpendDailyReport($order_date);
  }
  
}
?>