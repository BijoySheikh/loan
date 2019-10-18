
<?php 

include "sql_config.php";

$id = $_GET['id'];

              
$sql = "SELECT * FROM member_data WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>
   

     

    <link href="css/sweetalert2.min.css" rel="stylesheet">

    <link href="css/simple-sidebar.css" rel="stylesheet">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

   
    
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    
       <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
     
    
    <link href="css/style.css" rel="stylesheet">   
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">









    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables.css">
      <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables_themeroller.css">










</head>

<style>
    .header-top-bg{
    background: #004d66;
  }
  body{
    


  font-family: 'SolaimanLipi', sans-serif !important;
    padding:0;
    margin:0;
/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#eeeeee+0,cccccc+100 */
background: rgb(238,238,238); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(238,238,238,1) 0%, rgba(204,204,204,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeeeee', endColorstr='#cccccc',GradientType=0 ); /* IE6-9 */

   } 
</style>

<body>

        <h2  class="text-white header-top-bg text-center pt-1 pb-1">সদস্য</h2>

<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="bg-dark border-right" id="sidebar-wrapper">
  <div class="sidebar-heading text-white">তরুন সংঘ একতা সমিতি লিঃ</div>
  <div class="list-group list-group-flush">
    <a href="#" class="list-group-item border-bottom border-top text-white list-group-item-action bg-dark">মূলপাতা</a>
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
    <a href="running_member.php" class="btn btn-sm btn-secondary ml-2"><span><i class="fa fa-tachometer-alt"></i></span> বর্তমান সদস্য</a>
    <?php echo "<a class='btn btn-sm btn-danger ml-2' id='alert' href='delete.php?id=" .  $row["id"] . "'>ডিলিট</a>"; ?>
    <a href="running_member.php" class="btn btn-sm btn-secondary ml-2">বর্তমান সদস্য</a>
    <a href="running_member.php" class="btn btn-sm btn-secondary ml-2">বর্তমান সদস্য</a>
    <a href="add_member.php" class="btn btn-sm btn-info ml-2">সদস্য যোগ করুন</a>

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


 
 


 
<div class="container mt-3">
    <div class="row">
        <div class="col-sm-3">
            <div class="text-center">

            <?php  
                echo "<div id='img_div'>";
                echo "<img alt='image of ". $row["m_name"] ." '  class='img-thumbnail rounded' src='images/".$row['image']."' >";
                echo "</div>";
             
            ?>

          <!-- <img  alt="image of  ?>"> -->
            </div>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-6">
                <h3 class="mb-3">নাম: <span class="text-danger"><?php echo $row["m_name"]; ?></span></h3>
                <p>সদস্য আই.ডি :  <?php echo $row["id"]; ?> </p>
                <p>পিতার নাম: <?php echo $row["f_name"]; ?> </p>
                <p>মোবাইল নং: <?php echo $row["phone_no"]; ?></p>
                </div>
                <div class="col-sm-6">
                <h5>ঋণের পরিমাণ: <?php echo $row["loan_amount"]; ?> /- </h5> 
                <p>মূনাফার পরিমাণ: <?php echo $row["profit_amount"]; ?> /- </p> 
                <hr>
                <p>মোট:  <?php echo $row["total_amount"]; ?> /- </p> 
                
                 
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>


    
<?php 

  }
} else {
  echo "0 results";
}


?>





<div class="container">  
              <div class="table-responsive" ng-app="liveApp" ng-controller="liveController" ng-init="fetchData()">      
                <form name="testform" ng-submit="insertData()">
                    <table class="table table-dark table-striped" id="table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="20%">তারিখ</th>
                                <th width="20%">জমা</th>
                                <th width="20%">test</th>
                                <th width="20%">test</th>
                                <th width="20%">test</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" ng-model="addData.first_name" class="form-control" placeholder="Enter First Name" ng-required="true" /></td>
                                <td><input type="text" ng-model="addData.last_name" class="form-control" placeholder="Enter Last Name" ng-required="true" /></td>
                                <td><input type="text" ng-model="addData.test" class="form-control" placeholder="test" ng-required="true" /></td>
                                <td><input type="text" ng-model="addData.test" class="form-control" placeholder="test" ng-required="true" /></td>
                                <td><input type="text" ng-model="addData.test" class="form-control" placeholder="test" ng-required="true" /></td>
                                <td><button type="submit" class="btn btn-success btn-sm" ng-disabled="testform.$invalid">Add</button></td>
                            </tr>
                            <tr ng-repeat="data in namesData" ng-include="getTemplate(data)">
                            </tr>
                            
                        </tbody>
                    </table>
                </form>
                <script type="text/ng-template" id="display">
                    <td>{{data.first_name}}</td>
                    <td>{{data.last_name}}</td>
                    <td>{{data.test}}</td>
                    <td>{{data.test}}</td>
                    <td>{{data.test}}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" ng-click="showEdit(data)">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm" ng-click="deleteData(data.id)">Delete</button>
                    </td>
                </script>
                <script type="text/ng-template" id="edit">
                    <td><input type="text" ng-model="formData.first_name" class="form-control"  /></td>
                    <td><input type="text" ng-model="formData.last_name" class="form-control" /></td>
                    <td><input type="text" ng-model="formData.test" class="form-control" /></td>
                    <td>
                        <input type="hidden" ng-model="formData.data.id" />
                        <button type="button" class="btn btn-info btn-sm" ng-click="editData()">Save</button>
                        <button type="button" class="btn btn-default btn-sm" ng-click="reset()">Cancel</button>
                    </td>
                </script>         
   </div>  
  </div>
    </body>  
</html>  


<script>
var app = angular.module('liveApp', []);

app.controller('liveController', function($scope, $http){

    $scope.formData = {};
    $scope.addData = {};
    $scope.success = false;

    $scope.getTemplate = function(data){
        if (data.id === $scope.formData.id)
        {
            return 'edit';
        }
        else
        {
            return 'display';
        }
    };

    $scope.fetchData = function(){
        $http.get('select.php').success(function(data){
            $scope.namesData = data;
        });
    };

    $scope.insertData = function(){
        $http({
            method:"POST",
            url:"single_member_data.php",
            data:$scope.addData,
        }).success(function(data){
            $scope.success = true;
            $scope.successMessage = data.message;
            $scope.fetchData();
            $scope.addData = {};
        });
    };

    $scope.showEdit = function(data) {
        $scope.formData = angular.copy(data);
    };

    $scope.editData = function(){
        $http({
            method:"POST",
            url:"edit.php",
            data:$scope.formData,
        }).success(function(data){
            $scope.success = true;
            $scope.successMessage = data.message;
            $scope.fetchData();
            $scope.formData = {};
        });
    };

    $scope.reset = function(){
        $scope.formData = {};
    };

    $scope.closeMsg = function(){
        $scope.success = false;
    };

    $scope.deleteData = function(id){
        if(confirm("Are you sure you want to remove it?"))
        {
            $http({
                method:"POST",
                url:"delete.php",
                data:{'id':id}
            }).success(function(data){
                $scope.success = true;
                $scope.successMessage = data.message;
                $scope.fetchData();
            }); 
        }
    };

});

</script>







<script>
$(document).ready(function() {
  $('#table').DataTable();
} );
</script>

    


  

       
       <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
       crossorigin="anonymous"></script>



    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>


     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> 
     <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="js/main.js"></script>
    <script src="js/angular.js"></script>
    <script src="js/sweetalert2.all.min.js" ></script>

   

    
</body>

</html> 


