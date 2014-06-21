<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact - BrainWing</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
	<!-- Google Font CSS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans|Oswald|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
         <a href="index.html"> <img class="navbar-brand"  src="images/logo4.jpg" style="height:70px; width:250px;"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="about.html"><span id="title-bar">About</span></a></li>
            <li><a href="services.html"><span id="title-bar">Services</span></a></li>
			</li>
					                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span id="title-bar">Products </span><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="skyjib-8.html">SkyJib 8</a>
                            </li>
                            <li><a href="skyjib-x4.html">SkyJib X4</a>
                            </li>
                            <li><a href="skyjib-6.html">SkyJib 6</a>
                            </li>
                            <li><a href="xm-8.html">XM 8</a>
                            </li>
                            <li><a href="xm-6.html">XM 6</a>
                            </li>
							<li><a href="cx-600.html">CX 600</a>
                            </li>
							<li><a href="bot.html">BOT</a>
                            </li>
                        </ul>
                    </li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span id="title-bar">Portfolio </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
               <li id="columnportfolio">
									<a href="portfolio-1-col.html">1 Column Portfolio</a>
								</li>
								<li>
									<a href="video1.html">Aerial Videos</a>
								</li >
								<li id="columnportfoli_o">
									<a href="portfolio-3-col.html">3 Column Portfolio</a>
								</li>
								<li>
									<a href="image1.html">Aerial Images</a>
								</li>
								<li id="singlecolumnportfolio">
									<a href="portfolio-item.html">Single Portfolio Item</a>
								</li>
              </ul>
            </li>
			<li class="active"><a href="contact.php"><span id="title-bar">Contact</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span id="title-bar">Blog </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                 <!--   <li><a href="blog-home-1.html">Blog Home 1</a>
								<li>-->
                <li><a href="blog-home-2.html">Blog Home 2</a></li>
                <li><a href="blog-post.html">Blog Post</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span id="title-bar">Other Pages</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <!--  <li><a href="full-width.html">Full Width Page</a></li>
                <li><a href="sidebar.html">Sidebar Page</a></li>-->
                <li><a href="faq.html">FAQ</a></li>
               <!--   <li><a href="404.html">404</a></li>
                <li><a href="pricing.html">Pricing Table</a></li>-->
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <!-- Page Content -->

    <div class="container">
      
      <div class="row">
      
        <div class="col-lg-12">
          <h1 class="page-header">Contact <small>We'd Love to Hear From You!</small></h1>
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Contact</li>
          </ol>
        </div>
        
        <div class="col-lg-12">
          <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7547.190748800102!2d72.8242805753801!3d18.94929592851587!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce1926f276d3%3A0xafa4efe003d7ff03!2sBrainWing+Pvt+Ltd!5e0!3m2!1sen!2s!4v1395154341499;t=m&amp;z=4&amp;output=embed"></iframe>
        </div>

      </div><!-- /.row -->
      
      <div class="row">

        <div class="col-sm-8">
          <h3>Let's Get In Touch!</h3>
          <p>Feel free to get in touch with us via the contact form below or call us directly on the phone numbers listed or just drop by at the mentioned address. We love talking and if you're interesting we might even sip a coffee together :-)</p>
			<!--<?php 

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

			?>-->
            <form role="form" method="POST" action="contact-form-submission.php">
	            <div class="row">
	              <div class="form-group col-lg-4">
	                <label for="input1">Name</label>
	                <input type="text" name="contact_name" class="form-control" id="input1">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input2">Email Address</label>
	                <input type="email" name="contact_email" class="form-control" id="input2">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input3">Phone Number</label>
	                <input type="phone" name="contact_phone" class="form-control" id="input3">
	              </div>
	              <div class="clearfix"></div>
	              <div class="form-group col-lg-12">
	                <label for="input4">Message</label>
	                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
	              </div>
	              <div class="form-group col-lg-12">
	                <input type="hidden" name="save" value="contact">
	                <button type="submit" class="btn btn-primary">Submit</button>
	              </div>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
          <h3>BrainWing Pvt Ltd</h3>
          <h4>All we do is Drones</h4>
          <p>
            7, Gazdar Street, Chira Bazar<br>
             Mumbai 400002<br>
          </p>
         <!-- <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: +91 - 9930226272</p>    Commented Mohit number out-->
		  <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: +91 - 8097292722</p>
          <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:darshit@brainwing.in">darshit@brainwing.in</a></p>
          <p><i class="fa fa-clock-o"></i> <abbr title="Hours">H</abbr>: Monday - Friday: 10:00 AM to 7:00 PM</p>
          <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="http://www.facebook.com/BrainwingIndia" data-toggle="tooltip" data-placement="top" title="Facebook" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social linkedin-link"><a href="https://www.linkedin.com/company/2623854?trk=prof-exp-company-name" data-toggle="tooltip" data-placement="top" target="_blank" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a></li>
            <li class="tooltip-social google-plus-link"><a href="https://plus.google.com/110572457499931895647/about" data-toggle="tooltip" data-placement="top" target="_blank" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
          </ul>
        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="container">

      <hr>

      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; BrainWing Pvt Ltd 2013</p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>

  </body>
</html>
