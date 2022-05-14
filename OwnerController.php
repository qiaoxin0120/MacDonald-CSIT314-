<?php

class ownerController {
  // Declare variables
  private $order_date;

  // Validate Information with database
  //Average Spend
  public function getAverageSpendDailyReport($order_date) {
    require_once('viewReport.php');
    $query= new viewReport();
    return $query -> averageSpendDailyReport($order_date);
  }

  public function getAverageSpendWeeklyReport($order_date) {
    require_once('viewReport.php');
    $query= new viewReport();
    return $query -> averageSpendWeeklyReport($order_date);
  }

  public function getAverageSpendMonthlyReport($order_date) {
    require_once('viewReport.php');
    $query= new viewReport();
    return $query -> averageSpendMonthlyReport($order_date);
  }
  
  //Frequency Per Visit
  public function getFrequencyPerVisitDailyReport($order_date) {
    require_once('viewReport.php');
    $query= new viewReport();
    return $query -> frequencyPerVisitDailyReport($order_date);
  }

  public function getFrequencyPerVisitWeeklyReport($order_date) {
    require_once('viewReport.php');
    $query= new viewReport();
    return $query -> frequencyPerVisitWeeklyReport($order_date);
  }

  public function getFrequencyPerVisitMonthlyReport($order_date) {
    require_once('viewReport.php');
    $query= new viewReport();
    return $query -> frequencyPerVisitMonthlyReport($order_date);
  }

  //Preferences For Dishes
  public function getPreferencesForDishesDailyReport($order_date) {
    require_once('viewReport.php');
    $query= new viewReport();
    $result = array();
    $query = $query -> preferencesForDishesDailyReport($order_date);
    foreach ($query as $row) {
      array_push($result, $row["menuName"]);
      }
    $result = array_count_values($result);  
    arsort($result);

    return array_slice($result, 0, 3);
  }

  public function getPreferencesForDishesWeeklyReport($order_date) {
    require_once('viewReport.php');
    $query= new viewReport();
    $result = array();
    $query = $query -> preferencesForDishesWeeklyReport($order_date);
    foreach ($query as $row) {
      array_push($result, $row["menuName"]);
      }
    $result = array_count_values($result);  
    arsort($result);

    return array_slice($result, 0, 3);
  }

  public function getPreferencesForDishesMonthlyReport($order_date) {
    require_once('viewReport.php');
    $query= new viewReport();
    $result = array();
    $query = $query -> preferencesForDishesMonthlyReport($order_date);
    foreach ($query as $row) {
      array_push($result, $row["menuName"]);
      }
    $result = array_count_values($result);  
    arsort($result);

    return array_slice($result, 0, 3);
  }
  
}
?>