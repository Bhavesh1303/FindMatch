<?php include 'include/top_header.php' ; ?>
<html>
   <head>
   <style>
   img.director_pic {
    margin-left: 215px;
    margin-top: -50px;
    margin-bottom: 54px;
}

input[type="file"] {
    display: none;
}
.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}
   </style>
   </head>
   <body class= "px-navbar-fixed">
      <!-- start navigation -->
   <?php include 'include/navigation.php';?>
      <!-- end navigation -->
      <?php include 'include/header.php' ; ?>
      <div class="px-content">
      <div class="page-header">
         <h1><span class="text-muted font-weight-light"><i class="page-header-icon ion-android-checkbox-outline"></i>Add Principal</span></h1>
      </div>
      <div class="panel">
               <div class="panel-body">
		 <p align="Left"><a href="javascript:window.history.go(-1);"><button class="btn btn-warning"><i class="px-nav-icon fa fa-reply"></i>Back</button></a></p>
            <hr />  
         <form  method="post" id="validation-form" action="<?php echo site_url();?>DirectorController/director_add" class="panel-body form-horizontal form-bordered p-y-0" enctype="multipart/form-data">
            

            
 <div class="form-group row">
        
			
			  <div class="col-lg-3">
             <label class="control-label">Full Name</label>  <!--col-lg-3 -->  
             <input type="text" name="txtFullName" id="txtFullName" value="" class="form-control" autocomplete="off">
             </div>
			  
			  <div class="col-lg-3">
            <label class="control-label">Mobile Number</label>  <!--col-lg-3 -->  
            <input type="number" name="txtMobile" id="txtMobile" value="" class="form-control" autocomplete="off">
            </div>
		     
            <div class="col-lg-3">
            <label class="control-label">Email Id</label>  <!--col-lg-3 -->  
            <input type="text" name="txtEmail" id="txtEmail" value="" class="form-control" autocomplete="off">
            </div> 
			
			<div class="col-lg-3"> 
			<label class="control-label">Select Gender</label>
            <select name ="txtGender" name="txtGender" class="form-control">
			       <option value="">Select Gender</option>
                   <option value="Male">Male</option>
                   <option value="Female">Female</option>
                   <option value="Other">Other</option>
            </select>
            </div>
			
		</div>
			
 <div class="form-group row"> 
			<div class="col-lg-3">
            <label  class="control-label">Date Of Birth</label>  <!--col-lg-3 -->  
            <input type="text" name="txtDob" id="txtDob"  class="form-control" placeholder="YYYY-MM-DD"  autocomplete="off" readonly>
            </div>
			  
			<div class="col-lg-3">
            <label  class="control-label">Date Of Joining</label>  <!--col-lg-3 -->  
            <input type="text" name="txtDoj" id="txtDoj" class="form-control" placeholder="YYYY-MM-DD"  autocomplete="off" readonly>
            </div>
		</div>
		
 <div class="form-group row">
			<div class="col-lg-12"> 
			<label class="control-label">Address</label>
            <textarea name="txtAddress" id="txtAddress" class="form-control" autocomplete="off" placeholder="Address"></textarea>
            </div>
			
         </div>
	     
			
              <div class="form-group row">
                <div class="col-lg-3">
                <label class="control-label custom-file-upload"> <i class="fa fa-cloud-upload"></i>Profile Image <!--col-lg-3 -->  
                <input type="file" name="profilepic" id="profilepic"></label> 
                <script>
                $('#profilepic + embed').remove();
                $('#profilepic').after('<embed src="'+e.target.result+'" width="150" height="150">');
                </script>
                </div> 
				<br/>
                 <div class="text-right">
                    <button type="submit" name="submit" class="btn btn-primary">Add Director</button>
                 </div>
              </div>
      </form>
      </div>
      </div>
      </div>
      
            <?php include 'include/footer.php' ; ?>
			<?php include 'include/footerjs.php' ; ?>

 <script>

$('select[name=txtCourse]').val();
$('.selectpicker').selectpicker('refresh');

   $('#validation-form').pxValidate({
        ignore: '.ignore',
        focusInvalid: false,
        rules: {
          'txtFullName': {
            required:  true,
            minlength: 2,
            maxlength: 50,
          },
          'txtCourse': {
            required:  true, 
          },
          'txtDob': {
            required: true,
          },
          
          'txtMobile': {
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
          'optgender': {
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
  <script>
$("#profilepic").change(function () {
    filePreview(this);
});
 </script>
 <script>
 function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#profilepic + img').remove();
            $('#profilepic').after('<img class="profilepic" src="'+e.target.result+'"  width="150" height="150"/>');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
      </script>  
 
    </body>

          </html>