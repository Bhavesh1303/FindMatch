<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
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
        <div id="logo">
          <h1>
            <a href="<?php echo base_url();?>Home" style="font-family: serif;"> FYMIE</a>
          </h1>
        </div>
            <div class="container">
            <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html><html class=''>
<head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/oknoblich/pen/qcsih?depth=everything&order=popularity&page=87&q=mobile&show_forks=false" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<style class="cp-pen-styles">@import url("https://fonts.googleapis.com/css?family=Roboto");
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html, body {
  height: 100vh;
}

body {
  font: 12px/1 'Roboto', sans-serif;
  color: #555;
  background: #eee;
}

.header {
  padding: 30px 0;
  font-size: 20px;
  text-align: center;
  border-bottom: 1px solid #bbb;
}

.main {
  background: #fff;
}

.footer {
  padding: 30px 0;
  font-size: 14px;
  text-align: center;
  color: #aaa;
}

.footer .devices {
  margin: 0 0 15px;
  font-family: fontawesome;
  font-size: 35px;
}

.payments {
  min-width: 320px;
}

/*
* SVG Icons
**********************************************************/
svg {
  display: block;
  position: absolute;
  top: 2px;
  right: 15px;
  width: 45px;
  height: 45px;
}

svg.svg-debit {
  top: 5px;
  right: 17px;
  width: 40px;
  height: 40px;
}

svg.svg-visa {
  right: 125px;
}

svg.svg-master {
  right: 70px;
}

svg.svg-sofort {
  top: -8px;
  right: 8px;
  width: 65px;
  height: 65px;
}

.svg-cash-hand {
  fill: #FFCA65;
}

.svg-cash-thumb {
  stroke: #FBAD3E;
  fill: none;
}

.svg-cash-money {
  fill: #34b154;
}

.svg-cash-money-inner {
  fill: #fff;
  opacity: .4;
}

.svg-cash-shirt-inner {
  fill: #def;
}

.svg-cash-shirt-outer {
  fill: #07b;
}

.svg-debit-card {
  fill: #e5e5e5;
}

.svg-debit-data {
  fill: #bbb;
}

.svg-debit-sign {
  fill: #fff;
}

.svg-debit-read {
  fill: #555;
}

.svg-visa-border {
  fill: #005098;
}

.svg-visa-letter {
  fill: #005098;
}

.svg-visa-corner {
  fill: #F6A500;
}

.svg-master-border {
  fill: #E30613;
}

.svg-master-circle1 {
  fill: #E40520;
}

.svg-master-circle2 {
  fill: #FAB31E;
}

.svg-master-letter {
  fill: #fff;
}

.svg-amex-border {
  fill: #0098D0;
}

.svg-amex-letter {
  fill: #0098D0;
}

.svg-sofort-line1 {
  fill: #ee7f00;
}

.svg-sofort-line2 {
  fill: #383a41;
}

.svg-sofort-fill {
  fill: #fff;
}

.svg-click-border {
  fill: #FF8000;
}

.svg-click-logo {
  fill: #FF8000;
}

.svg-click-letter {
  fill: #FF8000;
}

.svg-click-letter-center {
  fill: #808080;
}

.svg-paypal-border {
  fill: #1B557D;
}

.svg-paypal-letter1to3 {
  fill: #1B557D;
}

.svg-paypal-letter4to6 {
  fill: #107DB0;
}

/*
* Buttons
**********************************************************/
.button {
  position: relative;
  height: 50px;
  padding: 0 0 0 50px;
  font-size: 14px;
  line-height: 48px;
  border-bottom: 1px solid #bbb;
  background: #fafafa;
  cursor: pointer;
}

.button:hover {
  background: #f5f5f5;
}

.button:after {
  content: '';
  position: absolute;
  top: 15px;
  left: 18px;
  display: block;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  box-shadow: inset 0 0 0 1px #bbb, inset 0 0 0 7px #fff;
  background: #fff;
}

.button:hover:after {
  background: #bbb;
}

.button.active:after {
  background: #555;
}

/*
* Breakpoint
**********************************************************/
@media all and (min-width: 500px) {
  svg {
    right: 25px;
    width: 55px;
    height: 55px;
  }

  svg.svg-debit {
    top: 4px;
    right: 27px;
    width: 50px;
    height: 50px;
  }

  svg.svg-visa {
    right: 175px;
  }

  svg.svg-master {
    right: 100px;
  }

  svg.svg-sofort {
    top: -14px;
    right: 15px;
    width: 85px;
    height: 85px;
  }

  .button {
    height: 60px;
    padding: 0 0 0 60px;
    font-size: 18px;
    line-height: 58px;
  }

  .button:after {
    top: 20px;
    left: 23px;
  }
}
/*
* Breakpoint
**********************************************************/
@media all and (min-width: 700px) {
  svg {
    top: auto !important;
    right: 0 !important;
    left: 0;
    margin: auto;
    bottom: 10px;
    width: 60px;
    height: 60px;
  }

  svg.svg-cash {
    bottom: 5px;
    width: 70px;
    height: 70px;
  }

  svg.svg-debit {
    width: 60px;
    height: 60px;
  }

  svg.svg-visa {
    bottom: 50px;
    width: 40px;
    height: 40px;
  }

  svg.svg-master {
    bottom: 25px;
    width: 40px;
    height: 40px;
  }

  svg.svg-amex {
    bottom: 0;
    width: 40px;
    height: 40px;
  }

  svg.svg-sofort {
    bottom: 0;
    width: 85px;
    height: 85px;
  }

  svg.svg-click {
    bottom: -2px;
    width: 90px;
    height: 90px;
  }

  svg.svg-paypal {
    bottom: -8px;
    width: 100px;
    height: 100px;
  }

  .svg-visa-border,
  .svg-master-border,
  .svg-amex-border,
  .svg-click-border,
  .svg-paypal-border {
    display: none;
  }

  .payments {
    max-width: 700px;
    margin: 0 auto;
    padding: 25px;
    overflow: hidden;
  }

  .button {
    float: left;
    width: 100px;
    height: 150px;
    margin-right: 10px;
    padding: 50px 0 0;
    font-size: 12px;
    line-height: 1;
    text-align: center;
    border: 0;
    border-radius: 3px;
    box-shadow: inset 0 0 0 1px #bbb;
  }

  .button:last-child {
    margin-right: 0;
  }

  .button:after {
    top: 15px;
    left: 40px;
  }

  .footer {
    border-top: 1px solid #bbb;
  }
}
</style></head><body>
<div class='header'>
   Payments
</div>

<div class="main">

  <div class='payments'>

    <div class='button active'>
      Cash

      <svg class="svg-cash" viewBox="0 0 512 512">
        <path class="svg-cash-hand" d="M106.908,147h56.33h96.607c22.139,0,31.855-0.384,37.188-0.055c5.463,0.334,10.715,2.463,17.723,7.55 c7.719,5.749,21.205,9.042,32.086,20.779c10.906,11.666,32.221,35.637,37.277,42.137c5.01,6.46,32.637,72.549-38.697,77.367 c-71.357,4.78-125.639-8.428-137.912-8.914c-12.289-0.485-31.773-5.975-51.424-10.815c-38.977-9.601-36.828-17.492-57.422-19.182 c-20.619-1.691-29.092-3.55-29.092-3.55L79.035,147H106.908z" />
        <path class="svg-cash-money" d="M426.537,100.903c0,0-49.463,56.124-93.143,92.677c-67.695,56.555-160.115,96.963-160.115,96.963 s36.949,80.367,46.809,121.462c53.283-30.399,150.305-93.938,189.299-124.44c35.197-27.506,95.736-99.566,95.736-99.566 L426.537,100.903z" />
        <path class="svg-cash-money-inner" d="M297.721,266.825c0,22.905,18.574,41.479,41.48,41.479 c22.908,0,41.482-18.574,41.482-41.479c0-22.919-18.574-41.481-41.482-41.481C316.295,225.344,297.721,243.906,297.721,266.825" />
        <path class="svg-cash-money-inner" d="M427.875,171.335c7.904,10.497,21.02,15.349,29.307,10.849 c8.346-4.563,8.65-16.735,0.715-27.284c-7.924-10.507-21.049-15.327-29.318-10.825 C420.305,148.616,419.969,160.839,427.875,171.335" />
        <path class="svg-cash-money-inner" d="M218.041,334.839c6.117,11.018,19.02,17.316,28.619,14.096 c9.697-3.181,12.477-14.663,6.301-25.642c-6.143-11.059-19.066-17.317-28.656-14.179 C214.619,312.355,211.881,323.83,218.041,334.839" />
        <path class="svg-cash-hand" d="M258.408,177.271c0,0,11.541,20.897,27.688,23.333c16.107,2.376,47.537,13.668,55.719,14.892 c8.143,1.148,27.1,5.382,27.1,21.029c0,8.212-5.717,34.513-27.863,34.513c-24.717,0-52.084-17.135-60.707-20.498 c-8.588-3.383-34.088-12.718-45.455-9.574c-11.262,3.09-35.111,2.374-50.895,0.941c-15.918-1.473-46.842-9.115-57.725-17.059 c0,0-18.08-9.965,20.4-28.777C185.225,177.282,242.934,162.21,258.408,177.271" />
        <path class="svg-cash-thumb" d="M258.408,177.271c0,0,11.541,20.897,27.688,23.333 c16.107,2.376,47.537,13.668,55.719,14.892c8.143,1.148,27.1,5.382,27.1,21.029c0,8.212-5.717,34.513-27.863,34.513 c-25.951,0-52.084-17.135-60.707-20.498c-8.588-3.383-34.088-12.718-45.455-9.574c-11.262,3.09-35.111,2.374-50.895,0.941 c-15.918-1.473-46.842-9.115-57.725-17.059c0,0-18.08-9.965,20.4-28.777C185.225,177.282,242.934,162.21,258.408,177.271z" />
        <path class="svg-cash-hand" d="M265.518,168.38l-16.447,17.848c0,0-48.854,11.748-74.717,19.733c-25.797,7.985-40.836,11.747-40.836,11.747 s-8.441,16.883-14.053,19.195c-5.65,2.386-20.699-8.41-10.391-31.398c10.391-23.032,20.254-46.032,77.559-47.435 c57.232-1.419,73.191-7.571,78.396,0.425C270.217,166.511,265.518,168.38,265.518,168.38" />
        <path class="svg-cash-shirt-inner" d="M57.346,142c-29.242,42-29.242,135-29.242,135H90V142H57.346z" />
        <path class="svg-cash-shirt-outer" d="M7,122v165.564c16,8.649,63,10.37,63,10.37V121.644c0,0-45,0.484-63,0" />
      </svg>
    </div>
    <div class='button'>
      Debit

      <svg class="svg-debit" viewBox="0 0 32 23">
        <path class="svg-debit-card" d="M1.993 0h28c1.104 0 2 .895 2 2v18.999c0 1.104-.896 2.001-2 2.001h-28c-1.104 0-2-.896-2-2.001v-18.999c0-1.105.895-2 2-2z" />
        <path class="svg-debit-data" d="M12.993 15v2h16v-2h-16zm0 5h10v-2h-10v2zm-4-5h-4c-1.104 0-2 .896-2 2v1c0 1.104.896 2 2 2h4c1.104 0 2-.896 2-2v-1c0-1.104-.896-2-2-2z" />
        <path class="svg-debit-sign" d="M2.993 9h26v3h-26v-3z" />
        <path class="svg-debit-read" d="M-.007 3h32v3h-32v-3z" />
      </svg>
    </div>
    <div class='button'>
      Credit Card

      <svg class="svg-visa" viewBox="0 0 512 512">
        <path class="svg-visa-border" d="M482.722,103.198c13.854,0,25.126,11.271,25.126,25.126v257.9c0,13.854-11.271,25.126-25.126,25.126H30.99 c-13.854,0-25.126-11.271-25.126-25.126v-257.9c0-13.854,11.271-25.126,25.126-25.126H482.722 M482.722,98.198H30.99 c-16.638,0-30.126,13.488-30.126,30.126v257.9c0,16.639,13.488,30.126,30.126,30.126h451.732 c16.639,0,30.126-13.487,30.126-30.126v-257.9C512.848,111.686,499.36,98.198,482.722,98.198L482.722,98.198z" />
        <polygon class="svg-visa-letter" points="190.88,321.104 212.529,194.022 247.182,194.022 225.494,321.104 190.88,321.104" />
        <path class="svg-visa-letter" d="M351.141,197.152c-6.86-2.577-17.617-5.339-31.049-5.339c-34.226,0-58.336,17.234-58.549,41.94 c-0.193,18.256,17.21,28.451,30.351,34.527c13.489,6.231,18.023,10.204,17.966,15.767c-0.097,8.518-10.775,12.403-20.737,12.403 c-13.857,0-21.222-1.918-32.599-6.667l-4.458-2.016l-4.864,28.452c8.082,3.546,23.043,6.618,38.587,6.772 c36.417,0,60.042-17.035,60.313-43.423c0.136-14.447-9.089-25.446-29.071-34.522c-12.113-5.882-19.535-9.802-19.458-15.757 c0-5.281,6.279-10.93,19.846-10.93c11.318-0.179,19.536,2.292,25.912,4.869l3.121,1.468L351.141,197.152L351.141,197.152z" />
        <path class="svg-visa-letter" d="M439.964,194.144h-26.766c-8.295,0-14.496,2.262-18.14,10.538l-51.438,116.47h36.378 c0,0,5.931-15.66,7.287-19.1c3.974,0,39.305,0.059,44.363,0.059c1.027,4.447,4.206,19.041,4.206,19.041h32.152L439.964,194.144 L439.964,194.144z M397.248,276.062c2.868-7.326,13.8-35.53,13.8-35.53c-0.194,0.339,2.849-7.36,4.593-12.132l2.346,10.959 c0,0,6.628,30.336,8.022,36.703H397.248L397.248,276.062z" />
        <path class="svg-visa-letter" d="M161.828,194.114l-33.917,86.667l-3.624-17.607c-6.299-20.312-25.971-42.309-47.968-53.317l31.009,111.149 l36.649-0.048l54.538-126.844H161.828L161.828,194.114z" />
        <path class="svg-visa-corner" d="M96.456,194.037H40.581l-0.426,2.641c43.452,10.523,72.213,35.946,84.133,66.496l-12.133-58.41 C110.062,196.716,103.976,194.318,96.456,194.037L96.456,194.037z" />
      </svg>

      <svg class="svg-master" viewBox="0 0 512 512">
        <path class="svg-master-border" d="M482.722,103.198c13.854,0,25.126,11.271,25.126,25.126v257.9c0,13.854-11.271,25.126-25.126,25.126H30.99 c-13.854,0-25.126-11.271-25.126-25.126v-257.9c0-13.854,11.271-25.126,25.126-25.126H482.722 M482.722,98.198H30.99 c-16.638,0-30.126,13.488-30.126,30.126v257.9c0,16.639,13.488,30.126,30.126,30.126h451.732 c16.639,0,30.126-13.487,30.126-30.126v-257.9C512.848,111.686,499.36,98.198,482.722,98.198L482.722,98.198z" />
        <path class="svg-master-circle2" d="M257.568,355.172c22.646,20.867,53.061,33.522,86.14,33.522 c71.037,0,128.538-57.941,128.538-129.207c0-71.482-57.501-129.424-128.538-129.424c-33.079,0-63.493,12.653-86.14,33.522 c-25.972,23.752-42.401,57.943-42.401,95.902C215.167,297.45,231.597,331.642,257.568,355.172L257.568,355.172z" />
        <path class="svg-master-circle1" d="M299.086,245.725c-0.444-4.662-1.331-9.102-2.223-13.764h-78.586 c0.888-4.662,2.217-9.103,3.549-13.543h71.266c-1.558-4.659-3.333-9.323-5.332-13.763h-60.382 c2.22-4.659,4.661-9.323,7.326-13.763h45.51c-2.887-4.662-6.215-9.325-9.769-13.542h-25.975 c3.996-4.883,8.438-9.545,13.097-13.763c-22.863-20.647-53.057-33.522-86.356-33.522c-70.817,0-128.538,57.942-128.538,129.424 c0,71.266,57.721,129.207,128.538,129.207c33.3,0,63.493-12.655,86.356-33.522l0,0l0,0c4.665-4.221,8.882-8.66,12.878-13.544 h-25.975c-3.552-4.439-6.66-8.879-9.767-13.763h45.51c2.885-4.439,5.327-8.879,7.546-13.764h-60.382 c-2.001-4.439-3.996-8.88-5.552-13.544h71.266c1.553-4.439,2.661-9.1,3.771-13.763c0.892-4.439,1.778-9.104,2.223-13.764 c0.443-4.44,0.666-8.879,0.666-13.544C299.752,254.828,299.529,250.165,299.086,245.725L299.086,245.725z" />
        <path class="svg-master-letter" d="M342.599,229.742l-2.443,14.207 c-4.886-2.441-8.438-3.552-12.434-3.552c-10.433,0-17.76,10.212-17.76,24.644c0,9.987,4.885,15.982,13.098,15.982 c3.33,0,7.326-1.106,11.766-3.332l-2.441,14.876c-5.106,1.332-8.436,2-12.209,2c-15.096,0-24.421-10.88-24.421-28.419 c0-23.309,12.877-39.735,31.302-39.735c2.441,0,4.662,0.222,6.44,0.666l5.549,1.332 C340.822,229.076,341.264,229.298,342.599,229.742L342.599,229.742z" />
        <path class="svg-master-letter" d="M297.755,239.509c-0.444,0-0.892,0-1.333,0 c-4.665,0-7.327,2.22-11.546,8.66l1.331-8.216h-12.651l-8.658,53.282h13.984c5.106-32.635,6.438-38.187,13.098-38.187 c0.443,0,0.443,0,0.888,0c1.332-6.436,3.108-11.1,5.33-15.318L297.755,239.509L297.755,239.509z" />
        <path class="svg-master-letter" d="M217.387,292.566c-3.771,1.332-6.878,1.775-9.987,1.775 c-7.105,0-11.102-3.995-11.102-11.762c0-1.332,0.222-3.113,0.444-4.664l0.889-5.328l0.665-4.221l5.997-36.406h13.763l-1.557,7.992 h7.104l-1.775,13.1h-7.104l-3.771,22.198c-0.224,0.889-0.224,1.552-0.224,2.221c0,2.664,1.332,3.776,4.664,3.776 c1.551,0,2.886,0,3.774-0.444L217.387,292.566L217.387,292.566z" />
        <path class="svg-master-letter" d="M163.887,256.824c0,6.66,3.107,11.323,10.433,14.876 c5.773,2.663,6.661,3.551,6.661,5.771c0,3.332-2.441,4.884-7.992,4.884c-4.218,0-7.992-0.664-12.432-1.995l-2,12.206l0.667,0.225 l2.443,0.444c0.887,0.219,1.998,0.444,3.774,0.444c3.108,0.443,5.771,0.443,7.548,0.443c14.652,0,21.534-5.551,21.534-17.76 c0-7.328-2.886-11.548-9.768-14.875c-5.994-2.663-6.661-3.333-6.661-5.771c0-2.888,2.443-4.221,6.883-4.221 c2.663,0,6.438,0.225,9.989,0.669l1.998-12.212c-3.552-0.666-9.101-1.111-12.209-1.111 C169.214,238.842,163.665,247.056,163.887,256.824L163.887,256.824z" />
        <path class="svg-master-letter" d="M448.935,293.235h-13.097l0.665-5.109 c-3.773,3.996-7.77,5.772-12.875,5.772c-10.215,0-16.874-8.654-16.874-21.979c0-17.758,10.435-32.854,22.646-32.854 c5.55,0,9.546,2.442,13.319,7.328l3.108-18.652h13.766L448.935,293.235L448.935,293.235z M428.511,280.804 c6.438,0,10.879-7.554,10.879-17.982c0-6.886-2.443-10.437-7.325-10.437c-6.217,0-10.881,7.327-10.881,17.759 C421.184,277.251,423.628,280.804,428.511,280.804L428.511,280.804z" />
        <path class="svg-master-letter" d="M260.013,292.122c-4.883,1.558-9.322,2.22-14.432,2.22 c-15.538,0-23.53-8.211-23.53-23.974c0-18.203,10.211-31.748,24.2-31.748c11.542,0,18.868,7.548,18.868,19.315 c0,3.996-0.445,7.768-1.776,13.321h-27.529c-0.222,0.662-0.222,1.106-0.222,1.55c0,6.222,4.218,9.329,12.21,9.329 c5.107,0,9.547-0.888,14.432-3.332L260.013,292.122L260.013,292.122z M252.241,260.375c0-1.107,0-1.994,0-2.663 c0-4.44-2.439-6.881-6.66-6.881c-4.439,0-7.547,3.331-8.879,9.544H252.241L252.241,260.375z" />
        <polygon class="svg-master-letter" points="110.828,293.235 97.065,293.235 105.056,242.839 87.074,293.235 77.527,293.235 76.418,243.282 67.981,293.235 55.106,293.235 65.984,227.741 85.964,227.741 86.63,268.367 99.949,227.741 121.706,227.741 110.828,293.235 " />
        <path class="svg-master-letter" d="M145.238,269.48c-1.332,0-1.998-0.226-3.107-0.226 c-7.771,0-11.767,2.889-11.767,8.217c0,3.332,1.776,5.328,4.884,5.328C141.021,282.8,145.017,277.472,145.238,269.48 L145.238,269.48z M155.45,293.235h-11.544l0.222-5.554c-3.552,4.44-8.215,6.441-14.652,6.441c-7.547,0-12.653-5.771-12.653-14.433 c0-13.1,8.879-20.646,24.418-20.646c1.554,0,3.554,0.224,5.773,0.443c0.444-1.775,0.444-2.438,0.444-3.327 c0-3.551-2.441-4.883-8.88-4.883c-3.996,0-8.436,0.444-11.543,1.332l-1.998,0.663l-1.332,0.224l1.998-11.988 c6.881-1.999,11.545-2.666,16.65-2.666c11.987,0,18.426,5.329,18.426,15.542c0,2.664-0.222,4.659-1.109,10.655l-3.11,18.872 l-0.444,3.327l-0.222,2.664l-0.221,1.999L155.45,293.235L155.45,293.235z" />
        <path class="svg-master-letter" d="M365.019,269.48c-1.555,0-2.22-0.226-3.108-0.226 c-7.991,0-11.987,2.889-11.987,8.217c0,3.332,1.998,5.328,5.106,5.328C360.579,282.8,364.797,277.472,365.019,269.48 L365.019,269.48z M375.229,293.235h-11.543l0.222-5.554c-3.551,4.44-8.213,6.441-14.65,6.441c-7.548,0-12.653-5.771-12.653-14.433 c0-13.1,8.879-20.646,24.418-20.646c1.554,0,3.552,0.224,5.551,0.443c0.443-1.775,0.665-2.438,0.665-3.327 c0-3.551-2.441-4.883-8.88-4.883c-3.995,0-8.656,0.444-11.766,1.332l-1.775,0.663l-1.332,0.224l1.998-11.988 c6.882-1.999,11.543-2.666,16.648-2.666c11.988,0,18.206,5.329,18.206,15.542c0,2.664,0,4.659-1.113,10.655l-2.883,18.872 l-0.446,3.327l-0.443,2.664l-0.223,1.999V293.235L375.229,293.235z" />
        <path class="svg-master-letter" d="M412.526,239.509c-0.444,0-0.889,0-1.332,0 c-4.662,0-7.325,2.22-11.544,8.66l1.331-8.216H388.33l-8.438,53.282h13.765c5.106-32.635,6.438-38.187,13.098-38.187 c0.444,0,0.444,0,0.889,0c1.331-6.436,3.107-11.1,5.327-15.318L412.526,239.509L412.526,239.509z" />
      </svg>

      <svg class="svg-amex" viewBox="0 0 512 512">
        <path class="svg-amex-border" d="M482.722,103.198c13.854,0,25.126,11.271,25.126,25.126v257.9c0,13.854-11.271,25.125-25.126,25.125H30.99 c-13.854,0-25.126-11.271-25.126-25.125v-257.9c0-13.854,11.271-25.126,25.126-25.126H482.722 M482.722,98.198H30.99 c-16.638,0-30.126,13.488-30.126,30.126v257.9c0,16.639,13.488,30.125,30.126,30.125h451.731c16.64,0,30.126-13.486,30.126-30.125 v-257.9C512.848,111.686,499.36,98.198,482.722,98.198L482.722,98.198z" />
        <path class="svg-amex-letter" d="M263.488,241.026v-10.115c0,0-0.535-7.92-8.802-7.92h-12.852v18.035h-13.193v-51.994 h32.03c0,0,16.718-2.024,16.718,15.218c0,8.975-7.391,12.139-7.391,12.139s6.416,2.997,6.416,11.795v12.841L263.488,241.026 M241.835,210.762h13.643c3.961,0,7.219-2.201,7.219-4.926c0-2.73-3.258-4.93-7.219-4.93h-13.643V210.762L241.835,210.762" />
        <path class="svg-amex-letter" d="M419.223,241.026l-20.938-34.752v34.752h-11.352h-2.119h-12.394l-4.668-10.908h-24.105 l-4.583,10.908H326.92h-2.196h-6.339c0,0-17.768-2.549-17.768-24.545c0-28.862,20.154-27.716,20.851-27.893l16.278,0.444v11.7 l-13.367,0.172c0,0-8.715,0-9.775,11.355c-0.124,1.303-0.181,2.501-0.172,3.614c0.048,17.577,15.258,12.12,15.754,11.958 l16.364-38.799h18.473l19.792,47.159v-47.159h18.654l20.68,34.227v-34.227h13.29v51.994H419.223 M349.279,216.834h12.84 l-6.329-15.486L349.279,216.834L349.279,216.834" />
        <path class="svg-amex-letter" d="M159.92,241.026v-35.893l-16.536,35.893h-10.821l-16.631-35.72v35.72h-11.524h-1.762 H89.888l-4.573-10.908H61.208l-4.664,10.908h-14.43l21.906-51.994h18.569l20.058,47.774v-47.774h20.852l14.521,32.289 l14.436-32.289h20.851v51.994H159.92 M66.836,216.834h12.845l-6.42-15.486L66.836,216.834L66.836,216.834" />
        <polyline class="svg-amex-letter" points="180.6,241.026 180.6,189.033 221.786,189.033 221.786,201.172 193.89,201.172 193.89,209.177 221.08,209.177 221.08,220.968 193.89,220.968 193.89,229.77 221.786,229.77 221.786,241.026 180.6,241.026" />
        <polyline class="svg-amex-letter" points="282.85,241.203 282.85,189.033 296.13,189.033 296.13,241.203 282.85,241.203" />
        <path class="svg-amex-letter" d="M314.432,329.189v-10.121c0,0-0.533-7.914-8.802-7.914h-12.842v18.035h-13.204v-51.998 h32.03c0,0,16.718-2.023,16.718,15.223c0,8.975-7.389,12.145-7.389,12.145s6.34,2.988,6.34,11.78v12.851H314.432 M292.788,298.925h13.644c3.952,0,7.208-2.194,7.208-4.926c0-2.729-3.256-4.927-7.208-4.927h-13.644V298.925L292.788,298.925" />
        <path class="svg-amex-letter" d="M226.445,329.104h-11.533l-13.977-15.4l-14.091,15.4h-8.001h-41.091v-52.086h41.091 h6.951l15.142,16.543l15.219-16.457h10.119v-0.086h32.022c0,0,16.718-1.851,16.718,15.301c0,15.313-5.548,20.067-22.619,20.067 h-12.926v16.718H226.445 M209.909,303.508l16.363,18.12v-36.165L209.909,303.508L209.909,303.508 M151.042,317.85h27.801 l13.023-14.342l-13.023-14.264h-27.801v8.001h27.095v11.801h-27.095V317.85L151.042,317.85 M239.468,298.83h13.633 c3.961,0,7.217-2.196,7.217-4.926c0-2.721-3.256-4.928-7.217-4.928h-13.633V298.83L239.468,298.83" />
        <path class="svg-amex-letter" d="M404.441,329.018h-23.496v-11.973h20.595c0,0,7.39,0.88,7.39-4.123 c0-4.679-11.17-4.316-11.17-4.316s-18.216,1.586-18.216-15.484c0-16.984,16.449-16.016,16.449-16.016h25.347v12.14h-20.41 c0,0-7.046-1.412-7.046,3.705c0,4.296,9.585,3.685,9.585,3.685s20.153-1.488,20.153,14.168 c0,16.793-12.984,18.282-17.585,18.282C405.044,329.084,404.441,329.018,404.441,329.018" />
        <polyline class="svg-amex-letter" points="333.794,329.104 333.794,277.191 374.962,277.191 374.962,289.244 347.073,289.244 347.073,297.245 374.264,297.245 374.264,309.046 347.073,309.046 347.073,317.85 374.962,317.85 374.962,329.104 333.794,329.104" />
        <path class="svg-amex-letter" d="M450.984,329.018h-23.495v-11.973h20.507c0,0,7.477,0.88,7.477-4.123 c0-4.679-11.169-4.316-11.169-4.316s-18.218,1.586-18.218-15.484c0-16.984,16.449-16.016,16.449-16.016h25.262v12.14h-20.334 c0,0-7.038-1.412-7.038,3.705c0,4.296,9.597,3.685,9.597,3.685s20.144-1.488,20.144,14.168 c0,16.793-12.983,18.282-17.584,18.282C451.586,329.084,450.984,329.018,450.984,329.018" />
      </svg>
    </div>
    <div class='button'>
      Sofort Banking

      <svg class="svg-sofort" viewBox="0 0 320 120">
        <path class="svg-sofort-line1" d="M 54.41 20.44 C 58.06 17.90 62.66 17.68 66.95 17.52 C 77.24 17.46 87.53 17.53 97.82 17.49 C 92.87 20.72 88.53 24.84 85.18 29.73 C 78.81 29.83 72.43 29.65 66.06 29.79 C 64.26 29.58 63.24 31.19 62.08 32.25 C 62.19 32.82 62.41 33.97 62.52 34.55 C 66.90 37.22 73.32 36.94 75.98 42.01 C 78.27 47.09 75.96 52.87 73.47 57.43 C 69.38 64.46 61.01 67.55 53.21 67.61 C 41.73 67.93 30.24 67.67 18.76 67.74 C 20.35 63.33 21.95 58.92 23.56 54.51 C 34.38 54.43 45.20 54.61 56.02 54.43 C 58.83 54.92 61.58 50.92 58.92 49.02 C 54.92 46.96 49.71 46.95 46.72 43.15 C 44.26 40.63 44.77 36.75 45.77 33.69 C 47.46 28.69 49.87 23.46 54.41 20.44 Z" />
        <path class="svg-sofort-line1" d="M 106.39 17.63 C 112.36 16.33 119.54 16.30 124.29 20.72 C 128.40 24.81 128.33 31.21 127.24 36.51 C 125.46 43.80 122.30 50.81 117.81 56.83 C 113.36 62.90 106.52 67.39 98.97 68.25 C 93.44 69.01 87.08 68.26 83.01 64.09 C 78.48 58.90 79.30 51.29 81.21 45.18 C 85.02 33.04 93.51 20.99 106.39 17.63 Z" />
        <path class="svg-sofort-line1" d="M 141.74 19.75 C 145.14 17.82 149.15 17.49 152.98 17.48 C 162.18 17.50 171.38 17.50 180.58 17.49 C 175.46 20.78 170.71 24.72 167.18 29.73 C 161.47 29.90 155.75 29.50 150.06 29.91 C 147.70 31.68 147.51 34.96 146.41 37.49 C 150.85 37.50 155.29 37.49 159.73 37.51 C 158.46 41.01 157.18 44.50 155.92 48.00 C 151.44 48.00 146.97 47.98 142.50 48.04 C 140.14 54.61 137.72 61.16 135.37 67.74 C 130.20 67.76 125.03 67.74 119.87 67.76 C 124.46 55.06 129.10 42.36 133.71 29.66 C 135.18 25.59 137.86 21.81 141.74 19.75 Z" />
        <path class="svg-sofort-line1" d="M 189.37 17.53 C 195.10 16.42 201.94 16.34 206.57 20.44 C 210.95 24.53 211.04 31.22 209.77 36.68 C 208.01 43.81 204.88 50.65 200.55 56.59 C 195.95 62.94 188.83 67.63 180.91 68.33 C 175.44 68.92 169.01 68.18 165.28 63.66 C 161.30 58.93 161.84 52.15 163.38 46.56 C 166.98 33.74 175.79 20.88 189.37 17.53 Z" />
        <path class="svg-sofort-line1" d="M 252.53 17.49 C 269.25 17.53 285.97 17.44 302.69 17.54 C 301.27 21.63 299.74 25.68 298.25 29.75 C 292.35 29.76 286.45 29.75 280.55 29.75 C 275.85 42.39 271.32 55.09 266.68 67.76 C 261.98 67.75 257.27 67.77 252.57 67.73 C 257.09 55.05 261.75 42.42 266.35 29.77 C 263.37 29.75 260.39 29.75 257.41 29.78 C 257.89 25.10 256.09 20.55 252.53 17.49 Z" />
        <path class="svg-sofort-line1" d="M 221.18 17.47 C 229.41 17.79 237.77 16.78 245.90 18.47 C 250.28 19.33 254.22 23.26 253.77 27.95 C 253.56 36.65 246.64 43.48 238.88 46.39 C 242.22 53.14 243.84 60.53 245.76 67.76 C 240.25 67.75 234.74 67.74 229.22 67.77 C 227.84 62.02 226.44 56.28 225.08 50.53 C 222.93 56.27 220.79 62.02 218.60 67.75 C 213.36 67.76 208.11 67.74 202.87 67.77 C 208.92 50.98 215.09 34.24 221.18 17.47 Z" />
        <path class="svg-sofort-fill" d="M 231.49 28.21 C 234.14 28.46 238.63 27.32 239.26 30.99 C 238.82 34.00 237.35 37.06 234.67 38.68 C 232.41 40.06 229.65 39.87 227.11 40.12 C 228.51 36.13 230.05 32.18 231.49 28.21 Z" />
        <path class="svg-sofort-fill" d="M 106.31 29.06 C 108.24 28.26 110.78 28.01 112.46 29.49 C 114.15 32.11 112.72 35.28 112.09 38.01 C 110.25 43.51 108.42 49.22 104.86 53.88 C 102.74 56.68 98.15 58.01 95.28 55.64 C 93.39 51.98 95.40 47.86 96.39 44.23 C 98.48 38.60 100.78 32.16 106.31 29.06 Z" />
        <path class="svg-sofort-fill" d="M 188.40 29.29 C 190.08 28.27 192.16 28.29 194.02 28.73 C 196.72 30.31 195.69 33.80 195.13 36.26 C 193.43 42.07 191.43 47.93 188.08 53.01 C 186.18 56.09 182.06 57.84 178.65 56.29 C 175.82 54.05 177.40 50.01 178.06 47.11 C 180.20 40.64 182.42 33.23 188.40 29.29 Z" />
        <path class="svg-sofort-line2" d="M 160.29 98.99 C 159.70 89.26 167.92 79.52 177.85 79.23 C 180.86 78.92 183.83 79.66 186.50 81.03 C 186.06 82.70 185.52 84.35 184.90 85.97 C 182.71 84.95 180.56 83.56 178.08 83.48 C 171.25 83.45 165.75 90.28 166.04 96.84 C 166.88 100.70 171.45 101.07 174.57 99.94 C 175.23 98.04 175.91 96.15 176.60 94.26 C 174.84 94.25 173.08 94.22 171.32 94.18 C 171.83 92.85 172.35 91.52 172.89 90.20 C 176.25 90.26 179.61 90.23 182.97 90.31 C 182.07 94.60 180.47 98.73 178.71 102.73 C 176.02 104.89 172.17 104.84 168.88 105.02 C 165.15 105.14 160.66 103.17 160.29 98.99 Z" />
        <path class="svg-sofort-line2" d="M 26.76 81.66 C 27.48 78.80 30.88 79.59 33.07 79.45 C 35.96 79.61 39.40 79.24 41.58 81.55 C 43.69 85.23 40.49 89.43 37.16 91.03 C 38.28 91.88 39.70 92.68 39.74 94.29 C 39.74 98.51 36.53 102.27 32.63 103.59 C 28.17 105.17 23.36 104.37 18.74 104.38 C 20.92 96.65 24.01 89.20 26.76 81.66 Z" />
        <path class="svg-sofort-line2" d="M 56.22 80.94 C 57.77 78.57 61.09 79.81 63.44 79.40 C 63.74 87.68 63.43 95.98 63.26 104.27 C 61.36 104.84 59.38 104.81 57.47 104.38 C 57.62 102.59 57.73 100.80 57.84 99.01 C 54.79 98.99 51.74 99.00 48.70 98.99 C 47.38 100.86 46.25 102.93 44.54 104.48 C 43.05 104.79 41.52 104.71 40.02 104.75 C 40.52 103.17 41.29 101.69 42.31 100.38 C 47.04 93.97 51.51 87.36 56.22 80.94 Z" />
        <path class="svg-sofort-line2" d="M 75.90 81.85 C 76.95 78.52 81.02 79.47 83.59 80.08 C 84.66 85.65 85.61 91.24 86.31 96.87 C 88.19 91.52 90.01 86.14 92.10 80.87 C 92.83 78.72 95.59 79.86 97.25 79.53 C 95.34 85.71 92.88 91.70 90.77 97.82 C 89.92 100.03 89.33 102.40 87.90 104.33 C 85.96 104.65 84.00 104.45 82.05 104.35 C 80.80 98.27 79.73 92.13 79.05 85.96 C 77.05 92.22 74.64 98.34 72.46 104.53 C 70.86 104.60 69.27 104.63 67.67 104.61 C 70.25 96.97 73.03 89.39 75.90 81.85 Z" />
        <path class="svg-sofort-line2" d="M 104.08 79.75 C 105.89 79.59 107.71 79.55 109.53 79.61 C 108.32 83.24 106.97 86.82 105.65 90.42 C 109.02 87.18 112.37 83.92 115.80 80.75 C 117.50 78.81 120.24 79.62 122.44 79.85 C 118.99 84.14 114.50 87.40 110.49 91.13 C 111.69 95.53 113.38 99.82 114.01 104.36 C 112.08 104.61 110.13 104.69 108.19 104.60 C 107.10 100.53 105.95 96.49 104.91 92.42 C 103.49 96.46 102.01 100.47 100.54 104.50 C 98.78 104.67 97.01 104.66 95.26 104.45 C 98.05 96.16 101.34 88.05 104.08 79.75 Z" />
        <path class="svg-sofort-line2" d="M 127.23 79.78 C 128.97 79.62 130.72 79.51 132.46 79.43 C 130.14 87.93 126.46 96.00 123.77 104.39 C 121.96 104.65 120.12 104.71 118.30 104.48 C 121.21 96.23 124.33 88.04 127.23 79.78 Z" />
        <path class="svg-sofort-line2" d="M 137.99 83.88 C 138.68 82.29 139.10 80.07 141.09 79.63 C 142.91 79.24 144.74 79.75 146.54 80.01 C 147.55 85.57 148.49 91.14 149.31 96.72 C 151.17 91.03 153.41 85.48 155.28 79.80 C 156.92 79.65 158.57 79.61 160.22 79.67 C 157.58 87.26 154.79 94.79 152.03 102.34 C 151.26 105.52 147.35 104.32 144.99 104.35 C 143.70 98.31 142.66 92.21 141.97 86.08 C 139.82 92.17 137.86 98.36 135.29 104.28 C 133.80 105.07 132.12 104.56 130.55 104.45 C 133.00 97.58 135.57 90.76 137.99 83.88 Z" />
        <path class="svg-sofort-fill" d="M 31.34 83.43 C 33.02 83.57 34.69 83.74 36.36 83.92 C 37.51 88.37 32.65 90.34 29.04 89.89 C 29.78 87.73 30.56 85.58 31.34 83.43 Z" />
        <path class="svg-sofort-fill" d="M 51.48 94.74 C 53.73 91.50 55.95 88.24 58.26 85.05 C 58.27 88.29 58.06 91.53 57.95 94.76 C 55.79 94.75 53.64 94.74 51.48 94.74 Z" />
        <path class="svg-sofort-fill" d="M 27.60 93.66 C 29.64 94.04 33.85 92.93 33.99 96.02 C 33.46 100.35 28.56 100.78 25.10 100.57 C 25.92 98.26 26.77 95.96 27.60 93.66 Z" />
      </svg>
    </div>
    <div class='button'>
      ClickandBuy

      <svg class="svg-click" viewBox="0 0 512 512">
        <path class="svg-click-border" d="M481.874,102.698c13.854,0,25.126,11.271,25.126,25.126v257.898c0,13.854-11.271,25.127-25.126,25.127 H30.143c-13.854,0-25.126-11.271-25.126-25.127V127.824c0-13.854,11.271-25.126,25.126-25.126H481.874 M481.874,97.698H30.143 c-16.638,0-30.126,13.488-30.126,30.126v257.898c0,16.641,13.488,30.127,30.126,30.127h451.731 c16.64,0,30.126-13.486,30.126-30.127V127.824C512,111.186,498.513,97.698,481.874,97.698L481.874,97.698z" />
        <path class="svg-click-logo" d="M365.46,177.841l-57.734-57.669c0,0-7.479-7.479-18.042-7.479c0,0-10.562,0-18.041,7.479 c0,0-7.479,7.479-7.479,18.042c0,0,0,10.563,7.479,18.042l14.039,13.975h-53.864c0,0-10.693,0-18.172,7.544 c0,0-7.545,7.479-7.545,18.108c0,0,0,10.628,7.545,18.173c0,0,7.479,7.479,18.172,7.479h53.864l-14.039,14.04 c0,0-7.479,7.479-7.479,18.042c0,0,0,10.562,7.479,18.043c0,0,7.479,7.413,18.041,7.413c0,0,10.562,0,18.042-7.413l57.669-57.735 c0,0,7.479-7.479,7.479-18.042C372.874,195.883,372.874,185.32,365.46,177.841" />
        <path class="svg-click-logo" d="M157.681,160.324c0,0,14.106,0,24.078,9.972c0,0,9.973,9.972,9.973,24.078 c0,0,0,14.105-9.973,24.078c0,0-9.972,9.973-24.078,9.973c0,0-14.105,0-24.078-9.973c0,0-9.972-9.972-9.972-24.078 c0,0,0-14.106,9.972-24.078C133.604,170.296,143.576,160.324,157.681,160.324" />
        <path class="svg-click-letter" d="M66.216,376.531c0,0-4.74,0.928-8.961,0.928c-12.464,0-19.468-6.799-19.468-19.57 v-14.421c0-12.771,6.901-19.569,19.468-19.569c4.634,0,8.961,0.928,8.961,0.928c1.337,0.207,1.956,0.928,1.956,2.061v6.282 c0,1.136-0.721,1.753-1.956,1.647c0,0-4.431-0.618-8.24-0.618c-6.696,0-8.858,3.913-8.858,9.476v13.904 c0,5.771,2.37,9.581,8.961,9.581c4.018,0,8.24-0.618,8.24-0.618c1.133-0.104,1.854,0.413,1.854,1.546v6.282 C68.172,375.501,67.658,376.223,66.216,376.531" />
        <path class="svg-click-letter" d="M84.758,376.428h-7.417c-1.135,0-1.958-0.824-1.958-1.957v-69.214 c0-1.137,0.823-1.959,1.958-1.959h7.417c1.132,0,1.956,0.822,1.956,1.959v69.214C86.713,375.604,85.89,376.428,84.758,376.428" />
        <path class="svg-click-letter" d="M104.84,376.428h-7.415c-1.133,0-1.958-0.824-1.958-1.957v-47.584 c0-1.134,0.825-1.959,1.958-1.959h7.415c1.134,0,1.959,0.825,1.959,1.959v47.584C106.8,375.604,105.975,376.428,104.84,376.428 M104.84,314.63h-7.415c-1.133,0-1.958-0.823-1.958-1.956v-7.417c0-1.137,0.825-1.959,1.958-1.959h7.415 c1.134,0,1.959,0.822,1.959,1.959v7.417C106.8,313.807,105.975,314.63,104.84,314.63" />
        <path class="svg-click-letter" d="M143.98,376.531c0,0-4.738,0.928-8.958,0.928c-12.465,0-19.468-6.799-19.468-19.57 v-14.421c0-12.771,6.9-19.569,19.468-19.569c4.634,0,8.958,0.928,8.958,0.928c1.339,0.207,1.958,0.928,1.958,2.061v6.282 c0,1.136-0.721,1.753-1.958,1.647c0,0-4.429-0.618-8.24-0.618c-6.694,0-8.858,3.913-8.858,9.476v13.904 c0,5.771,2.371,9.581,8.962,9.581c4.016,0,8.24-0.618,8.24-0.618c1.132-0.104,1.853,0.413,1.853,1.546v6.282 C145.938,375.501,145.422,376.223,143.98,376.531" />
        <path class="svg-click-letter" d="M190.023,376.428h-8.344c-1.132,0-2.058-0.927-2.574-1.957l-14.008-26.882l12.771-20.702 c0.618-0.93,1.544-1.959,2.679-1.959h8.344c1.132,0,1.749,1.029,1.132,1.959l-12.773,20.495l14.111,27.089 C191.877,375.398,191.156,376.428,190.023,376.428 M162.523,376.428h-7.417c-1.132,0-1.958-0.824-1.958-1.957v-69.214 c0-1.137,0.826-1.959,1.958-1.959h7.417c1.132,0,1.958,0.822,1.958,1.959v69.214C164.48,375.604,163.655,376.428,162.523,376.428" />
        <path class="svg-click-letter-center" d="M220.615,354.9h-8.651c-5.562,0-7.829,2.369-7.829,6.799c0,3.912,2.267,6.18,6.798,6.18 c3.193,0,6.696-1.236,9.682-2.781V354.9L220.615,354.9z M229.987,376.428h-6.9c-1.132,0-1.956-0.824-1.956-1.957v-0.926 c-3.297,2.059-7.622,3.914-12.465,3.914c-9.989,0-15.862-5.049-15.862-15.45c0-10.61,6.489-15.862,17.922-15.862 c3.504,0,8.551,0.41,9.888,0.619v-4.121c0-5.356-2.369-8.24-8.445-8.24c-6.077,0-13.804,1.752-13.804,1.752 c-1.235,0.308-1.956-0.514-1.956-1.649v-6.28c0-1.136,0.721-1.854,1.956-2.164c0,0,6.696-2.162,15.348-2.162 c13.699,0,18.23,6.386,18.23,18.746v31.826C231.944,375.604,231.12,376.428,229.987,376.428" />
        <path class="svg-click-letter-center" d="M277.884,376.428h-7.415c-1.132,0-1.957-0.824-1.957-1.957v-32.033 c0-4.838-1.443-7.932-6.9-7.932c-3.192,0-6.695,1.443-9.579,2.989v36.976c0,1.133-0.823,1.957-1.957,1.957h-7.415 c-1.135,0-1.958-0.824-1.958-1.957v-47.584c0-1.134,0.823-1.959,1.958-1.959h6.9c1.133,0,1.958,0.825,1.958,1.959v1.545 c2.985-2.267,7.414-4.533,13.283-4.533c11.229,0,15.039,6.799,15.039,17.511v33.062 C279.84,375.604,279.018,376.428,277.884,376.428" />
        <path class="svg-click-letter-center" d="M314.348,335.848c-2.779-1.134-5.87-1.959-8.65-1.959c-5.666,0-7.828,3.606-7.828,8.756 v15.965c0,5.15,2.162,8.754,7.828,8.754c2.78,0,5.871-1.029,8.65-2.368V335.848z M323.721,376.428h-6.901 c-1.134,0-1.956-0.824-1.956-1.957v-0.615c-3.193,1.955-7.106,3.604-11.535,3.604c-11.434,0-16.789-7.006-16.789-18.025v-17.512 c0-11.021,5.355-18.023,16.789-18.023c4.223,0,7.931,1.235,11.021,2.783v-21.425c0-1.137,0.825-1.959,1.958-1.959h7.415 c1.134,0,1.958,0.822,1.958,1.959v69.214C325.679,375.604,324.854,376.428,323.721,376.428" />
        <path class="svg-click-letter" d="M362.245,342.645c0-5.148-2.062-8.756-7.728-8.756c-2.78,0-5.974,1.032-8.755,2.37 v30.384h7.931c6.182,0,8.552-3.396,8.552-8.548V342.645z M354.725,376.428h-18.333c-1.135,0-1.958-0.824-1.958-1.957v-69.214 c0-1.137,0.823-1.959,1.958-1.959h7.415c1.135,0,1.957,0.822,1.957,1.959v21.833c3.09-1.854,6.901-3.191,11.124-3.191 c11.433,0,16.688,7.004,16.688,18.023v16.48C373.575,369.628,367.495,376.428,354.725,376.428" />
        <path class="svg-click-letter" d="M419.514,376.428h-6.9c-1.133,0-1.957-0.824-1.957-1.957v-1.546 c-2.986,2.269-7.416,4.534-13.287,4.534c-11.228,0-15.038-6.799-15.038-17.511v-33.062c0-1.134,0.823-1.959,1.958-1.959h7.417 c1.132,0,1.957,0.825,1.957,1.959v32.032c0,4.841,1.441,7.929,6.899,7.929c3.191,0,6.694-1.438,9.579-2.986v-36.976 c0-1.133,0.824-1.958,1.956-1.958h7.416c1.133,0,1.957,0.825,1.957,1.958v47.585C421.471,375.604,420.646,376.428,419.514,376.428" />
        <path class="svg-click-letter" d="M449.076,394.145c-0.412,1.029-1.03,1.854-2.162,1.854h-8.345 c-1.132,0-1.955-0.928-1.544-1.955l5.869-17.202l-16.378-49.954c-0.307-1.027,0.312-1.957,1.548-1.957h8.138 c1.132,0,1.955,0.723,2.265,1.854l10.507,32.65l11.021-32.65c0.412-1.028,1.133-1.854,2.266-1.854h8.139 c1.234,0,1.954,1.028,1.544,2.062L449.076,394.145z" />
      </svg>
    </div>
    <div class='button'>
      PayPal

      <svg class="svg-paypal" viewBox="0 0 512 512">
        <path class="svg-paypal-border" d="M481.874,102.698c13.854,0,25.126,11.271,25.126,25.126v257.899c0,13.854-11.271,25.126-25.126,25.126 H30.143c-13.854,0-25.126-11.271-25.126-25.126V127.824c0-13.854,11.271-25.126,25.126-25.126H481.874 M481.874,97.698H30.143 c-16.638,0-30.126,13.488-30.126,30.126v257.899c0,16.64,13.488,30.126,30.126,30.126h451.731 c16.64,0,30.126-13.486,30.126-30.126V127.824C512,111.186,498.513,97.698,481.874,97.698L481.874,97.698z" />
        <path class="svg-paypal-letter1to3" d="M104.955,202.144H62.86l-18.652,85.61h24.705l6.048-28.363h17.642c16.888,0,31.006-10.408,34.785-28.104 C131.671,211.252,117.305,202.144,104.955,202.144z M104.198,231.287c-1.512,6.506-7.813,11.71-14.115,11.71H78.488l5.294-23.418 H95.88C101.932,219.579,105.963,224.783,104.198,231.287z" />
        <path class="svg-paypal-letter1to3" d="M161.04,219.579c-10.655,0-19.083,2.862-25.277,4.165l-1.981,16.392 c2.973-1.562,13.136-4.422,21.557-4.684c8.427-0.261,13.384,1.559,11.895,8.847c-25.026,0-41.876,5.202-45.346,21.598 c-4.958,28.104,25.521,27.322,37.414,15.092l-1.484,6.767h22.55l9.663-44.757C193.996,224,176.648,219.32,161.04,219.579z M162.772,265.375c-1.238,5.982-6.195,8.589-11.894,8.852c-4.957,0.256-9.168-4.17-5.947-9.371 c2.477-4.422,9.415-5.465,13.381-5.465c1.983,0,3.715,0,5.699,0C163.517,261.473,163.021,263.297,162.772,265.375z" />
        <polygon class="svg-paypal-letter1to3" points="199.855,220.809 222.402,220.809 226.04,260.68 248.103,220.809 271.371,220.809 217.796,316.229 192.582,316.229 209.064,288.175 199.855,220.809" />
        <path class="svg-paypal-letter4to6" d="M323.965,202.144h-41.985l-18.605,85.61h24.387l6.287-28.363h17.35c17.093,0,31.174-10.408,34.947-28.104 C350.614,211.252,336.033,202.144,323.965,202.144z M323.215,231.287c-1.513,6.506-8.05,11.71-14.338,11.71h-11.311l5.03-23.418 h12.066C320.952,219.579,324.722,224.783,323.215,231.287z" />
        <path class="svg-paypal-letter4to6" d="M380.913,219.579c-10.783,0-19.312,2.862-25.833,4.165l-2.01,16.392 c3.263-1.562,13.545-4.422,22.076-4.684c8.528-0.261,13.544,1.559,11.791,8.847c-25.336,0-42.396,5.202-45.907,21.598 c-5.021,28.104,25.841,27.322,38.13,15.092l-1.507,6.767h22.576l9.787-44.757C414.025,224,396.716,219.32,380.913,219.579z M382.418,265.375c-1.254,5.982-6.017,8.589-11.786,8.852c-5.016,0.256-9.535-4.17-6.272-9.371 c2.513-4.422,9.535-5.465,13.799-5.465c1.753,0,3.769,0,5.519,0C383.171,261.473,382.915,263.297,382.418,265.375z" />
        <polygon class="svg-paypal-letter4to6" points="429.327,201.88 410.649,287.754 433.583,287.754 452.491,201.88 429.327,201.88" />
      </svg>
    </div>

  </div>
    <form action="<?php echo base_url();?>Booking/recipt" method="POST">
			<?php 
        $event_id=$event;
        $event_detail= $this->booking_model->get_event_by_id($event_id);
			?>
    <input type="hidden" name="event_id" value="<?php echo $event_detail['specificEventData']['id'];?>">
    <input type="hidden" name="price" value="<?php echo $event_detail['specificEventData']['e_price'];?>">
				<div class="row" style="text-align: center;">
				<div class="col-lg-12">
				<input type="submit" class="btn btn-primary" value="Pay ( Rs <?php echo $event_detail['specificEventData']['e_price'];?> )"  >
				</div>
				</div>
    </form>
  <br/>
</div>

<div class='footer'>
  <div class="devices">
       
  </div>
  
</div>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script >$(document).ready(function() {
  $('.button').on('click', function() {
    $('.button').removeClass('active');
    $(this).toggleClass('active');
  });
});
//# sourceURL=pen.js
</script>
</body></html>
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