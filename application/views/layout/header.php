<?php
if($this->session->userdata('user_data')){
    $sess=$this->session->userdata('user_data');
}
else{
    redirect(base_url('login'));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('assets')?>img/apple-icon.png">
 <link rel="icon" type="image/png" href="" sizes="32x32">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Autoscan|Inspection Panel
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?=base_url('assets')?>/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?=base_url('assets')?>/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?=base_url('assets')?>/demo/demo.css" rel="stylesheet" />
  <link href="<?=base_url('assets')?>/css/style.css" rel="stylesheet" />
  <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  .sidebar .nav i, .off-canvas-sidebar .nav i
  {
    color:black !important;
  }
.ca_menu{
      font-size: 12px;
        display: flex !important;
}
.ca_menu li{
    padding: 3px 10px;
    background: #b4b4b4;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    color: #FFF;
    border: 1px solid #0000001c;
    border-bottom: 0px;
    margin-left: 2px;
}
.ca_menu li>a{
    color: #FFF;
}

.ca_menu .active{
  background: #4b4948;
}
.block-header
{
    background: #b4b4b4;
    padding: 10px;
}
.main_nav 
{
    display: flex;
     font-size: 16px;
}
.main_nav li
{
    
   padding: 3px 20px;
    color: #FFF;
    margin-left: 2px;  
}
.main_nav li>a
{
    color: #FFF;
}
.w_80{
    width: 80px!important;
}
.tabl_back{
    background-color: rgba(0,0,0,0.03);
}
.form-group{
        margin-bottom: 5px !important;
}
label{
    font-weight: bold;
    display: block;
    font-size: 12px
}
  
  body{
   font-family: 'Roboto', Arial, Tahoma, sans-serif !important;
   font-size:12px;
  }
  .sidebar .nav li > a {
    font-size: 1em;
  }
  .panel-header-sm {
    height: 74px !important;
    padding-top: none !important;
  }
  .navbar
  {
     background:#b4b4b4 ;
  }
  .sidebar-wrapper
  {
    background: #FFF;
  }
  .sidebar .nav li > a {
    color:#000;
    font-weight:bold;
}
.main-panel .header 
  {
    margin-bottom:unset !important;
  }
  .card .btn  {
  color: #FFF !important;
  }
  .sidebar-wrapper
  {
    height:100vh !important;
  }
  .sidebar_10{
          width:80px !important;
        }
        .mainPanel_10px{
          width: calc(100% - 80px) !important;
        }
  .form-check input[type="checkbox"], .radio input[type="radio"] {
    opacity: 1;
    position: relative;
    visibility: unset;
}
  </style>
<body>
  <div class="wrapper ">
  	<!-- sidebar star -->
    <div class="sidebar" data-color=""><!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red |yellow"-->
      <div class="logo bg-white text-center">
        <span class="logo_span"><img src="https://www.autoscanbookvalue.com/public/images/logo.png" class="img-fluid" width="150"> </span>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
      
        <ul class="nav">
          <li class="active">
                        <a href="<?=base_url('Homecontroller/')?>">
                        <i class="fa fa-tachometer" aria-hidden="true"></i>
                            <span>Home</span>
                        </a>
                    </li>
                     <li >
                        <a href="<?=base_url('new-cases')?>">
                        <i class="fa fa-briefcase"></i>
                            <span>Cases</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url('create-coordinator')?>">
                        <i class="fa fa-user"></i>
                            <span>Manage Coordinator</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url('manage-field-executive')?>">
                        <i class="fa fa-user"></i>
                            <span>Manage FE</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url('agents')?>">
                        <i class="fa fa-user"></i>
                            <span>Mange Agents</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url('intimation-form')?>">
                        <i class="fa fa-list"></i>
                            <span>Intimation Form</span>
                        </a>
                    </li>
                   
                   
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                        <i class='fa fa-building'></i>
                            <span>Manage Companies</span>
                        </a>
                        <ul class="ml-menu list-unstyled">
                            <li class="text-left pl-5">
                                <a href="<?=base_url('insurance-companies')?>"><span>Add Insurance Company</span></a>
                            </li>
                            <li  class="text-left pl-5">
                            
                                <a href="<?=base_url('insurance-branch')?>">
                                  <span>Add Branch</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                   
                     <li>
                        <a href="<?=base_url('Homecontroller/create_task')?>">
                        <i class="fa fa-lock"></i>
                            <span>Password</span>
                        </a>
                    </li>
                     <li>
                        <a href="<?=base_url('logout')?>">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                            <span>Logout</span>
                        </a>
                    </li>
        </ul>
      </div>
</div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg py-3">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
           
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <button class="openbtn opennavbar" >☰</button>  
          <div class="collapse navbar-collapse " id="navigation">
          <ul class="navbar-nav list-unstyled m-0 main_nav">
                 <li class="active"><a href="">PreInspection</a></li>
                 <li class=""><a href="">New Intimation</a></li>
                 <li class=""><a href="">QC Summary</a></li>
                 <li class=""><a href="">Search</a></li>
                 <li class=""><a href="">MIS</a></li>
                 <li class=""><a href="">Worksheet</a></li>
            </ul>     
              <!-- here we paste or write logout code -->
              <ul class="list-unstyled main_nav ml-auto mb-0">
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="fa fa-user users_single-02"></i> 
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href=""
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                   Logout
                    </a>
                    <form id="logout-form" action="" method="POST" style="display: none;">
                   
                    </form>
                  </div>
                </li>
            </ul>
          </div>
        </div>
      </nav>
<script>
$(document).ready(function(){
  $(".opennavbar").click(function(){
    $(".main-panel").toggleClass('mainPanel_10px');
    $(".sidebar,.sidebar-wrapper").toggleClass('sidebar_10');
    $(".img-fluid").toggleClass("invisible mb-4");
    $("i").toggleClass("mb-4");
    $("span").toggleClass("d-none");
    $(".logo_span").toggleClass("d-block");
    $("a").toggleClass("shadow-none");
   
  });
});

</script>
<div class="content mt-n2 px-0">

     
      