<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title> Restaurant Admin - Search Account Profile</title>
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
    </style>
    <title>Restaurant Admin - Manage Account</title>
     <!-- Core CSS-->
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom fonts for this template-->
     <link href="font/css/all.min.css" rel="stylesheet" type="text/css">
 
     <!-- Page level plugin CSS-->
     <link href="bootstrap/css/Table.bootstrap4.css" rel="stylesheet">
 
     <!-- Custom styles for this template-->
     <link href="bootstrap/css/admin.css" rel="stylesheet">

     <body id="page-top">

        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-dark bg-dark static-top" style = "height : 110px;">
    
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
                 <a class="nav-link" href="Restaurant_Administrator.html">
                    <i class="fas fa-fw fa-user-circle"></i>
                    <span>Create User Account / User Profile </span>
                </a>
             </li>

             <li class="nav-item">
                <a class="nav-link" href=" ">
                  <i class="fa fa-key fa-fw"></i>
                  <span>Change Password</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="ManageUserAcc.php">
                  <i class="fa fa-id-badge" style = "padding-right: 7px;"></i>
                  <span>Manage User Account</span>
                </a>
              </li>

      
              <li class="nav-item">
                <a class="nav-link" href = "ManageUserProfile.php">
                  <i class="fa fa-id-badge" style = "padding-right: 7px;"></i>
                  <span>Manage User Profile</span></a>
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
                      <a href="Restaurant_Administrator.html">Welcome Admin!</a>
                    </li>
                    <li class="breadcrumb-item active">Manage User Profile</li>
                  </ol>
        
                  <!-- Page Content -->
                  <h1>Manage User Profile</h1>
                  <hr>

                   <!-- Search the user-->
                   <div class="col-lg-4" style = "width: 505px;">
                    <div class="card mb-3" style = "width: 505px;">
                      <div class="card-header" style = "width: 505px;">
                        <i class="fas fa-chart-bar"></i>
                        Search User</div>
                      <div class="card-body" style = "width: 505px;">
                        <form action="SearchUserProfile.php" method="POST" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                          <div class="input-group">
                            <select name="role" id="roleSelection" required="required">
                                <option hidden>-- Select The Role --</option>
                                <option value="Owner">Restaurant Owner</option>
                                <option value="Manager">Restaurant Manager</option>
                                <option value="Staff">Restaurant Staff</option>
                            </select>
                            <br>
                            <input type="text" required="required" name="username" class="form-control" placeholder="Enter Username Here"  aria-label="Add" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button type="submit" name="Search User Profile" class="btn btn-primary">
                          <i class="fa fa-search"></i>
                        </button> 
                      </div>
                          </div>
                        </form>
                       </div>
                    </div>
                 </div>
        
                  <!--Display the current user-->
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="card mb-3">
                        <div class="card-header">
                          <i class="fas fa-fw fa-user-circle"></i>
                          Current Restaurant Manager / Staff / Owner List</div>
                        <div class="card-body">
                            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                <tr>
                                  <th>ID</th>
                                  <th>Username</th>
                                  <th>View Account Profile</th>
                                  <th class="text-center">Suspend</th>
                                  <th class="text-center">Edit</th>
                                </tr>
                                <?php
                                    include('conn.php');

                                    // Display all user
                                    $displayUserQuery = "SELECT * FROM users";

                                    if ($result = mysqli_query($conn, $displayUserQuery)) {
                                        if (mysqli_num_rows($result) == 0) {
                                            echo "<td colspan='4'>There are currently no user.</td>";
                                        }

                                    while($user = mysqli_fetch_array($result)){
                                    ?>      
                                        <tr class="text-center">
                                            <td><?php echo $user['id']; ?></td>
                                            <td><?php echo $user['username']; ?></td>
                                            <!-- Below is view method -->
                                            <td class="text-center"><a href = "ViewProfileController.php?id=<?php echo $user['id'];?>" class="btn btn-sm btn-success" >View</a></td>
                                            <!-- Below is suspend method -->
                                            <td class="text-center"><a href="SuspendProfileController.php?id=<?php echo $user['id'];?>" class="btn btn-sm btn-danger">Suspend</a></td>
                                            <!-- Below is edit method -->
                                            <td class="text-center"><a href="EditProfileController.php?id=<?php echo $user['id'];?>" class="btn btn-sm btn-primary">Edit</a></td>
                                        </tr>
                                        <?php 
                                    }
                                    }
                                    else {
                                        echo "Something wrong.";
                                    }
                                ?>
                              <?php
                                include("SearchAccController.php");

                                // When form submitted, get values from the database.
                                if (isset($_POST['submit'])){
                                    $curRole = $_POST['role'];
                                    $curUsername = $_POST['username'];

                                    // Create an instance
                                    $searchAccount = new SearchAccountController($curRole,$curUsername);

                                    // Check if role is selected
                                    $searchAccount -> checkRoleField();
                                    
                                    // Return the search result
                                    $searchResult = $searchAccount  -> returnResult();

                                    // if search result is true
                                    if($searchAccount)
                                    {
                                        // display the id and username
                                        
                                    }
                                    else
                                    {
                                        // display error
                                        echo "<td colspan='4'>There are currently no user.</td>";
                                    }
                                }
                                ?>
                            
                            </table>
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
     </body>
</html>