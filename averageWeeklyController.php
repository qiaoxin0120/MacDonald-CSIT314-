<?php

class averageSpendWeeklyReport{

    private $order_date;
  
    // Validate Information with database
    //Average Spend
  
    public function getAverageSpendWeeklyReport($order_date) {
      require_once('createReport.php');
      $query= new createReport();
      return $query -> averageSpendWeeklyReport($order_date);
  }
  }

?>