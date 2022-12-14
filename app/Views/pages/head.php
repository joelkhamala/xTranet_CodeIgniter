<!DOCTYPE html>
<html lang="en">
<head>

	<title>xTranet Developers</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <!-- MAIN CSS -->
     <style>
     @import url('<?=base_url()?>/css/style.css');
     @import url('<?=base_url()?>/css/bootstrap.min.css');
     @import url('<?=base_url()?>/css/owl.carousel.css');
     @import url('<?=base_url()?>/css/owl.theme.default.min.css');
     @import url('<?=base_url()?>/css/font-awesome.min.css');
    </style>

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="/" class="navbar-brand">xTraNet Web Developers</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                         <li><a href="/#home" class="smoothScroll">Home</a></li>
                         <li><a href="/#feature" class="smoothScroll">Features</a></li>
                         <li><a href="/#about" class="smoothScroll">About us</a></li>
                         <li><a href="/#pricing" class="smoothScroll">Pricing</a></li>
                         <li><a href="/#contact" class="smoothScroll">Contact</a></li>
                         <li><a href="/#">Say hello - <span>info@xtranet.co</span></a></li>
                    </ul>
               </div>

          </div>
     </section>

     <!-- FEATURE -->
     <section id="" data-stellar-background-ratio="0.5" style="height: 50%">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">
                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="home-info">
                              <h3 class="display-1 text-center"><?= esc($title) ?></h3>
                              <h1 class="h1 text-center" style="color:#fff"><?= esc($title1) ?></h1>
                         </div>
                    </div>
               </div>
          </div>
     </section>