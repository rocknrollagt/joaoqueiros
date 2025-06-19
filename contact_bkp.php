<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="style/images/favicon.png">
<title>João Queirós - Graphic Design</title>
<!-- Bootstrap core CSS -->
<link href="style/css/bootstrap.css" rel="stylesheet">
<link href="style/css/settings.css" rel="stylesheet">
<link href="style/css/owl.carousel.css" rel="stylesheet">
<link href="style/js/google-code-prettify/prettify.css" rel="stylesheet">
<link href="style/js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" media="all" />
<link href="style/js/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.2" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet">
<link href="style/css/color/green.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Sorts+Mill+Goudy:400,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="style/type/fontello.css" rel="stylesheet">
<link href="style/type/budicons.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="style/js/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
</head>
<body class="full-layout">
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>
<div class="body-wrapper">
  <div class="navbar basic default">
    <div class="navbar-header">
      <div class="container">
        <div class="basic-wrapper"> <a class="btn responsive-menu pull-right" data-toggle="collapse" data-target=".navbar-collapse"><i></i></a> <a class="navbar-brand" href="index.html"><img src="style/images/logo.png" alt="" data-src="style/images/logo.png" data-ret="style/images/logo@2x.png" class="retina" /></a> </div>
        <nav class="collapse navbar-collapse pull-right">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a>
             
            </li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
        <!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <!--/.navbar -->
  <div class="offset"></div>
  
  
  <div class="light-wrapper">
    <div class="container inner">
    <h3 class="section-title text-center">Get in Touch</h3>
          <div class="lead text-center">feel free to me a line</div>
          
      <div class="row">
        <aside class="col-sm-4 sidebar left-sidebar lp20">
          <div class="sidebox widget">
          <h5 class="widget-title">Based in Porto - Portugal</h5>
           <!-- <p>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna. Sed posuere consectetur est at lobortis. Morbi leo risus porta.</p>-->
            <div class="contact-info"> <i class="icon-location"></i> Porto - Portugal <br />
              <!--<i class="icon-phone"></i>+00 (123) 456 78 90 <br />-->
              <!--<i class="icon-mobile"></i>+00 (555) 345 67 89 <br />-->
              <i class="icon-mail"></i> <a href="mailto:joa_oj_jj@hotmail.com">joa_oj_jj@hotmail.com</a> </div>
          </div>
          <!-- /.widget --> 
          
          <div class="sidebox widget">
            <h5 class="widget-title">Elsewhere</h5>
            <ul class="social">
              <li><a href="https://vimeo.com/jjbq"><i class="icon-s-vimeo"></i></a></li>
              <li><a href="https://www.youtube.com/user/Joaojbq"><i class="icon-s-youtube"></i></a></li>
              <li><a href="https://www.behance.net/user/?username=joaojbqueiros"><i class="icon-s-behance"></i></a></li>
              <li><a href="https://www.linkedin.com/in/joaojbqueiros/"><i class="icon-s-linkedin"></i></a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </aside>
        <!-- /.col -->
        
        <div class="col-sm-8">

          <div class="form-container">
            <div class="response alert alert-success"></div>
			
			<form class="forms" action="send_form_email_uk.php" method="post" enctype="multipart/form-data" id="contactForm" name="contactForm">
              <fieldset>
                <ol>
                  <li class="form-row text-input-row name-field">
                    <input type="text" name="name" id="name" class="text-input defaultText required" title="Name (Required)"/>
                  </li>
                  <li class="form-row text-input-row email-field">
                    <input type="text" name="email" id="email" class="text-input defaultText required email" title="Email (Required)"/>
                  </li>
                  <li class="form-row text-input-row subject-field">
                    <input type="text" name="subject" class="text-input defaultText" title="Subject"/>
                  </li>
                  <li class="form-row text-area-row">
                    <textarea name="mensagem" id="message" class="text-area required" ></textarea>
                  </li>
                  <li class="form-row hidden-row">
                    <input type="hidden" name="hidden" value="" />
                  </li>
                  <li class="nocomment">
                    <label for="nocomment">Leave This Field Empty</label>
                    <input id="nocomment" value="" name="nocomment" />
                  </li>
                  <li class="button-row">
                    <input type="submit" value="Submit" name="submit" class="btn btn-submit bm0" />
                  </li>
                </ol>
                <input type="hidden" name="v_error" id="v-error" value="Required" />
                <input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />
              </fieldset>
            </form>
			
			
            <!--<form class="forms" action="send_form_email_uk.php" method="post">
              <fieldset>
                <ol>
                  <li class="form-row text-input-row name-field">
                    <input type="text" name="name" class="text-input defaultText required" title="Name (Required)"/>
                  </li>
                  <li class="form-row text-input-row email-field">
                    <input type="text" name="email" class="text-input defaultText required email" title="Email (Required)"/>
                  </li>
                  <li class="form-row text-input-row subject-field">
                    <input type="text" name="subject" class="text-input defaultText" title="Subject"/>
                  </li>
                  <li class="form-row text-area-row">
                    <textarea name="message" class="text-area required"></textarea>
                  </li>
                  <li class="form-row hidden-row">
                    <input type="hidden" name="hidden" value="" />
                  </li>
                  <li class="nocomment">
                    <label for="nocomment">Leave This Field Empty</label>
                    <input id="nocomment" value="" name="nocomment" />
                  </li>
                  <li class="button-row">
                    <input type="submit" value="Submit" name="submit" class="btn btn-submit bm0" />
                  </li>
                </ol>
                <input type="hidden" name="v_error" id="v-error" value="Required" />
                <input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />
              </fieldset>
            </form>-->
          </div>
          <!-- /.form-container --> 
        </div>
        <!-- /.col -->
         
      </div>
      <!-- /.row -->
      
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper -->
  
  <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2499.4483800426133!2d3.2241689!3d51.2108153!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c350cfcf934d7d%3A0xa4d8f385ffa7d70b!2sChoco-Story!5e0!3m2!1sen!2str!4v1534408440419" width="100%" height="350" frameborder="0" style="border:0; display:block;" allowfullscreen></iframe> -->
  
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96119.53720393582!2d-8.691993560491226!3d41.16212173711347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2465abc4e153c1%3A0xa648d95640b114bc!2sPorto!5e0!3m2!1spt-PT!2spt!4v1589469219265!5m2!1spt-PT!2spt" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  
  <footer class="black-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-3">
          <div class="widget"> <img src="style/images/logo.png" alt="" data-src="style/images/logo.png" data-ret="style/images/logo@2x.png" class="retina" />
            <div class="divide20"></div>
           <!-- <p>"Keep your eyes on the stars, and your feet on the ground" T.Roosevelt</p> -->
            
          </div>
          <!-- /.widget 

         
        
          </div>
          <!-- /.widget -->
        </div>
        <!-- /col -->
     
        <div class="col-sm-3">
          <div class="widget">
            <!--<h4 class="widget-title">About Me</h4>-->
            <ul class="post-list">  
              <li>
                <h6><p>João Queirós - Branding designer with more them 900 brands around the world. (2014-2022)</p></h6></li>
             
             
            </ul>
            <!-- /.post-list -->
          </div>
          <!-- /.widget -->
        </div> 
        <!-- /col -->
		
		<div class="col-sm-3">
          <div class="widget">
           
            <ul class="post-list">
      
              <li>
                <h6><p>"Keep your eyes on the stars, and your feet on the ground"</p></h6>
                <em>Theodore Roosevelt</em> </li>
             
            </ul>
            <!-- /.post-list -->
          </div>
          <!-- /.widget -->
        </div> 
        <!-- /col -->
        
        <div class="col-sm-3">
          <div class="widget">
           <!-- <h4 class="widget-title">Get In Touch</h4>
            <p>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna. Sed posuere consectetur est at lobortis.</p>-->
            <div class="divide10"></div>
            <div class="contact-info"> <i class="icon-location"></i> Porto - Portugal <br />
             <!-- <i class="icon-phone"></i> <br />-->
              <!-- <i class="icon-mobile"></i>+00 (555) 345 67 89 <br /> -->
              <i class="icon-mail"></i> <a href="mailto:joa_oj_jj@hotmail.com">joa_oj_jj@hotmail.com</a> </div>
          </div>
        </div> 
        <!-- /col 
        
        <div class="col-sm-3">
          <div class="widget">
            <h4 class="widget-title">Tags</h4>
            <div class="tagcloud"> <a href="#">blogroll</a> <a href="#" class="tag7">daily</a> <a href="#" class="tag1">dialog</a> <a href="#" class="tag1">gallery</a> <a href="#" class="tag2">journal</a> <a href="#" class="tag1">link</a> <a href="#" class="tag3">motion</a> <a href="#" class="tag1">music</a> <a href="#" class="tag8">photo</a> <a href="#" class="tag4">professional</a> <a href="#" class="tag6">quotation</a> <a href="#" class="tag1">show</a> <a href="#" class="tag5">sound</a> <a href="#" class="tag1">tv</a> <a href="#" class="tag1">video</a> <a href="#" class="tag1">gift</a> </div>
          </div>
          <!-- 
          
          <div class="widget">
            <h4 class="widget-title">Categories</h4>
            <ul class="circled">
              <li><a href="#">Web Design (21)</a></li>
              <li><a href="#">Photography (19)</a></li>
              <li><a href="#">Graphic Design (16)</a></li>
              <li><a href="#">Manipulation (15)</a></li>
            </ul>
          </div>
          <!-- /.widget

        </div>
        <!-- /col --> 
      </div>
      <!-- /.row --> 
    </div>
    <!-- .container -->
    
    <div class="subfooter">
      <div class="container">
        <p class="pull-left">© 2020 João Queirós Design. All rights reserved.</p>
        <ul class="social pull-right">
		<li><a href="https://www.behance.net/user/?username=joaojbqueiros"><i class="icon-s-behance"></i></a></li>
        <li><a href="https://vimeo.com/jjbq"><i class="icon-s-vimeo"></i></a></li>
        <li><a href="https://www.youtube.com/user/Joaojbq"><i class="icon-s-youtube"></i></a></li>
        <li><a href="https://www.linkedin.com/in/joaojbqueiros/"><i class="icon-s-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </footer>
  <!-- /footer --> 
  
</div>
<!-- /.body-wrapper --> 
<script src="style/js/jquery.min.js"></script> 
<script src="style/js/bootstrap.min.js"></script> 
<script src="style/js/twitter-bootstrap-hover-dropdown.min.js"></script> 
<script src="style/js/jquery.themepunch.plugins.min.js"></script> 
<script src="style/js/jquery.themepunch.revolution.min.js"></script> 
<script src="style/js/jquery.themepunch.tools.min.js"></script>
<script src="style/js/retina.js"></script> 
<script src="style/js/owl.carousel.min.js"></script> 
<script src="style/js/jquery.isotope.min.js"></script>
<script src="style/js/jquery.fancybox.pack.js"></script> 
<script src="style/js/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.2"></script> 
<script src="style/js/fancybox/helpers/jquery.fancybox-media.js?v=1.0.0"></script> 
<script src="style/js/jquery.fitvids.js"></script> 
<script src="style/js/jquery.easytabs.min.js"></script>
<script src="style/js/jquery.slickforms.js"></script> 
<script src="style/js/google-code-prettify/prettify.js"></script>
<script src="style/js/scripts.js"></script>
</body>
</html>