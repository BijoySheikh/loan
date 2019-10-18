

<?php 

include ('img_upload.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />

   
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">

    <link href="css/jquery-ui.min.css" rel="stylesheet">
     

    <link href="css/sweetalert2.min.css" rel="stylesheet">

    <link href="css/simple-sidebar.css" rel="stylesheet">

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">




    
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/datatables.min.css"/>

<!-- Theme CSS - Includes Bootstrap -->


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

        <h2  class="text-white header-top-bg text-center pt-1 pb-1">সদস্য ফরম</h2>

<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="bg-dark border-right" id="sidebar-wrapper">
  <div class="sidebar-heading text-white">তরুন সংঘ একতা সমিতি লিঃ</div>
  <div class="list-group list-group-flush">
    <a href="#" class="list-group-item border-bottom border-top text-white list-group-item-action bg-dark"><i class="fas fa-home"></i> মূলপাতা</a>
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
    <a href="running_member.php" class="btn btn-sm btn-secondary ml-2">বর্তমান সদস্য</a>
    <a href="running_member.php" class="btn btn-sm btn-secondary ml-2">বর্তমান সদস্য</a>
    <a href="running_member.php" class="btn btn-sm btn-secondary ml-2">বর্তমান সদস্য</a>
    <a href="running_member.php" class="btn btn-sm btn-secondary ml-2">বর্তমান সদস্য</a>

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



  <div class="container-fluid">
  <!-- member add Section -->
  <section class="page-section Custom-form" ng-app="myApp" ng-controller="myCtrl">
    <div class="container">
      <div class="row justify-content-center mt-3">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
      <div class="user-form mt-3">

            <form action="insert.php" method="POST" enctype="multipart/form-data" autocomplete="off" onsubmit="return check_blank()">
                <div class="row justify-content-center" >
                  <div class="col-md-6" >
                      <input class="mt-3" id="m_name"  type="text" ng-model="name" name="m_name"  placeholder="নাম*"><br>
                      <input class="mt-3" id="f_name"  type="text" name="f_name" placeholder="পিতার নাম"><br>
                      <input class="mt-3"  type="text" ng-model="phone_no" id="phone_no" name="phone_no"  placeholder="ফোন নাম্বার*"><br>
                      <input class="mt-3" type="text"  name="refer_name" placeholder="জামিনদারের নাম"><br>
                      <input class="mt-3" type="text"  name="present_addr"  placeholder="বর্তমান ঠিকানা"><br>
                      <input class="mt-3" type="text"  name="permanent_addr"  placeholder="স্থায়ী ঠিকানা"><br>
                      <input type="hidden" name="size" value="1000000">  
                      <input type="file" name="image">
                      
                </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                      <input class="mt-3" type="number" name="loan_sirial"  placeholder="ঋণ নং"><br>
                      <input class="mt-3" name="loan_date" type="text" id="datepicker" placeholder="তারিখ*" min="2010-01-01" value="">
                      <input class="mt-3" id="loan_amount" type="number" ng-model="loan_amount" name="loan_amount"  placeholder="ঋণের পরিমাণ*"><br>
                      <input class="mt-3" id="profit_amount" type="number" ng-model="profit" name="profit_amount"  placeholder="মুনাফার পরিমাণ*"><br>
                      <input class="mt-3" type="number" name="total_amount"  placeholder="মোট টাকা" value="{{loan_amount + profit}}"><br>
                      <input class="mt-3" type="number" name="premier_amount" ng-model="premier"  placeholder="কিস্তির পরিমাণ"><br>
                      <input class="mt-3" type="number" name="savings_amount"  placeholder="সঞ্চয়ের পরিমাণ"><br>
                  </div>   
                </div>
                <button  type="submit" name="img_upload"   class="btn btn-info mt-5 text-white btn-block" ><i class="fas fa-user-plus"></i>  নিবন্ধন করুন</button>       
            </form> 




            
            <script  >

            function check_blank() {
              var name =document.getElementById('m_name').value;
              var phone =document.getElementById('phone_no').value;
              var date =document.getElementById('datepicker').value;
              var loan_amount =document.getElementById('loan_amount').value;
              var profit_amount =document.getElementById('profit_amount').value;
              if(name == "", phone == "", date == "", loan_amount == '', profit_amount == '' ){            
                Swal.fire({
                    title: '<strong>গুরুত্বপূর্ণ ঘরগুলো পূরন করুন</strong>',
                    type: 'info',
                    html:
                      '<b>নাম, মোবাইল নাম্বার, তারিখ, ঋণের পরিমাণ ইত্যাদি পরবর্তীতে প্রয়োজন হতে পারে</b>' 
                      ,
                    showCloseButton: true,
                    focusConfirm: true,
                    confirmButtonText:
                      ' OK ',
                    confirmButtonAriaLabel: 'Thumbs up, great!',
                    
                  })
                return false;
              }else{
                Swal.fire(
                  'তথ্য নিবন্ধিত হয়েছে',
                  'You clicked the button!',
                  'success'
                );
              }
            }
       </script>



          </div>
        
        </div>
        <div class="col-md-4 col-lg-4 mobile_hide mt-3">
            <h4 class="mb-4">সদস্যের নাম: <span class="text-right" ng-bind="name"></span></h4>
          
              <table class="table table-striped">
                  <tr>
                    <th class="text-dark">ঋণের পরিমান:</th>
                    <th class="text-right"><span ng-bind="loan_amount"></span></th>
                  </tr>
                  <tr>
                    <td>মুনাফা:</td>
                    <td class="text-right" ng-bind="profit"></td>
                  </tr>
                  <tr>
                      <td>মোট টাকা:</td>
                      <td class="text-right">{{loan_amount + profit}}</td>
                    </tr>
                    <tr>
                      <td>কিস্তির হার:</td>
                      <td class="text-right">{{(loan_amount + profit) / premier | number : 2 }}</td>
                    </tr>
                    <tr>
                      <td>কিস্তির সংখ্যা:</td>
                      <td class="text-right">{{premier }}</td>
                    </tr>
                </table>
       
          
        </div>
      </div>
    </div>
  


  </section>

</div>

  </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->








<!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
       crossorigin="anonymous"></script>

       <script type="text/javascript" src="js/main.js"></script>
       
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
           crossorigin="anonymous"></script>

       <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

    
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> 
     <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="js/angular.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/sweetalert2.all.min.js" ></script>



</body>

</html> 


