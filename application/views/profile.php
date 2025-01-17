<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
html *{
    -webkit-font-smoothing: antialiased;
}
.h6, h6 {
    font-size: .75rem !important;
    font-weight: 500;
    font-family: Roboto,Helvetica,Arial,sans-serif;
    line-height: 1.5em;
    text-transform: uppercase;
}
.name h6 {
    margin-top: 10px;
    margin-bottom: 10px;
}
.navbar {
    border: 0;
    border-radius: 3px;
    padding: .625rem 0;
    margin-bottom: 20px;
    color: #555;
    background-color: #fff!important;
    box-shadow: 0 4px 18px 0 rgba(0,0,0,.12), 0 7px 10px -5px rgba(0,0,0,.15) !important;
    z-index: 1000 !important;
    transition: all 150ms ease 0s;
    
}
.navbar.navbar-transparent {
    z-index: 1030;
    background-color: transparent!important;
    box-shadow: none !important;
    padding-top: 25px;
    color: #fff;
}
.navbar .navbar-brand {
    position: relative;
    color: inherit;
    height: 50px;
    font-size: 1.125rem;
    line-height: 30px;
    padding: .625rem 0;
    font-weight: 300;
    -webkit-font-smoothing: antialiased;
}
.navbar .navbar-nav .nav-item .nav-link:not(.btn) .material-icons {
    margin-top: -7px;
    top: 3px;
    position: relative;
    margin-right: 3px;
}
.navbar .navbar-nav .nav-item .nav-link .material-icons {
    font-size: 1.25rem;
    max-width: 24px;
    margin-top: -1.1em;
}
.navbar .navbar-nav .nav-item .nav-link .fa, .navbar .navbar-nav .nav-item .nav-link .material-icons {
    font-size: 1.25rem;
    max-width: 24px;
    margin-top: -1.1em;
}
.navbar .navbar-nav .nav-item .nav-link {
    position: relative;
    color: inherit;
    padding: .9375rem;
    font-weight: 400;
    font-size: 12px;
    border-radius: 3px;
    line-height: 20px;
}
a .material-icons {
    vertical-align: middle;
}
.fixed-top {
    position: fixed;
    z-index: 1030;
    left: 0;
    right: 0;
}
.profile-page .page-header {
    height: 380px;
    background-position:center;
}
.page-header {
    height: 100vh;
    background-size: cover;
    margin: 0;
    padding: 0;
    border: 0;
    display: flex;
    align-items: center;
}
.header-filter:after, .header-filter:before {
    position: absolute;
    z-index: 1;
    width: 100%;
    height: 100%;
    display: block;
    left: 0;
    top: 0;
    content: "";
}
.header-filter::before {
    background: rgba(0,0,0,.5);
}
.main-raised {
    margin: -60px 30px 0;
    border-radius: 6px;
    box-shadow: 0 16px 24px 2px rgba(0,0,0,.14), 0 6px 30px 5px rgba(0,0,0,.12), 0 8px 10px -5px rgba(0,0,0,.2);
}
.main {
    background: #FFF;
    position: relative;
    z-index: 3;
}
.profile-page .profile {
    text-align: center;
}
.profile-page .profile img {
    max-width: 160px;
    width: 100%;
    margin: 0 auto;
    -webkit-transform: translate3d(0,-50%,0);
    -moz-transform: translate3d(0,-50%,0);
    -o-transform: translate3d(0,-50%,0);
    -ms-transform: translate3d(0,-50%,0);
    transform: translate3d(0,-50%,0);
}
.img-raised {
    box-shadow: 0 5px 15px -8px rgba(0,0,0,.24), 0 8px 10px -5px rgba(0,0,0,.2);
}
.rounded-circle {
    border-radius: 50%!important;
}
.img-fluid, .img-thumbnail {
    max-width: 100%;
    height: auto;
}
.title {
    margin-top: 30px;
    margin-bottom: 25px;
    min-height: 32px;
    color: #3C4858;
    font-weight: 700;
    font-family: "Roboto Slab","Times New Roman",serif;
}
.profile-page .description {
    margin: 1.071rem auto 0;
    max-width: 600px;
    color: #999;
    font-weight: 300;
}
p {
    font-size: 14px;
    margin: 0 0 10px;
}
.profile-page .profile-tabs {
    margin-top: 4.284rem;
}
.nav-pills, .nav-tabs {
    border: 0;
    border-radius: 3px;
    padding: 0 15px;
}
.nav .nav-item {
    position: relative;
    margin: 0 2px;
}
.nav-pills.nav-pills-icons .nav-item .nav-link {
    border-radius: 4px;
}
.nav-pills .nav-item .nav-link.active {
    color: #fff;
    background-color: #9c27b0;
    box-shadow: 0 5px 20px 0 rgba(0,0,0,.2), 0 13px 24px -11px rgba(156,39,176,.6);
}
.nav-pills .nav-item .nav-link {
    line-height: 24px;
    font-size: 12px;
    font-weight: 500;
    min-width: 100px;
    color: #555;
    transition: all .3s;
    border-radius: 30px;
    padding: 10px 15px;
    text-align: center;
}
.nav-pills .nav-item .nav-link:not(.active):hover {
    background-color: rgba(200,200,200,.2);
}
.nav-pills .nav-item i {
    display: block;
    font-size: 30px;
    padding: 15px 0;
}
.tab-space {
    padding: 20px 0 50px;
}
.profile-page .gallery {
    margin-top: 3.213rem;
    padding-bottom: 50px;
}
.profile-page .gallery img {
    width: 100%;
    margin-bottom: 2.142rem;
}
.profile-page .profile .name{
    margin-top: -80px;
}
img.rounded {
    border-radius: 6px!important;
}
.tab-content>.active {
    display: block;
}
/*buttons*/
.btn {
    position: relative;
    padding: 12px 30px;
    margin: .3125rem 1px;
    font-size: .75rem;
    font-weight: 400;
    line-height: 1.428571;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 0;
    border: 0;
    border-radius: .2rem;
    outline: 0;
    transition: box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1);
    will-change: box-shadow,transform;
}
.btn.btn-just-icon {
    font-size: 20px;
    height: 41px;
    min-width: 41px;
    width: 41px;
    padding: 0;
    overflow: hidden;
    position: relative;
    line-height: 41px;
}
.btn.btn-just-icon fa{
    margin-top: 0;
    position: absolute;
    width: 100%;
    transform: none;
    left: 0;
    top: 0;
    height: 100%;
    line-height: 41px;
    font-size: 20px;
}
.btn.btn-link{
    background-color: transparent;
    color: #999;
}
/* dropdown */
.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    float: left;
    min-width: 11rem !important;
    margin: .125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    background-color: #fff;
    background-clip: padding-box;
    border-radius: .25rem;
    transition: transform .3s cubic-bezier(.4,0,.2,1),opacity .2s cubic-bezier(.4,0,.2,1);
}
.dropdown-menu.show{
    transition: transform .3s cubic-bezier(.4,0,.2,1),opacity .2s cubic-bezier(.4,0,.2,1);
}
.dropdown-menu .dropdown-item:focus, .dropdown-menu .dropdown-item:hover, .dropdown-menu a:active, .dropdown-menu a:focus, .dropdown-menu a:hover {
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(156,39,176,.4);
    background-color: #9c27b0;
    color: #FFF;
}
.show .dropdown-toggle:after {
    transform: rotate(180deg);
}
.dropdown-toggle:after {
    will-change: transform;
    transition: transform .15s linear;
}
.dropdown-menu .dropdown-item, .dropdown-menu li>a {
    position: relative;
    width: auto;
    display: flex;
    flex-flow: nowrap;
    align-items: center;
    color: #333;
    font-weight: 400;
    text-decoration: none;
    font-size: .8125rem;
    border-radius: .125rem;
    margin: 0 .3125rem;
    transition: all .15s linear;
    min-width: 7rem;
    padding: 0.625rem 1.25rem;
    min-height: 1rem !important;
    overflow: hidden;
    line-height: 1.428571;
    text-overflow: ellipsis;
    word-wrap: break-word;
}
.dropdown-menu.dropdown-with-icons .dropdown-item {
    padding: .75rem 1.25rem .75rem .75rem;
}
.dropdown-menu.dropdown-with-icons .dropdown-item .material-icons {
    vertical-align: middle;
    font-size: 24px;
    position: relative;
    margin-top: -4px;
    top: 1px;
    margin-right: 12px;
    opacity: .5;
}
/* footer */
footer{
    margin-top: 10px;
    color: #555;
    padding: 25px;
    font-weight: 300;
    
}
.footer p{
    margin-bottom: 0;
    font-size: 14px;
    margin: 0 0 10px;
    font-weight: 300;
}
footer p a{
    color: #555;
    font-weight: 400;
}
footer p a:hover {
    color: #9f26aa;
    text-decoration: none;
}

#problemtext, #problemanswer{    
    display: inline;
}
</style>
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
</head>

<body class="profile-page">
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('<?php echo base_url();?>assets/images/background.jpg');"></div>
    <div class="main main-raised">
		<div class="profile-content">
    
        <div id="logo" ><!--style="text-align:right;"-->
          <h1>
            <a href="<?php echo base_url();?>Home" style="font-family: serif;"> FYMIE</a>
          </h1>
        </div>
            <div class="container">
			<?php 
				$user_id= $_SESSION['user_id'];
        $user_name= $this->Main_model->get_user_name($user_id);
        $user_interest= $this->Main_model->get_user_interest($user_id);
			?>
                <div class="row">
	                <div class="col-md-6 ml-auto mr-auto">
        	           <div class="profile">
	                        <div class="avatar">
							    <img src="<?php echo base_url();?>upload/User_images/<?php if($user_name['userNameData']['user_photo']!='')
			{echo $user_name['userNameData']['user_photo'];}
			else{ echo 'default.png';} ?>" alt="Circle Image" class="img-raised rounded-circle img-fluid">
							
        <!--<img src="<?php  echo $user_name['userNameData']['name'] ;?>" alt="Circle Image" class="img-raised rounded-circle img-fluid">
	                        -->
							</div>
	                        <div class="name">
	                            <h3 class="title"><?php  echo $user_name['userNameData']['name'] ;?></h3>
								<h5><i><?php  echo $user_name['userNameData']['gender'] ;?></i></h5>
								<h5><?php  echo $user_name['userNameData']['mobile_no'] ;?></h5>
	                        </div>
	                    </div>
    	            </div>
                </div>
                <div class="description text-center">
                    <p><?php  echo $user_name['userNameData']['description'] ;?> & my interest's are </p>
                </div>
                <div class="description text-center">
                    <p>
                    <?php  
                    
                    if($user_interest['flag']==1){

                      if($user_interest['userInterestData']['reading']) 
                      echo 'Reading';
                      if($user_interest['userInterestData']['movies']) 
                      echo ' Movies';
                      if($user_interest['userInterestData']['outing']) 
                      echo ' Outing';
                      if($user_interest['userInterestData']['clubing']) 
                      echo ' Clubing';
                      if($user_interest['userInterestData']['painting']) 
                      echo ' Painting';
                      if($user_interest['userInterestData']['music']) 
                      echo ' Music';
                      if($user_interest['userInterestData']['adventure']) 
                      echo ' Adventure';
                      if($user_interest['userInterestData']['gaming']) 
                      echo ' Gaming';
                      if($user_interest['userInterestData']['sports']) 
                      echo ' Sports';
                      if($user_interest['userInterestData']['DIYs']) 
                      echo ' DIYs';
                      if($user_interest['userInterestData']['studying']) 
                      echo ' Studying';
                      if($user_interest['userInterestData']['cooking']) 
                      echo '  Cooking';
                      } 
                      else
                      {
                        echo 'Fill Your Interest Form';
                      }
                      ?></p>
                </div>
				<div class="row">
					<div class="col-md-6 ml-auto mr-auto">
                        <div class="profile-tabs">
                          <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#booking" role="tab" data-toggle="tab">
                                  <i class="material-icons">camera</i>
                                  My Bookings
                                </a>
                            </li>
                            <!--<li class="nav-item">
                                <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                                  <i class="material-icons">palette</i>
                                    Work
                                </a>
                            </li>-->
                            <li class="nav-item">
                                <a class="nav-link" href="#interest" role="tab" data-toggle="tab">
                                  <i class="material-icons">favorite</i>
                                    Interest Form
                                </a>
                            </li>
                          </ul>
                        </div>
    	    	</div>
            </div>
        
          <div class="tab-content tab-space text-center">
            <div class="tab-pane active gallery" id="booking">
           
  				<div class="" cling="center">
          <?php 
          $booked_event= $this->booking_model->get_booked_event($user_id);
			
          if($booked_event['flag']==1){
          foreach($booked_event['bookedEventData'] as $val){
		      ?>
              <div id="problemtext">
              <img src="<?php echo base_url();?>upload/Event_images/<?php echo $val['e_photo']; ?>" style="height:200px;width:300px;"  alt="Event Image" >
              </div>
              <div id="problemanswer" >
          <h5><?php echo $val['e_name']; echo " - ("; echo date("d-m-Y", strtotime($val['e_date'])); echo " ) ";  ?></h5>
          <p class="pt-lg-3 pt-2" style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;"><?php echo $val['e_desc'];?></p>
          <?php echo "Price: "; echo $val['e_price'];?><br/><br/>
              </div>
          <?php 
		    	}
	    		}else{
            ?>
            <label style="font-family: serif;">You have not book any event yet</label>
            <?php
          }
	      	?>
  				</div>
  			</div>
            <!--<div class="tab-pane text-center gallery" id="works">
      			<div class="row">
      				<div class="col-md-3 ml-auto">
                      <img src="https://images.unsplash.com/photo-1524498250077-390f9e378fc0?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=83079913579babb9d2c94a5941b2e69d&auto=format&fit=crop&w=751&q=80" class="rounded">
  					  <img src="https://images.unsplash.com/photo-1506667527953-22eca67dd919?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6326214b7ce18d74dde5e88db4a12dd5&auto=format&fit=crop&w=750&q=80" class="rounded">
  					  <img src="https://images.unsplash.com/photo-1505784045224-1247b2b29cf3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ec2bdc92a9687b6af5089b335691830e&auto=format&fit=crop&w=750&q=80" class="rounded">  					</div>
      				<div class="col-md-3 mr-auto">
                      <img src="https://images.unsplash.com/photo-1504346466600-714572c4b726?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6754ded479383b7e3144de310fa88277&auto=format&fit=crop&w=750&q=80" class="rounded">
                      <img src="https://images.unsplash.com/photo-1494028698538-2cd52a400b17?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=83bf0e71786922a80c420c17b664a1f5&auto=format&fit=crop&w=334&q=80" class="rounded">
      				</div>
      			</div>
  			</div>-->
            <div class="tab-pane text-center gallery" id="interest">
      			<div class=" " style="" >
            <?php  
            if($user_interest['flag']==1){ ?>
              <form action="<?php echo base_url();?>Profile/update_interest"  method="post">
              <input  id="hdnid" name="hdnid" type="hidden" value="<?php echo $user_id;?>"  /> 
              <p><h2>Select Your Interest</h2></p>
              <input type="checkbox" name="Reading" value="1"> Reading<br/>
              <input type="checkbox" name="Movies" value="1"> Movies<br/>
              <input type="checkbox" name="Outing" value="1"> Outing<br/>
              <input type="checkbox" name="Clubing" value="1"> Clubing<br/>
              <input type="checkbox" name="Painting" value="1"> Painting<br/>
              <input type="checkbox" name="Music" value="1"> Music<br/>
              <input type="checkbox" name="Adventure" value="1"> Adventure<br/>
              <input type="checkbox" name="Gaming" value="1"> Gaming<br/>
              <input type="checkbox" name="Sports" value="1"> Sports<br/>
              <input type="checkbox" name="DIYs" value="1"> DIYs<br/>
              <input type="checkbox" name="Studying" value="1"> Studying<br/>
              <input type="checkbox" name="Cooking" value="1"> Cooking<br/>
              <br/>
          <div class="row" style="text-align: center;">
          <div class="col-lg-12">
          <input type="submit" class="col-lg-3 btn btn-primary" value="Update Interest">
          </div>
          </div>
              </form>
            <?php 
            }
            else{ ?>
            <form action="<?php echo base_url();?>Profile/interest_form"  method="post">
            <p><h2>Select Your Interest</h2></p>
            <input type="checkbox" name="Reading" value="1"> Reading<br/>
            <input type="checkbox" name="Movies" value="1"> Movies<br/>
            <input type="checkbox" name="Outing" value="1"> Outing<br/>
            <input type="checkbox" name="Clubing" value="1"> Clubing<br/>
            <input type="checkbox" name="Painting" value="1"> Painting<br/>
            <input type="checkbox" name="Music" value="1"> Music<br/>
            <input type="checkbox" name="Adventure" value="1"> Adventure<br/>
            <input type="checkbox" name="Gaming" value="1"> Gaming<br/>
            <input type="checkbox" name="Sports" value="1"> Sports<br/>
            <input type="checkbox" name="DIYs" value="1"> DIYs<br/>
            <input type="checkbox" name="Studying" value="1"> Studying<br/>
            <input type="checkbox" name="Cooking" value="1"> Cooking<br/>
            <br/>
				<div class="row" style="text-align: center;">
				<div class="col-lg-12">
				<input type="submit" class="col-lg-3 btn btn-primary" value="Submit">
				</div>
				</div>
            </form>
              <?php } ?>
      			</div>
      		</div>
          </div>

        
            </div>
        </div>
	</div>
	
	<footer class="footer text-center ">
		<?php include('footer.php'); ?>
	</footer>
    
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

</body>
<script>
var big_image;
$(document).ready(function() {
  BrowserDetect.init();
  // Init Material scripts for buttons ripples, inputs animations etc, more info on the next link https://github.com/FezVrasta/bootstrap-material-design#materialjs
  $('body').bootstrapMaterialDesign();
  window_width = $(window).width();
  $navbar = $('.navbar[color-on-scroll]');
  scroll_distance = $navbar.attr('color-on-scroll') || 500;
  $navbar_collapse = $('.navbar').find('.navbar-collapse');
  //  Activate the Tooltips
  $('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();
  // Activate Popovers
  $('[data-toggle="popover"]').popover();
  if ($('.navbar-color-on-scroll').length != 0) {
    $(window).on('scroll', materialKit.checkScrollForTransparentNavbar);
  }
  materialKit.checkScrollForTransparentNavbar();
  if (window_width >= 768) {
    big_image = $('.page-header[data-parallax="true"]');
    if (big_image.length != 0) {
      $(window).on('scroll', materialKit.checkScrollForParallax);
    }
  }
});
$(document).on('click', '.navbar-toggler', function() {
  $toggle = $(this);
  if (materialKit.misc.navbar_menu_visible == 1) {
    $('html').removeClass('nav-open');
    materialKit.misc.navbar_menu_visible = 0;
    $('#bodyClick').remove();
    setTimeout(function() {
      $toggle.removeClass('toggled');
    }, 550);
    $('html').removeClass('nav-open-absolute');
  } else {
    setTimeout(function() {
      $toggle.addClass('toggled');
    }, 580);
    div = '<div id="bodyClick"></div>';
    $(div).appendTo("body").click(function() {
      $('html').removeClass('nav-open');
      if ($('nav').hasClass('navbar-absolute')) {
        $('html').removeClass('nav-open-absolute');
      }
      materialKit.misc.navbar_menu_visible = 0;
      $('#bodyClick').remove();
      setTimeout(function() {
        $toggle.removeClass('toggled');
      }, 550);
    });
    if ($('nav').hasClass('navbar-absolute')) {
      $('html').addClass('nav-open-absolute');
    }
    $('html').addClass('nav-open');
    materialKit.misc.navbar_menu_visible = 1;
  }
});
materialKit = {
  misc: {
    navbar_menu_visible: 0,
    window_width: 0,
    transparent: true,
    fixedTop: false,
    navbar_initialized: false,
    isWindow: document.documentMode || /Edge/.test(navigator.userAgent)
  },
  initFormExtendedDatetimepickers: function() {
    $('.datetimepicker').datetimepicker({
      icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
      }
    });
  },
  initSliders: function() {
    // Sliders for demo purpose
    var slider = document.getElementById('sliderRegular');
    noUiSlider.create(slider, {
      start: 40,
      connect: [true, false],
      range: {
        min: 0,
        max: 100
      }
    });
    var slider2 = document.getElementById('sliderDouble');
    noUiSlider.create(slider2, {
      start: [20, 60],
      connect: true,
      range: {
        min: 0,
        max: 100
      }
    });
  },
  checkScrollForParallax: function() {
    oVal = ($(window).scrollTop() / 3);
    big_image.css({
      'transform': 'translate3d(0,' + oVal + 'px,0)',
      '-webkit-transform': 'translate3d(0,' + oVal + 'px,0)',
      '-ms-transform': 'translate3d(0,' + oVal + 'px,0)',
      '-o-transform': 'translate3d(0,' + oVal + 'px,0)'
    });
  },
  checkScrollForTransparentNavbar: debounce(function() {
    if ($(document).scrollTop() > scroll_distance) {
      if (materialKit.misc.transparent) {
        materialKit.misc.transparent = false;
        $('.navbar-color-on-scroll').removeClass('navbar-transparent');
      }
    } else {
      if (!materialKit.misc.transparent) {
        materialKit.misc.transparent = true;
        $('.navbar-color-on-scroll').addClass('navbar-transparent');
      }
    }
  }, 17)
};
// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.
function debounce(func, wait, immediate) {
  var timeout;
  return function() {
    var context = this,
      args = arguments;
    clearTimeout(timeout);
    timeout = setTimeout(function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    }, wait);
    if (immediate && !timeout) func.apply(context, args);
  };
};
var BrowserDetect = {
  init: function() {
    this.browser = this.searchString(this.dataBrowser) || "Other";
    this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || "Unknown";
  },
  searchString: function(data) {
    for (var i = 0; i < data.length; i++) {
      var dataString = data[i].string;
      this.versionSearchString = data[i].subString;
      if (dataString.indexOf(data[i].subString) !== -1) {
        return data[i].identity;
      }
    }
  },
  searchVersion: function(dataString) {
    var index = dataString.indexOf(this.versionSearchString);
    if (index === -1) {
      return;
    }
    var rv = dataString.indexOf("rv:");
    if (this.versionSearchString === "Trident" && rv !== -1) {
      return parseFloat(dataString.substring(rv + 3));
    } else {
      return parseFloat(dataString.substring(index + this.versionSearchString.length + 1));
    }
  },
  dataBrowser: [{
      string: navigator.userAgent,
      subString: "Chrome",
      identity: "Chrome"
    },
    {
      string: navigator.userAgent,
      subString: "MSIE",
      identity: "Explorer"
    },
    {
      string: navigator.userAgent,
      subString: "Trident",
      identity: "Explorer"
    },
    {
      string: navigator.userAgent,
      subString: "Firefox",
      identity: "Firefox"
    },
    {
      string: navigator.userAgent,
      subString: "Safari",
      identity: "Safari"
    },
    {
      string: navigator.userAgent,
      subString: "Opera",
      identity: "Opera"
    }
  ]
};
</script>