<!DOCTYPE html>
<html lang="zxx">
<?php 
/*
if(!isset($_SESSION['user_id'])){
header("location:Logout");
}*/
?>
<head>
  <title>Find Your Match In the Event</title>
  <!--meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);
    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!--booststrap-->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" media="all">
  <!--//booststrap end-->
  <!-- font-awesome icons -->
  <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet">
  <!-- //font-awesome icons -->
  <!--stylesheets-->
  <link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' media="all">
  <!--//stylesheets-->
  <link href="//fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
		
  <style>
  /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}
/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5px auto; /* 15% from the top and centered */
  border: 1px solid #888;
  text-align: center;
  width: 40%; /* Could be more or less, depending on screen size */
}
/* The Close Button 
.close {
  /* Position it in the top right corner outside of the modal 
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}
/* Close button on hover 
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
*/
/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}
@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}
@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}

.dropbtn {
  color: #FF0000;
  font-size: 14px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #7dcef3;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #7dcef3;}
</style>
</head>
<header>
  <!-- //banner -->
  <div class="banner-left-side" id="home">
    <!-- header -->
    <div class="headder-top">
      <!-- nav -->
      <nav>
        <div id="logo">
          <h1>
            <a href="<?php echo base_url();?>"> Explore World</a>
          </h1>
        </div>
        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop">
        <ul class="menu mt-2">
          <li class="active">
            <a href="<?php echo base_url();?>">Home</a>
          </li>
          <li>
            <a href="<?php echo base_url();?>#about">About</a>
          </li>
          <li>
            <a href="<?php echo base_url();?>#service">Services</a>
          </li>
          <li>
            <li>
              <a href="<?php echo base_url();?>#gallery">Gallery</a>
            </li>
            <li>
              <a href="<?php echo base_url();?>#booking">Booking</a>
            </li>
            <li>
              <a href="<?php echo base_url();?>#contact">Contact Us</a>
            </li>
              <!-- Button to open the modal login form -->
		<?php 
      if(isset($_SESSION['user_id'])){
	    $user_id= $_SESSION['user_id'];
      $user_name= $this->Main_model->get_user_name($user_id);
    ?>
    <li>
		<div class="dropdown">
			<a class="dropbtn"><?php  echo $user_name['userNameData']['0']['name'] ;?></a>
			<div class="dropdown-content">
			<a href="<?php echo base_url();?>Profile/show_profile">Profile</a>
			<a href="<?php echo base_url();?>Logout">Logout</a>
			</div>
		</div>
	</li>
    <?php }else{ ?>
              <button class ="btn" style="border-radius: 40%; padding: 10px 30px; background-color: #7dcef3;" onclick="document.getElementById('id01').style.display='block'">Login</button>
		<?php }?>
        </ul>
      </nav>
      <!-- //nav -->
    </div>
    <!-- //header -->
    <div class="col-lg-10"  align="center" >
	<br>
		<?php if($this->session->flashdata('message')=='Loggedin successfully' || $this->session->flashdata('message')=='Registered Successfully you can verify and Login' || $this->session->flashdata('message')=='Successfully Added' || $this->session->flashdata('message')=='Message Sent Successfully'|| $this->session->flashdata('message')=='Subscribe Successfully'){ ?>
		<div class="col-lg-3 alert alert-success" id="s_f_msg" align="center"><?php  echo $this->session->flashdata('message'); ?></div>
		<?php }elseif($this->session->flashdata('message')=='Wrong Username Or Password'||$this->session->flashdata('message')=='Something Went Wrong!'){ ?>
		<div class="col-lg-3 alert alert-danger" id="s_f_msg" align="center"><?php  echo $this->session->flashdata('message'); ?></div>
		<?php } ?>
	</div>
  <script>
  function timedMsg(){
    var t=setTimeout("document.getElementById('s_f_msg').style.display='none';",3000);
  }
  </script>
    <!-- banner -->
    <div class="main-banner">
      <div class="container">
        <div class="banner-position-main">
          <div class="banner-right-txt">
            <h5 class="mb-sm-3 mb-2">Thrill & Joy</h5>
            <h4>Find Your Perfect Match</h4>
			<script language="JavaScript" type="text/javascript">timedMsg()</script>
          </div>
        </div>
      </div>
    </div>
<!-- The Modal -->
<div id="id01" class="modal">
  <!--<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
-->
  <!-- Modal Content -->
  <form class="modal-content animate" action="<?php echo base_url();?>Home/Login" method="POST">
    <div class="imgcontainer col-lg-12">
      <img src="<?php echo base_url();?>assets/images/logo.png" height="200px" width="200px" alt="Logo" class="avatar"><br><br>
      
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" id="username" required><br><br>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="password" required><br><br>

      <button submit="submit" class="btn col-lg-9 btn-primary">Login</button><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
    <br>
  </form>
    <div class="container" style="background-color:#f1f1f1; padding:4px; width:40%; height:auto;" align="center">
      <span class="password"><a href="#">Forgot password?</a></span> 
      <span class="password"><a href="<?php echo base_url();?>Home/Register"><button class="btn btn-success">Register</button></a></span> 
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-danger cancelbtn">Cancel</button>
    </div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

  </div>
  <!-- //banner -->
  </header>