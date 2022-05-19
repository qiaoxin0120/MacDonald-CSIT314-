<?php
class createReport {
    public $orderID;
    public $menuID;
    public $menuName;
    public $menuPrice;
    public $quantity;
    public $order_date;
    public $customerTable;
    public $totalPrice;

    function __constructor($orderID, $menuID, $menuName, $menuPrice, $quantity, $order_date, $customerTable, $totalPrice) {
        $this->orderID = $orderID;
        $this->menuID = $menuID;
        $this->menuName = $menuName;
        $this->menuPrice = $menuPrice;
        $this->quantity = $quantity;
        $this->order_date = $order_date;
        $this->customerTable = $customerTable;
        $this->totalPrice = $totalPrice;
    }

    function set_orderID($orderID) {
        $this->orderID = $orderID;
    }

    function set_menuID($menuID) {
        $this->menuID = $menuID;
    }

    function set_menuName($menuName) {
        $this->menuName = $menuName;
    }

    function set_menuPrice($menuPrice) {
        $this->menuPrice = $menuPrice;
    }

    function set_quantity($quantity) {
        $this->quantity = $quantity;
    }

    function set_order_date($order_date) {
        $this->order_date = $order_date;
    }

    function set_customerTable($customerTable) {
        $this->customerTable = $customerTable;
    }

    function set_totalPrice($totalPrice) {
        $this->totalPrice = $totalPrice;
    }
    
    function get_orderID() {
        return $this->orderID;
    }

    function get_menuID() {
        return $this->menuID;
    }

    function get_menuName() {
        return $this->menuName;
    }

    function get_menuPrice() {
        return $this->menuPrice;
    }

    function get_quantity() {
        return $this->quantity;
    }

    function get_order_date() {
        return $this->order_date;
    }

    function get_customerTable() {
        return $this->customerTable;
    }

    function get_totalPrice() {
        return $this->totalPrice;
    }

    //Average Spend
    function averageSpendDailyReport($order_date) {
        include 'conn.php';
        $query=mysqli_query($conn,"SELECT AVG (totalPrice) FROM csit314.order WHERE DATE(order_date) = '".$order_date."'");
        $num_rows=mysqli_num_rows($query);
        $row=mysqli_fetch_array($query);

        // If there is valid data
        if ($num_rows > 0) {
            return $row;
        }
        else{
            return false;
        }
    }

    function averageSpendWeeklyReport($order_date) {
        include 'conn.php';
        $inputDate = date('Y-m-d', strtotime($order_date));
        $mon = new DateTime($inputDate);
        $fri = new DateTime($inputDate);
        $mon->modify('Last Monday');
        $fri->modify('Next Friday');
        $mon = $mon->format('Y-m-d H:i:s');
        $fri = $fri->format('Y-m-d H:i:s');
        $query=mysqli_query($conn,"SELECT AVG (totalPrice) FROM csit314.order WHERE DATE(order_date) BETWEEN '".$mon."' and '".$fri."'");
        $num_rows=mysqli_num_rows($query);
        $row=mysqli_fetch_array($query);

        // If there is valid data
        if ($num_rows > 0) {
            return $row;
        }
        else{
            return false;
        }
    }

    function averageSpendMonthlyReport($order_date) {
        include 'conn.php';
        $startdate = date('Y-m-1', strtotime($order_date));
        $enddate = date('Y-m-t', strtotime($order_date));
        $query=mysqli_query($conn,"SELECT AVG (totalPrice) FROM csit314.order WHERE DATE(order_date) BETWEEN '".$startdate."' and '".$enddate."'");
        $num_rows=mysqli_num_rows($query);
        $row=mysqli_fetch_array($query);

        // If there is valid data
        if ($num_rows > 0) {
            return $row;
        }
        else{
            return false;
        }
    }
    
        //Frequency Per Visit
        function frequencyPerVisitDailyReport($order_date) {
            include 'conn.php';
            $query=mysqli_query($conn,"SELECT AVG (customerTable) FROM csit314.order WHERE DATE(order_date) = '".$order_date."'");
            $num_rows=mysqli_num_rows($query);
            $row=mysqli_fetch_array($query);
    
            // If there is valid data
            if ($num_rows > 0) {
                return $row;
            }
            else{
                return false;
            }
        }
    
        function frequencyPerVisitWeeklyReport($order_date) {
            include 'conn.php';
            $inputDate = date('Y-m-d', strtotime($order_date));
            $mon = new DateTime($inputDate);
            $fri = new DateTime($inputDate);
            $mon->modify('Last Monday');
            $fri->modify('Next Friday');
            $mon = $mon->format('Y-m-d H:i:s');
            $fri = $fri->format('Y-m-d H:i:s');
            $query=mysqli_query($conn,"SELECT AVG (customerTable) FROM csit314.order WHERE DATE(order_date) BETWEEN '".$mon."' and '".$fri."'");
            $num_rows=mysqli_num_rows($query);
            $row=mysqli_fetch_array($query);
    
            // If there is valid data
            if ($num_rows > 0) {
                return $row;
            }
            else{
                return false;
            }
        }
    
        function frequencyPerVisitMonthlyReport($order_date) {
            include 'conn.php';
            $startdate = date('Y-m-1', strtotime($order_date));
            $enddate = date('Y-m-t', strtotime($order_date));
            $query=mysqli_query($conn,"SELECT AVG (customerTable) FROM csit314.order WHERE DATE(order_date) BETWEEN '".$startdate."' and '".$enddate."'");
            $num_rows=mysqli_num_rows($query);
            $row=mysqli_fetch_array($query);
    
            // If there is valid data
            if ($num_rows > 0) {
                return $row;
            }
            else{
                return false;
            }
        }

        //Preferences For Dishes
        function preferencesForDishesDailyReport($order_date) {
            include 'conn.php';
            $query=mysqli_query($conn,"SELECT (menuName) FROM csit314.order WHERE DATE(order_date) = '".$order_date."'");
            $num_rows=mysqli_num_rows($query);
            $row=mysqli_fetch_array($query);
            $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    
            // If there is valid data
            if ($num_rows > 0) {
                return $result;
            }
            else{
                return false;
            }
        }
        
        function preferencesForDishesWeeklyReport($order_date) {
            include 'conn.php';
            $inputDate = date('Y-m-d', strtotime($order_date));
            $mon = new DateTime($inputDate);
            $fri = new DateTime($inputDate);
            $mon->modify('Last Monday');
            $fri->modify('Next Friday');
            $mon = $mon->format('Y-m-d H:i:s');
            $fri = $fri->format('Y-m-d H:i:s');
            $query=mysqli_query($conn,"SELECT (menuName) FROM csit314.order WHERE DATE(order_date) BETWEEN '".$mon."' and '".$fri."'");
            $num_rows=mysqli_num_rows($query);
            $row=mysqli_fetch_array($query);
            $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    
            // If there is valid data
            if ($num_rows > 0) {
                return $result;
            }
            else{
                return false;
            }
        }
    
        function preferencesForDishesMonthlyReport($order_date) {
            include 'conn.php';
            $startdate = date('Y-m-1', strtotime($order_date));
            $enddate = date('Y-m-t', strtotime($order_date));
            $query=mysqli_query($conn,"SELECT (menuName) FROM csit314.order WHERE DATE(order_date) BETWEEN '".$startdate."' and '".$enddate."'");
            $num_rows=mysqli_num_rows($query);
            $row=mysqli_fetch_array($query);
            $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    
            // If there is valid data
            if ($num_rows > 0) {
                return $result;
            }
            else{
                return false;
            }
        }
}   
?>