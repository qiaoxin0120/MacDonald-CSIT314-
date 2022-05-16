<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    </head>
    <style>
        .logo img{
			max-height: 70px;
      		max-width: 70 px;
			margin-top: 0px;
			display: block;
  			margin-left: auto;
  			margin-right: auto;
      		object-fit: cover;
		}
        .title{ 
            font-size: 40px;
            color: white;
            padding-right: 0.5cm;
        }
        .card-body a{
            border-radius: 5%;
            padding: 10px;
            background-color: lightgrey;
        }
    </style>
    <title>Restaurant Owner</title>
     <!-- Core CSS-->
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom fonts for this template-->
     <link href="font/css/all.min.css" rel="stylesheet" type="text/css">
 
     <!-- Page level plugin CSS-->
     <link href="bootstrap/css/Table.bootstrap4.css" rel="stylesheet">
 
     <!-- Custom styles for this template-->
     <link href="bootstrap/css/admin.css" rel="stylesheet">

     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

     <!-- Get the Result and direct to controller -->
    <?php
     $txt = ""; 

     if (isset($_GET['reportDate'])) {
        //empty 
        $txt = $_GET['reportDate'];

        include('OwnerController.php');

        // Create an instance
        $ownerController = new ownerController();

        // Go to controller Average Spend
        $averageSpendDailyReport = $ownerController -> getAverageSpendDailyReport($_GET['reportDate']);
        $averageSpendWeeklyReport = $ownerController -> getAverageSpendWeeklyReport($_GET['reportDate']);
        $averageSpendMonthlyReport = $ownerController -> getAverageSpendMonthlyReport($_GET['reportDate']);

        // Go to controller Frequency Per Visit 
        $frequencyPerVisitDailyReport = $ownerController -> getFrequencyPerVisitDailyReport($_GET['reportDate']);
        $frequencyPerVisitWeeklyReport = $ownerController -> getFrequencyPerVisitWeeklyReport($_GET['reportDate']);
        $frequencyPerVisitMonthlyReport = $ownerController -> getFrequencyPerVisitMonthlyReport($_GET['reportDate']);

        // Go to controller Preferences For Dishes
        $preferencesForDishesDailyReport = $ownerController -> getPreferencesForDishesDailyReport($_GET['reportDate']);
        $preferencesForDishesWeeklyReport = $ownerController -> getPreferencesForDishesWeeklyReport($_GET['reportDate']);
        $preferencesForDishesMonthlyReport = $ownerController -> getPreferencesForDishesMonthlyReport($_GET['reportDate']);
        }
    ?>
     <body id="page-top">

        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-dark bg-dark static-top" style = "height : 120x;">
    
          <div class="title">Break First</div>
          <div class = "logo"><img src = "image/Logo Big.png"></div>
    
          <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
          </button>
        </nav>


        <div id="wrapper">
            <!------------------ Sidebar ------------------->
            <ul class="sidebar navbar-nav">

              <li class="nav-item">
                 <a class="nav-link" href="">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span> View Report</span>
                </a>
             </li>
          
              <li class="nav-item">
                <a class="nav-link" href="LogoutController.php">
                  <i class="fas fa-fw fa-power-off"></i>
                  <span>Logout</span>
                </a>
              </li>
            </ul>

            <div id="content-wrapper">

                <div class="container-fluid">
        
                  <!-- Breadcrumbs-->
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="Restaurant_Owner.php">Welcome Owner!</a>
                    </li>
                    <li class="breadcrumb-item active">View Report</li>
                  </ol>
        
                  <!-- Page Content -->
                  <h1>View Report</h1>
                  <hr>
        
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="card mb-3">
                        <div class="card-header">
                        <p>&nbsp;</p>
                        <form action = "" method = "get" id = "AverageSpend">
                        <p> 
                            Date: <input type = "date" name ="reportDate" onchange="document.getElementById('AverageSpend').submit()" value="<?php echo $txt;?>"> 
                        </p>
                        </form>
                        <p>&nbsp;</p>
                            <!-- Tab -->
                            <section id="tabs" class="project-tab">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <nav>
                                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                    <!-- Tab Average spend -->
                                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                                        role="tab" aria-controls="nav-home" aria-selected="true">Average spend</a>
                                                    <!-- Tab Frequency per visit -->
                                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                                        role="tab" aria-controls="nav-profile" aria-selected="false">Frequency per visit</a>
                                                    <!-- Tab Preferences for dishes -->    
                                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                                        role="tab" aria-controls="nav-contact" aria-selected="false">Preferences for dishes</a>
                                                </div>
                                            </nav>
                                            <!-- Tab Average spend -->
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                                    aria-labelledby="nav-home-tab">
                                                    <!-- Accordion Average spend -->
                                                    <div id="accordion1">
                                                        <!-- Accordion Average spend Daily-->
                                                        <div class="card">
                                                            <div class="card-header" id="headingOne">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link" data-toggle="collapse"
                                                                        data-target="#averageSpendDaily" aria-expanded="true"
                                                                        aria-controls="collapseOne">
                                                                        Daily Report
                                                                    </button>                                          
                                                                </h5>
                                                            </div>

                                                            <div id="averageSpendDaily" class="collapse show" aria-labelledby="headingOne"
                                                                data-parent="#accordion1">
                                                                <div class="card-body">
                                                                    <p>Average Spend Daily :</p>
                                                                    <!-- var_dump then echo $averageSpendDailyReport -->
                                                                    <?php
                                                                    echo "<p>$";
                                                                    echo $averageSpendDailyReport[0]."</p>"; 
                                                                    //var_dump($averageSpendDailyReport);
                                                                    ?>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Accordion Average spend Weekly-->
                                                        <div class="card">
                                                            <div class="card-header" id="headingTwo">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                                                        data-target="#averageSpendWeekly" aria-expanded="false"
                                                                        aria-controls="collapseTwo">
                                                                        Weekly Report
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="averageSpendWeekly" class="collapse" aria-labelledby="headingTwo"
                                                                data-parent="#accordion1">
                                                                <div class="card-body">
                                                                    <p>Average Spend Weekly :</p>
                                                                    <?php
                                                                    echo "<p>$";
                                                                    echo $averageSpendWeeklyReport[0]."</p>";
                                                                    //var_dump($averageSpendWeeklyReport);
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Accordion Average spend Monthly-->
                                                        <div class="card">
                                                            <div class="card-header" id="headingThree">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                                                        data-target="#averageSpendMonthly" aria-expanded="false"
                                                                        aria-controls="collapseThree">
                                                                        Monthly Report
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="averageSpendMonthly" class="collapse" aria-labelledby="headingThree"
                                                                data-parent="#accordion1">
                                                                <div class="card-body">
                                                                    <p>Average Spend Monthly :</p>
                                                                    <?php
                                                                    echo "<p>$";
                                                                    echo $averageSpendMonthlyReport[0]."</p>";
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Tab Frequency per visit -->
                                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                                                    <!-- Accordion Frequency per visit -->
                                                    <div id="accordion2">
                                                        <!-- Accordion Frequency per visit Daily-->
                                                        <div class="card">
                                                            <div class="card-header" id="headingOne">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link" data-toggle="collapse"
                                                                        data-target="#frequencyPerVisitDaily" aria-expanded="true"
                                                                        aria-controls="collapseOne">
                                                                        Daily Report
                                                                    </button>
                                                                </h5>
                                                            </div>

                                                            <div id="frequencyPerVisitDaily" class="collapse show" aria-labelledby="headingOne"
                                                                data-parent="#accordion2">
                                                                <div class="card-body">
                                                                    <p>Frequency Per Visit Daily :</p>
                                                                    <!-- var_dump then echo -->
                                                                    <?php
                                                                    echo $frequencyPerVisitDailyReport[0];
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Accordion Frequency per visit Weekly-->
                                                        <div class="card">
                                                            <div class="card-header" id="headingTwo">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                                                        data-target="#frequencyPerVisitWeekly" aria-expanded="false"
                                                                        aria-controls="collapseTwo">
                                                                        Weekly Report
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="frequencyPerVisitWeekly" class="collapse" aria-labelledby="headingTwo"
                                                                data-parent="#accordion2">
                                                                <div class="card-body">
                                                                    <p>Frequency Per Visit Weekly :</p>
                                                                    <!-- var_dump then echo -->
                                                                    <?php
                                                                    echo $frequencyPerVisitWeeklyReport[0];
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Accordion Frequency per visit Monthly-->
                                                        <div class="card">
                                                            <div class="card-header" id="headingThree">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                                                        data-target="#frequencyPerVisitMonthly" aria-expanded="false"
                                                                        aria-controls="collapseThree">
                                                                        Monthly Report
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="frequencyPerVisitMonthly" class="collapse" aria-labelledby="headingThree"
                                                                data-parent="#accordion2">
                                                                <div class="card-body">
                                                                    <p>Frequency Per Visit Monthly :</p>
                                                                    <!-- var_dump then echo -->
                                                                    <?php
                                                                    echo $frequencyPerVisitMonthlyReport[0];
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Tab Preferences for dishes -->
                                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                                                    <!-- Accordion Preferences for dishes -->
                                                    <div id="accordion3">
                                                        <!-- Accordion Preferences for dishes Daily-->
                                                        <div class="card">
                                                        <div class="card-header" id="headingOne">
                                                            <h5 class="mb-0">
                                                            <button class="btn btn-link" data-toggle="collapse" data-target="#preferencesForDishesDaily" aria-expanded="true" aria-controls="collapseOne">
                                                                Daily Report
                                                            </button>
                                                            </h5>
                                                        </div>
                                                    
                                                        <div id="preferencesForDishesDaily" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion3">
                                                            <div class="card-body">
                                                                <p>Preferences For Dishes Daily :</p>
                                                                <!-- var_dump then echo -->
                                                                <?php
                                                                $dailykey = array_keys($preferencesForDishesDailyReport);
                                                                for($i = 0; $i < 3; $i++){
                                                                    echo ($i + 1)." " .$dailykey[$i]." : ".$preferencesForDishesDailyReport[$dailykey[$i]]."<br />";
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <!-- Accordion Preferences for dishes Weekly-->
                                                        <div class="card">
                                                        <div class="card-header" id="headingTwo">
                                                            <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#preferencesForDishesWeekly" aria-expanded="false" aria-controls="collapseTwo">
                                                                Weekly Report
                                                            </button>
                                                            </h5>
                                                        </div>
                                                        <div id="preferencesForDishesWeekly" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion3">
                                                            <div class="card-body">
                                                                <p>Preferences For Dishes Weekly :</p>
                                                                <!-- var_dump then echo -->
                                                                <?php
                                                                $weeklykey = array_keys($preferencesForDishesWeeklyReport);
                                                                for($i = 0; $i < 3; $i++){
                                                                    echo ($i + 1)." " .$weeklykey[$i]." : ".$preferencesForDishesWeeklyReport[$weeklykey[$i]]."<br />";
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <!-- Accordion Preferences for dishes Monthly-->
                                                        <div class="card">
                                                        <div class="card-header" id="headingThree">
                                                            <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#preferencesForDishesMonthly" aria-expanded="false" aria-controls="collapseThree">
                                                                Monthly Report
                                                            </button>
                                                            </h5>
                                                        </div>
                                                        <div id="preferencesForDishesMonthly" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                                                            <div class="card-body">
                                                                <p>Preferences For Dishes Monthly :</p>
                                                                <!-- var_dump then echo -->
                                                                <?php
                                                                $monthlykey = array_keys($preferencesForDishesMonthlyReport);
                                                                for($i = 0; $i < 3; $i++){
                                                                    echo ($i + 1)." " .$monthlykey[$i]." : ".$preferencesForDishesMonthlyReport[$monthlykey[$i]]."<br />";
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            </div>
                        </div>
                        </div>
                      </div>
                    </div>
        
                </div>
                <!-- /.container-fluid -->
        
                <!-- Sticky Footer -->
                <footer class="sticky-footer">
                  <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                      <span>Copyright © MacDonald 2022</span>
                    </div>
                  </div>
                </footer>
        
              </div>
              <!-- /.content-wrapper -->
        
         </div>
        <!-- /#wrapper -->
        
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
     </body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
</html>
