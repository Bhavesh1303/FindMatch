<?php include 'include/top_header.php' ; ?>
<html>
   <head>
   <body class= "px-navbar-fixed">
      <!-- start navigation -->
    <?php include 'include/navigation.php';?>
    <!-- end navigation -->
    <?php include 'include/header.php' ; ?>
      <div class="px-content">
      <div class="page-header">
         <h1><span class="text-muted font-weight-light"><i class="page-header-icon ion-android-checkbox-outline"></i>View Principal</span></h1>
      </div>
      <div class="panel">
         
               <div class="panel-body">
		 <p align="Left"><a href="javascript:window.history.go(-1);"><button class="btn btn-warning"><i class="px-nav-icon fa fa-reply"></i>Back</button></a></p>
            <hr /> 
              
        <div class="form-group panel-block">
		<br />
		
		<div class="row">
		<div class="col-lg-8">

           <div class="row">
            <div class="col-lg-3">
			<label><strong>Full Name</strong></label>
			</div>
			<div class="col-lg-1">: </div>
			<div class="col-lg-6">
			<label><?php echo $directoreditdata['directoreditdata']['director_name'];?></label>
			</div>
			</div>
			
            <div class="row">
            <div class="col-lg-3">
			<label><strong>Mobile Number</strong></label>
			</div>
			<div class="col-lg-1">: </div>
			<div class="col-lg-6">
			<label><?php echo $directoreditdata['directoreditdata']['director_mobile_no'];?></label>
			</div>
			</div>
            
			<div class="row">
            <div class="col-lg-3">
			<label><strong>Email</strong></label>
			</div>
			<div class="col-lg-1">: </div>
			<div class="col-lg-6">
			<label><?php echo $directoreditdata['directoreditdata']['director_email_id'];?></label>
			</div>
			</div>
			
             <div class="row">
            <div class="col-lg-3">
			<label><strong>Date Of Birth</strong></label>
			</div>
			<div class="col-lg-1">: </div>
			<div class="col-lg-6">
			<label><?php echo date('d-m-Y', strtotime($directoreditdata['directoreditdata']['diretor_dob']));?></label>
			</div>
			</div>
              
             <div class="row">
            <!--<div class="col-lg-3">
			<label><strong>Date Of Birth (in word)</strong></label>
			</div>
			<div class="col-lg-1">: </div>
			<div class="col-lg-6">
			<label>
			<?php 
			/*$number= date('d', strtotime($directoreditdata['directoreditdata']['diretor_dob']));
			$ends= array('th','st','nd','rd','th','th','th','th','th','th');
			
			if (($number %100) >= 11 && ($number%100) <= 13)
			$abbreviation = $number. 'th';
			else
			$abbreviation = $number. $ends[$number % 10];
		
			$month = date(' - F - ', strtotime($directoreditdata['directoreditdata']['diretor_dob']));
			
			$yr= date('Y', strtotime($directoreditdata['directoreditdata']['diretor_dob']));
			$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
			$year= $f->format($yr);
			
			echo $inWord= $abbreviation.$month.$year;*/
			?></label>
			</div>-->
			</div>
			
            <div class="row">
            <div class="col-lg-3">
			<label><strong>Address</strong></label>
			</div>
			<div class="col-lg-1">: </div>
			<div class="col-lg-6">
			<label><?php echo $directoreditdata['directoreditdata']['director_address'];?></label>
			</div>
			</div>
            
             <div class="row">
            <div class="col-lg-3">
			<label><strong>Gender</strong></label>
			</div>
			<div class="col-lg-1">: </div>
			<div class="col-lg-6">
			<label><?php echo $directoreditdata['directoreditdata']['director_gender'];?></label>
			</div>
			</div>

           <!--<div class="row">
            <div class="col-lg-6">
			<label><strong>College Id</strong></label>
			</div>
			<div class="col-lg-1">: </div>
			<div class="col-lg-6">
			<label><?php //echo $directoreditdata['directoreditdata']['director_clg_id'];?></label>
			</div>
			</div>-->
            
			<div class="row">
            <div class="col-lg-3">
			<label><strong>Date Of Joining</strong></label>
			</div>
			<div class="col-lg-1">: </div>
			<div class="col-lg-6">
			<label><?php echo date('d-m-Y', strtotime($directoreditdata['directoreditdata']['director_date_of_joining']));?></label>
			</div>
			</div>
			
            
            <div class="row">
            <div class="col-lg-3">
			<label><strong>Organization</strong></label>
			</div>
			<div class="col-lg-1">: </div>
			<div class="col-lg-6">
			<label><?php echo $directoreditdata['directoreditdata']['organization_name'];?></label>
			</div>
			</div>  
          </div>
		  
		<div class="col-lg-4">
		
			<div class="text-right col-lg-12">
			<div class="studentpic">
			<img src="<?php echo site_url();?>upload/<?php if($directoreditdata['directoreditdata']['director_pic']!='')
			{echo $directoreditdata['directoreditdata']['director_pic'];}
			else{ echo 'user.png';} ?>" alt="Image Not Available" height="150" width="120"/>
			</div>
			</div>
			</div>
			
			</div>
           </div>
        
      </div>
      </div>
      </div>
      <?php include 'include/footerjs.php' ; ?>
      <?php include 'include/footer.php' ; ?>
	  
	  <script>

   $('#validation-form').pxValidate({
        ignore: '.ignore',
        focusInvalid: false,
        rules: {
          'txtFullName': {
            required:  true,
            minlength: 5,
            maxlength: 50,
          },
          
          'txtDob': {
            required: true,
          },
		  'txtDoj': {
            required: true,
          },
          
          'txtMobileNo': {
            required:  true,
            minlength: 10,
            maxlength: 10,
          },
		   
          'ConformPassword': {
            required:  true,
            minlength: 6,
            equalTo:   'input[name="password"]',
          },
          'postcode': {
            required:  true,
            minlength: 6,
            maxlength: 20,
          },
          'txtGender': {
            required: true,
          },
          'txtEmail': {
            required: true,
            email:    true,
          },
           'txtAddress': {
            required: true
          },

        },
      });


 </script>

    </body>

</html>