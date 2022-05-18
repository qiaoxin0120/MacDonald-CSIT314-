<?php
    class FoodOrder {
        private $tableNumber;
        private $foodId;

        function get_tableNumber() {
            return $this->tableNumber;
        }

        function get_foodId() {
            return $this->foodId;
        }

        function set_tableNumber($tableNumber) {
            $this->tableNumber = $tableNumber;
        }
        
        function set_foodId($foodId) {
            $this->foodId = $foodId;
        }

        function search($option) {  
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "csit314";

            $conn = new PDO("mysql:host=localhost;dbname=csit314", "$username", "$password");

            if($option == 1)
                $query = "SELECT * FROM `order`";
            else {
                $query = "SELECT * FROM `order` WHERE (`customerTable` = " .str_replace('', '%', $_POST['query']). ")";
            }
            return $query;
        }

        function display($query) {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "csit314";

            $conn = new PDO("mysql:host=localhost;dbname=csit314", "$username", "$password");

            $row_limit = '15';
            $page = 1;
            $tempPage = $_POST['page'];
            if ($tempPage> 1)
            {
                $start_from = (($_POST['page'] - 1) * $row_limit);
                $page = $_POST['page'];
            }
            else
            {
                $start_from = 0;
            }

            $filter_query = $query . 'LIMIT ' . $start_from . ', ' . $row_limit . '';

            $statement = $conn->prepare($query);
            $statement->execute();
            $total_row = $statement->rowCount();

            $statement = $conn->prepare($filter_query);
            $statement->execute();
            $result = $statement->fetchAll();
            $total_filter_data = $statement->rowCount();
            $output = '
            <label>Total Records - ' . $total_row . '</label>
            <table id="sample_data" class="table table-striped table-bordered">
            <tr>
            <th>Food Name</th>                        
            <th>Quantity</th>
            <th>Price</th>
            <th>Total Price</th>
            <th>Action</th>
            <th>Action</th>
            <th>Action</th>
            </tr>
            ';

            if ($total_row > 0)
            {
                foreach ($result as $row)
            
                {
                    $order_id = $row["orderID"];
                    $output .= "
                <tr>   
                    <td style='display:none'>" . $order_id . "</td>  
                    <td>" . $row["menuName"] . "</td>  
                    <td>" . $row["quantity"] . "</td>
                    <td>" . $row["menuPrice"] . "</td>
                    <td>$" . $row["totalPrice"] . "</td>  
                    <td><button type=button name='update' id='".$order_id."' class='btn btn-success btn-xs update'>Update</button></td>
                    <td><button type=button name='delete' id='".$order_id."' class='btn btn-danger btn-xs delete'>Delete</button></td>
                    <td><button type=button name='status' id='".$order_id."' class='btn btn-success btn-xs done'>Done</button></td>
                </tr>
                ";
                }
            }
            else
            {
                $output .= '
            <tr>
                <td colspan="7" align="center">No Data Found</td>
            </tr>
            ';
            }

            $output .= '
            </table>
            <br />
            <div align="center">
            <ul class="pagination">
            ';

            $total_links = ceil($total_row / $row_limit);
            $previous_link = '';
            $next_link = '';
            $page_link = '';
            $page_array[] = '';

            if ($total_links > 4)
            {
                if ($page < 5)
                {
                    for ($count = 1;$count <= 5;$count++)
                    {
                        $page_array[] = $count;
                    }
                    $page_array[] = '...';
                    $page_array[] = $total_links;
                }
                else
                {
                    $end_limit = $total_links - 5;
                    if ($page > $end_limit)
                    {
                        $page_array[] = 1;
                        $page_array[] = '...';
                        for ($count = $end_limit;$count <= $total_links;$count++)
                        {
                            $page_array[] = $count;
                        }
                    }
                    else
                    {
                        $page_array[] = 1;
                        $page_array[] = '...';
                        for ($count = $page - 1;$count <= $page + 1;$count++)
                        {
                            $page_array[] = $count;
                        }
                        $page_array[] = '...';
                        $page_array[] = $total_links;
                    }
                }
            }
            else
            {
                for ($count = 1;$count <= $total_links;$count++)
                {
                    $page_array[] = $count;
                }
            }

            for ($count = 0;$count < count((array)$page_array);$count++)
            {
                if ($page == $page_array[$count])
                {
                    $page_link .= '
                <li class="page-item active">
                <a class="page-link" href="#">' . $page_array[$count] . ' <span class="sr-only">(current)</span></a>
                </li>
                ';
                
                    $previous_id = $page_array[$count] - 1;
                    if ($previous_id > 0)
                    {
                        $previous_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="' . $previous_id . '">Previous</a></li>';
                    }
                    else
                    {
                        $previous_link = '
                <li class="page-item disabled">
                    <a class="page-link" href="#">Previous</a>
                </li>
                ';
                    }
                    $next_id = $page_array[$count] + 1;
                    if ($next_id > $total_links)
                    {
                        $next_link = '
                <li class="page-item disabled">
                    <a class="page-link" href="#">Next</a>
                </li>
                    ';
                    }
                    else
                    {
                        $next_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="' . $next_id . '">Next</a></li>';
                    }
                }
                else
                {
                    if ($page_array[$count] == '...')
                    {
                        $page_link .= '
                <li class="page-item disabled">
                    <a class="page-link" href="#">...</a>
                </li>
                ';
                    }
                    else
                    {
                        $page_link .= '
                <li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="' . $page_array[$count] . '">' . $page_array[$count] . '</a></li>
                ';
                    }
                }
            }

            $output .= $previous_link . $page_link . $next_link;
            $output .= '
            </ul>

            </div>
            ';

            echo $output;
        }

        function add($tableNumber, $foodID, $quantity) {
            include('conn.php');

            $query = mysqli_query($conn,"SELECT menuName FROM `menu` WHERE idMenu = '$foodID'");
            $foodName = current(mysqli_fetch_array($query));
            $query = mysqli_query($conn,"SELECT menuPrice FROM `menu` WHERE idMenu = '$foodID'");
            $price = current(mysqli_fetch_array($query));
            $totalPrice = strval(intval(strtok($price,'$')) * intval($quantity));
            $query=mysqli_query($conn,"INSERT into `order`(customerTable,menuID,quantity,menuName,menuPrice,totalPrice) VALUES ('$tableNumber', '$foodID', '$quantity','$foodName','$price','$totalPrice')");

            if($query) {
                return true;
            }
            else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                return false;
            }
        }

        function delete($orderID) {
            include('conn.php');
            $query=mysqli_query($conn,"Delete from order where orderID = $orderID");
        }

        function update($quantity,$tableNumber) {
            include('conn.php');
            $query=mysqli_query($conn,"update order set quantity = '$quantity' where customerTable = '$tableNumber'");
        }
    }
?>