<?php

class averageSpendMonthlyReport{

  private $order_date;

  // Validate Information with database
  //Average Spend

  public function getAverageSpendMonthlyReport($order_date) {
    require_once('createReport.php');
    $query= new createReport();
    return $query -> averageSpendMonthlyReport($order_date);
  }
  
}

?>