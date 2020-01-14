<?php include('server.php') ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/icons/favicon.png"/>
        <title>ভয়েজার</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
        <link rel="stylesheet" href="css/lightbox.min.css">
        <link href="css/responsive.css" rel="stylesheet">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
        <script src="js/instafeed.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="page">
            <!---header top---->
            <div class="top-header">
                <div class="container">
                  
                        <div class="col-md-3">
                            <div class="social-grid">
                                <ul class="list-unstyled text-left">
                                    <li><a><i class="fa fa-facebook"></i></a></li>
                                    <li><a><i class="fa fa-twitter"></i></a></li>
                                    <li><a><i class="fa fa-linkedin"></i></a></li>
                                    <li><a><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
						 <div class="col-md-6 col-sm-12 col-xs-12 remove-padd">
                                <nav class="navbar navbar-default ">
                                    <div class="navbar-header page-scroll">
                                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>

                                    </div>
                                    <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                                        <ul class="list-unstyled nav1 cl-effect-10">
                                           
                                            <li><a data-hover="লগং করুন"  href="login.php"><span>লগং করুন</span></a></li>
                                        
                                           
                                    </div>
                                </nav>
                            </div>
                    </div>
                </div>
            </div>
            
  <div class="container">
                    <div class="top-row">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-6">
                                <div id="logo">
                                    
                                    <a href="#"><span>ভয়ে</span>জার </a>
                                </div>                       
                            </div>

                         
                        </div>
                    </div>
                </div>
            <!--end-->
         
            

            <!--dinning-->
            <section class="blog">
                <div class="container">
                    <div class="row">

                        <div class="col-md-9 col-sm-8 col-xs-12">
                              <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">
                           নিবন্ধন করুন
                </h3>
            </div>
            <div class="panel-body">
              <form accept-charset="UTF-8" role="form" action="server.php" method="POST" >
                <fieldset>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-fw fa-user"></i></span>
                      <input type="text" class="form-control" placeholder="নাম" name="username">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-fw fa-envelope"></i></span>
                      <input type="text" class="form-control" placeholder="ইমল ঠিকানা" name="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
                      <input type="text" class="form-control" placeholder="তালা" name="password">
                    </div>
                  </div>
                  <div class="checkbox">
                    <label>
                        <input name="remember" type="checkbox" value="Terms">
                       আমি আপনাদের  <a href="#">পদ  এবং শ্ র্তে রাজি</a>.
                      </label>
                  </div>
                  <input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign Me Up">
                </fieldset>
              </form>
              <p class="m-b-0 m-t">আগের   নিবন্ধন  করেছি <a href="login.php">Login here</a>.</p>
            </div>
          </div>
        </div>
      </div>
	  
                            <div class="clearfix"></div>
                            <div class="single-bottom comment-form">
                                <h3>আপনার মতামত দিন</h3>
                                <form action="#" method="post">
                                    <input type="text" class="form-control" name="নাম" placeholder="Name" required="">
                                    <input type="email" class="form-control" name="ইমেল ঠিকানা" placeholder="Email" required="">
                                    <textarea class="form-control" name="্বার্তা" placeholder="Message Here...." required=""></textarea>
                                    <input type="submit" class="submit-btn" value="পাঠান">
                                </form>
                            </div>
                        </div>
      
                    </div>
                </div>
            </section>
            <!--end-->
            <!---footer--->
                      <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12 width-set-50">
                            <div class="footer-details">
                                <h4>Get in touch</h4>
                                <ul class="list-unstyled footer-contact-list">
                                    <li>
                                        <i class="fa fa-map-marker fa-lg"></i>
                                        <p>ঠিকানা: ১/এ, ও.আর. নিজাম রোড, চট্টগ্রাম ৪০০ বাংলাদেশ.</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone fa-lg"></i>
                                        <p><a href="tel:+1-202-555-0100"> 8801558920202</a></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o fa-lg"></i>
                                        <p><a href="mailto:demo@info.com"> alif7alam@gmail.com</a></p>
                                    </li>
                                </ul>
                                <div class="footer-social-icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>                           
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                                <div class="input-group" id="subscribe">
                                    <input type="text" class="form-control subscribe-box" value="" name="subscribe" placeholder="EMAIL ID">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn subscribe-button"><i class="fa fa-paper-plane fa-lg"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 width-50 width-set-50">
                            <div class="footer-details">
                                <h4>explore</h4>
                                <ul class="list-unstyled footer-links">
                                    <li><a data-hover="প্রথম পাতা"  href="index.html"><span>প্রথম পাতা</span></a></li>
                                            <li><a data-hover="ছবি"  href="gallery.html"><span>ছবি</span></a></li>
                                            <li><a data-hover="ভ্রমন কাহিনি" href="vromon.html"><span>ভ্রমন কাহিনি</span></a></li>
                                            <li><a data-hover="খবর" href="news.html"><span>খবর</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="footer-details">
                                <h4>আমারা  ইনস্টাগ্রাম এ ও আছি</h4>
                                <div class="row">
                                    <div class="instagram-images">
                                        <div id="instafeed"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="copyright">
                        &copy; 2018 All right reserved. Designed by <a href="#" target="_blank">ভয়েজার</a>
                    </div>

                </div>
            </footer>


            <!--back to top--->
            <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
                <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
                <span>Top</span>
            </a>

        </div>
    </body>
</html>
