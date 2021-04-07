<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Universal - All In 1 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url('assets')?>/vendors/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url('assets')?>/vendors/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="<?php echo base_url('assets')?>/vendors/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="<?php echo base_url('assets')?>/vendors/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url('assets')?>/vendors/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url('assets')?>/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url('assets')?>/css/custom.css">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="<?php echo base_url('assets')?>/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo base_url('assets')?>/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('assets')?>/img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets')?>/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets')?>/img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets')?>/img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets')?>/img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('assets')?>/img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets')?>/img/apple-touch-icon-152x152.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div id="all">
      <!-- Top bar left -->
        <?= $this->include('Modules\FrontEndLayout\Views\topbar-left') ?>
      <!-- Top bar left end-->
      <!-- Top Bar Rignt-->
        <?= $this->include('Modules\FrontEndLayout\Views\topbar-right') ?>      
      <!-- Top Bar Rignt end-->
      <!-- Navbar Start-->
        <?= $this->include('Modules\FrontEndLayout\Views\navbar') ?>        
      <!-- Navbar End-->     
      <!-- Slide-->
        <?= $this->include('Modules\FrontEndLayout\Views\slide') ?> 
      <!-- Slide End-->
      <section class="bar">
        <div class="container text-center">
          <div class="col-md-12">
            <div class="heading text-center">
              <h2>Our main focus</h2>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-desktop"></i></div>
                  <h3 class="h4">Webdesign</h3>
                  <p>Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-print"></i></div>
                  <h3 class="h4">Print</h3>
                  <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural hastily is justice. Six draw you him full not mean evil. Prepare garrets it expense windows shewing do an.</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-globe"></i></div>
                  <h3 class="h4">SEO and SEM</h3>
                  <p>Am terminated it excellence invitation projection as. She graceful shy believed distance use nay. Lively is people so basket ladies window expect.</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-lightbulb-o"></i></div>
                  <h3 class="h4">Consulting</h3>
                  <p>Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-envelope-o"></i></div>
                  <h3 class="h4">Email Marketing</h3>
                  <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural hastily is justice. Six draw you him full not mean evil. Prepare garrets it expense windows shewing do an.</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-user"></i></div>
                  <h3 class="h4">UX</h3>
                  <p>Am terminated it excellence invitation projection as. She graceful shy believed distance use nay. Lively is people so basket ladies window expect.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bar background-pentagon no-mb">
        <div class="container">
          <div class="row showcase text-center">
            <div class="col-md-3 col-sm-6">
              <div class="item">
                <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-align-justify"></i></div>
                <h4><span class="h1 counter">580</span><br> Websites</h4>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="item">
                <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-users"></i></div>
                <h4><span class="h1 counter">100</span><br>Satisfied Clients</h4>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="item">
                <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-copy"></i></div>
                <h4><span class="h1 counter">320</span><br>Projects</h4>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="item">
                <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-font"></i></div>
                <h4><span class="h1 counter">923</span><br>Magazines and Brochures</h4>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bar background-white no-mb">
        <div data-animate="fadeInUpBig" class="container"> 
          <div class="row">
            <div class="col-md-12">
              <div class="heading text-center">
                <h2>Latest works from our portfolio</h2>
              </div>
              <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris </p>
              <div class="row portfolio text-center color-white">
                <div class="col-md-4">
                  <div class="box-image">
                    <div class="image"><img src="<?php echo base_url('assets')?>/img/portfolio-1.jpg" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name">
                            <h3><a href="portfolio-detail.html" class="color-white">Portfolio item</a></h3>
                          </div>
                          <div class="text">
                            <p class="d-sm-none">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                            <p class="buttons"><a href="portfolio-detail.html" class="btn btn-template-outlined-white">View</a><a href="#" class="btn btn-template-outlined-white">Website</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box-image">
                    <div class="image"><img src="<?php echo base_url('assets')?>/img/portfolio-2.jpg" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name">
                            <h3><a href="portfolio-detail.html" class="color-white">Portfolio item</a></h3>
                          </div>
                          <div class="text">
                            <p class="d-sm-none">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                            <p class="buttons"><a href="portfolio-detail.html" class="btn btn-template-outlined-white">View</a><a href="#" class="btn btn-template-outlined-white">Website</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box-image">
                    <div class="image"><img src="<?php echo base_url('assets')?>/img/portfolio-3.jpg" alt="" class="img-fluid">
                      <div class="overlay d-flex align-items-center justify-content-center">
                        <div class="content">
                          <div class="name">
                            <h3><a href="portfolio-detail.html" class="color-white">Portfolio item</a></h3>
                          </div>
                          <div class="text">
                            <p class="d-sm-none">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                            <p class="buttons"><a href="portfolio-detail.html" class="btn btn-template-outlined-white">View</a><a href="#" class="btn btn-template-outlined-white">Website</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="see-more text-center">
                <p>Do you want to see more?</p><a href="portfolio-4.html" class="btn btn-template-outlined">See more of our work</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bar bg-gray no-mb">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="heading text-center">
                <h3>Our Clients</h3>
              </div>
              <ul class="list-unstyled owl-carousel customers no-mb">
                <li class="item"><img src="<?php echo base_url('assets')?>/img/customer-1.png" alt="" class="img-fluid"></li>
                <li class="item"><img src="<?php echo base_url('assets')?>/img/customer-2.png" alt="" class="img-fluid"></li>
                <li class="item"><img src="<?php echo base_url('assets')?>/img/customer-3.png" alt="" class="img-fluid"></li>
                <li class="item"><img src="<?php echo base_url('assets')?>/img/customer-4.png" alt="" class="img-fluid"></li>
                <li class="item"><img src="<?php echo base_url('assets')?>/img/customer-5.png" alt="" class="img-fluid"></li>
                <li class="item"><img src="<?php echo base_url('assets')?>/img/customer-6.png" alt="" class="img-fluid"></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="bar background-white no-mb">
        <div class="container">
          <div class="col-md-12">
            <div class="heading text-center">
              <h2>From our blog</h2>
            </div>
            <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. <a href="blog.html">Check our blog!</a></p>
            <div class="row">
              <div class="col-lg-3">
                <div class="home-blog-post">
                  <div class="image"><img src="<?php echo base_url('assets')?>/img/portfolio-4.jpg" alt="..." class="img-fluid">
                    <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
                  </div>
                  <div class="text">
                    <h4><a href="#">Fashion Now </a></h4>
                    <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a></p>
                    <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p><a href="#" class="btn btn-template-outlined">Continue Reading</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="home-blog-post">
                  <div class="image"><img src="<?php echo base_url('assets')?>/img/portfolio-3.jpg" alt="..." class="img-fluid">
                    <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
                  </div>
                  <div class="text">
                    <h4><a href="#">What to do</a></h4>
                    <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a></p>
                    <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p><a href="#" class="btn btn-template-outlined">Continue Reading</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="home-blog-post">
                  <div class="image"><img src="<?php echo base_url('assets')?>/img/portfolio-5.jpg" alt="..." class="img-fluid">
                    <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
                  </div>
                  <div class="text">
                    <h4><a href="#">5 ways to look awesome</a></h4>
                    <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a></p>
                    <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p><a href="#" class="btn btn-template-outlined">Continue Reading</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="home-blog-post">
                  <div class="image"><img src="<?php echo base_url('assets')?>/img/portfolio-6.jpg" alt="..." class="img-fluid">
                    <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
                  </div>
                  <div class="text">
                    <h4><a href="#">Fashion Now </a></h4>
                    <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a></p>
                    <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p><a href="#" class="btn btn-template-outlined">Continue Reading</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- GET IT-->
      <div class="get-it">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 text-center p-3">
              <h3>Do you want cool website like this one?</h3>
            </div>
            <div class="col-lg-4 text-center p-3">   <a href="#" class="btn btn-template-outlined-white">Buy this template now</a></div>
          </div>
        </div>
      </div>
      <!-- FOOTER -->
      <?= $this->include('Modules\FrontEndLayout\Views\footer') ?>
    </div>
    <!-- Javascript files-->
    <script src="<?php echo base_url('assets')?>/vendors/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets')?>/vendors/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo base_url('assets')?>/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets')?>/vendors/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url('assets')?>/vendors/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="<?php echo base_url('assets')?>/vendors/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="<?php echo base_url('assets')?>/vendors/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('assets')?>/vendors/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="<?php echo base_url('assets')?>/js/jquery.parallax-1.1.3.js"></script>
    <script src="<?php echo base_url('assets')?>/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url('assets')?>/vendors/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url('assets')?>/js/front.js"></script>
  </body>
</html>