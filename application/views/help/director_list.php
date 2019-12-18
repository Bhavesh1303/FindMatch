<?php include 'include/top_header.php' ; ?>
    <head>
	<style media='print'>
.navStuff {
	display: none
}
.tab-content{border:none}
.mar10 {
	margin-top:-10px
}

#print tr td {
	vertical-align:top
}
@media print {
  a[href]:after {
    content: none !important;
  }
}
table tr td {text-align:center;padding:0px;}

</style>
      <body class= "px-navbar-fixed">
         <!-- start navigation -->
         <?php include 'include/navigation.php';?>
         <!-- end navigation -->
         <?php include 'include/header.php' ; ?>
         <div class="px-content ">
            <div class="page-header navStuff">
               <h1><span class="text-muted font-weight-light navStuff"><i class="page-header-icon ion-ios-keypad"></i>Principal/ </span>List</h1>
            </div>
            <div class="panel">
               <div class="panel-body">  
                 <?php if($this->session->flashdata('message')=='Data Inserted Successfully'){?>
          <div align="center" class="alert alert-success">      
            <?php echo $this->session->flashdata('message')?>
          </div>
        <?php }elseif($this->session->flashdata('message')=='Something went wrong..'){?>
          <div align="center" class="alert alert-danger">      
            <?php echo $this->session->flashdata('message')?>
          </div>
        <?php } ?>
                <p align="Left"><a href="javascript:window.history.go(-1);"><button class="btn btn-warning"><i class="px-nav-icon fa fa-reply"></i>Back</button></a></p>
            <hr />  
              
			 <ul class="nav nav-tabs navStuff">
                    <li class="active navStuff">                 
                 </ul> 
				 
				 
                 <div class="tab-content tab-content-bordered">
                    <div class="tab-pane fade active in" id="tabs-home">
                       <div class="table-primary">
                     <table class="table table-striped table-bordered" id="example">
					  
                        <thead>
                           <tr>
                              <th>S.no.</th>
                              <th>Name</th>
                              <th>Email</th>
							  <?php
                                if($user_type != 'Student')
                              {?>
                              <th>Mobile No.</th>
							  <?php
							  }?>
							  <?php
                              if($user_type === 'Admin')
                              { ?>
							  <th  width="80px" class= "navStuff">Action</th>
			                <?php } ?>
                           </tr>
                        </thead>
                        <tbody>
						<?php $count = 1 ;
                              if($directordata['flag']==1)  {
                                foreach($directordata['directordata'] as $val){
                                       ?> 
                              <tr>
                                <td><?php echo $count++ ;?></td>
                                <td><?php echo $val['director_name'];?></td>
                                <td><?php echo $val['director_email_id'];?></td>
								<?php
                                if($user_type != 'Student')
                                { ?>
                                <td><?php echo $val['director_mobile_no'];?></td>
								<?php
							     }?>
							  <?php
                                if($user_type === 'Admin')
                                 { ?>
								 <td align="center"  class= "navStuff"> 
								 <div class="btn-group">
  <button type="button" class="btn btn-warning">Action</button>
  <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="<?php echo site_url(); ?>DirectorController/view_director/<?php echo $val['id'];?>">View</a></li>
    <li><a class="dropdown-item" href="<?php echo site_url(); ?>DirectorController/edit_director/<?php echo $val['id'];?>">Edit</a></li>
    <li><a class="dropdown-item" href="<?php echo site_url(); ?>DirectorController/delete_director/<?php echo $val['id'];?>" onclick="return confirm('Do you want to delete this?');">Delete</a></li>
  </ul>
</div>
                         
                                </td>
			                   <?php } ?>
                              </tr>
							   <?php } }  ?> 
                       </tbody>
                     </table>
                  </div>
                  </div>
                    
                 </div>
              </div>

            </div>
         </div>
        
<?php include 'include/footer.php' ; ?>
<?php include 'include/footerjs.php' ; ?>
	

 <script type="text/javascript">
    // -------------------------------------------------------------------------
    // Initialize DEMO

    $(function() {
      var file = String(document.location).split('/').pop();

      // Remove unnecessary file parts
      file = file.replace(/(\.html).*/i, '$1');

      if (!/.html$/i.test(file)) {
        file = 'index.html';
      }

      // Activate current nav item
      $('body > .px-nav')
        .find('.px-nav-item > a[href="' + file + '"]')
        .parent()
        .addClass('active');

      $('body > .px-nav').pxNav();
      $('body > .px-footer').pxFooter();

      $('#navbar-notifications').perfectScrollbar();
      $('#navbar-messages').perfectScrollbar();
    });
  </script>

<script>
 var timeout = 3000; // in miliseconds (3*1000)
$('.alert').delay(timeout).fadeOut(300);
  </script>
      </body>
   </html>