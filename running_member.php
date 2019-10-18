<?php 
  include 'sql_config.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>
   

        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" id="bootstrap-css">


        <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">

        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

        <link href="css/simple-sidebar.css" rel="stylesheet">

    

        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">



</head>


<style>
.list-group-flush a i{
  color:gray;
}
.list-group-flush a:hover i{
  color:#67B7C2;
}

  .header-top-bg{
    background: #004d66;
  }
  body{
  font-family: 'SolaimanLipi', sans-serif !important;
    padding:0;
    margin:0;
    background: rgb(238,238,238); /* Old browsers */
    background: -moz-linear-gradient(top,  rgba(238,238,238,1) 0%, rgba(204,204,204,1) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top,  rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom,  rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeeeee', endColorstr='#cccccc',GradientType=0 ); /* IE6-9 */

   } 

</style>

<body>

        <h2 class="text-white header-top-bg text-center pt-1 pb-1">সদস্য তালিকা</h2>

<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="bg-dark border-right" id="sidebar-wrapper">
  <div class="sidebar-heading text-white">তরুন সংঘ একতা সমিতি লিঃ</div>
  <div class="list-group list-group-flush">
    <a href="#" class="list-group-item border-bottom border-top text-white list-group-item-action bg-dark"><i class="fas fa-home"></i>  মূলপাতা</a>
    <a href="running_member.php" class="list-group-item border-bottom border-top text-white list-group-item-action bg-dark">সদস্য</a>
    <a href="#" class="list-group-item border-bottom border-top text-white list-group-item-action bg-dark">Overview</a>
    <a href="#" class="list-group-item border-bottom border-top text-white list-group-item-action bg-dark">Events</a>
    <a href="#" class="list-group-item border-bottom border-top text-white list-group-item-action bg-dark">Profile</a>
    <a href="#" class="list-group-item border-top text-white list-group-item-action bg-dark">Status</a>
   
  </div>
</div>
<!-- /#sidebar-wrapper -->



<!-- Page Content -->
<div id="page-content-wrapper">






  <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
    <button class="btn btn-primary btn-sm" id="menu-toggle"><<||>></button>
    <a href="running_member.php" class="btn btn-sm btn-secondary ml-2">বর্তমান সদস্য</a>
    <a href="running_member.php" class="btn btn-sm btn-secondary ml-2">বর্তমান সদস্য</a>
    <a href="running_member.php" class="btn btn-sm btn-secondary ml-2">বর্তমান সদস্য</a>
    <a href="running_member.php" class="btn btn-sm btn-secondary ml-2">বর্তমান সদস্য</a>
    <a href="add_member.php" class="btn btn-sm btn-info ml-2"><i class="fas fa-user-plus"></i></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          সদস্য
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="running_member.php">বর্তমান সদস্য</a>
            <a class="dropdown-item" href="#">পরিশোধকৃত সদস্য</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">সদস্য</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>



  <div class="container bg-Secondary">
    <div class="row">
        <div class="col-md-12">
            <div class="row mb-3 bg-dark">
                <div class="col-md-3 col-sm-12 text-white mt-3 mb-2">
                <h5 >বর্তমান সদস্য :
                              
                <?php 
                $sql="SELECT * FROM member_data ORDER BY id";
                if ($result=mysqli_query($conn,$sql))
                  {
                  // Return the number of rows in result set
                  $rowcount=mysqli_num_rows($result);
                  printf($rowcount);
                  // Free result set
                  mysqli_free_result($result);
                  }
                                
                  ?> জন
                    
                 </h5>   
                </div>
                <div class="col-md-3 col-sm-12 text-white mt-3 mb-2"><h5>পরিশোধকৃত সদস্য : </h5></div>
                <div class="col-md-3 col-sm-12 text-white mt-3 mb-2"><h5>সর্বমোট প্রদান :  </h5></div>
                <div class="col-md-3 col-sm-12 text-white">
                <div class="text-right mt-2">
                <a class="btn btn-success btn-sm" href="add_member.php">সদস্য যোগ করুন</a>
                </div>
                </div>
            </div>
            
            <table class="table table-striped table-dark table-bordered"  id="datatable">
                <thead class="text-center">
                  <tr>
                    <th>তারিখ</th>
                    <th>নাম</th>
                    <th>পিতার নাম</th>
                    <th>ঋণের পরিমান</th>
                    <th>মোট টাকা</th>
                    <th>বিস্তারিত</th>

                </tr>
                </thead>

                

            
                <?php
                  
                  
                    $sql = "SELECT id, loan_date, m_name, f_name, loan_amount, total_amount FROM member_data ORDER BY id ASC";
                    $res = $conn->query($sql);
                    
                    if ($res->num_rows > 0) {
                      // output data of each row
                      while($row = $res->fetch_assoc()) {
                          echo "<tr><td> ". $row["loan_date"]. " </td>
                                <td> ". $row["m_name"]. "</td>
                                <td> " . $row["f_name"] . "</td>
                                <td> " . $row["loan_amount"] . "</td>
                                <td> " . $row["total_amount"] . "</td>          
                                <td class='text-right'><a class='btn btn-info btn-sm' id='alert' href='single_view.php?id=" .  $row["id"] . "'>দেখুন</a>
                                <a class='btn btn-warning btn-sm' id='alert' href='delete.php?id=" .  $row["id"] . "'>ডিলিট</a><a class='btn btn-danger btn-sm ml-1' id='alert' href='delete.php?id=" .  $row["id"] . "'>ডিলিট</a></td></tr>"; 

                      }
                    } else {
                      echo "no result";
                    }
                  
                      $conn->close(); 
                ?>
              
           
            
            </table>
        </div>
    </div>
  </div>

  </div>


</div>

 

<!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
       crossorigin="anonymous"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/angular.js"></script>

  
 
    
</body>

</html> 







