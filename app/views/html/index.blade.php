<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is Delhi University Community Radio Official website.">
    <meta name="author" content="Vineet">

    <title>Delhi University Community Radio </title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" sizes="16x16">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
	
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

	<!--Social-plugin CSS-->
	<link rel="stylesheet" type="text/css" href="css/social-fixed.css" />
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   <script src="js/changeImage.js"></script>
   <script type="js/jquery.js"></script>
   <script src="js/audioplayer.js"></script>
    <script>$( function() { $( 'audio' ).audioPlayer(); } );</script>
    <script type="text/javascript">$( 'audio' ).audioPlayer(
{
    classPrefix: 'player', // default value: 'audioplayer'
    strPlay: 'Play', // default value: 'Play'
    strPause: 'Pause', // default value: 'Pause'
    strVolume: 'Volume', // default value: 'Volume'
});</script>
   <script>
  function diffImage(img) 
  {
    if(img.src.match("playbutton"))
    {
      console.log('black');

      img.src = "img/pausebutton.png";
      
    }
    else
    {
      console.log('blank');
      img.src = "img/playbutton.png";
    }
  }
</script> 

</head>


<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<!-- <img src="img/playbutton.png" alt = "play radio" style="margin: 7px 0px" onclick=diffImage(this)>
				
				<img src="img/stopbutton.png" alt = "stop radio">
                -->
                <audio src="http://ducr1.du.ac.in:8000/DUStream1.mp3" preload="auto" controls style="padding-top:1em;"></audio>
                <a class="navbar-brand page-scroll" href="#page-top">DUCR 90.4</a>
				
				
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Programms</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>

        <div class="header-content">
            <div class="header-content-inner">
                <br>
                <img src="img/dulogo.jpg.png" alt = "DU Logo">
                <h1>DELHI UNIVERSITY COMMUNITY RADIO 90.4MHz</h1>
                <hr>
                <p>"Some people believe in God, I believe in music. Some people pray, I turn up the radio." - 30 Seconds to Mars <br>
                    WELCOME TO DELHI UNIVERSITY COMMUNITY RADIO
                    </p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <h2 class="section-heading">Notifications</h2>
                    <hr class="light">
                    <p class="text-family text-justify"><marquee direction="up" scrollamount="3"  scrolldelay="0" onmousedown="this.stop()" onmouseover="this.stop()" onmousemove="this.stop()" onmouseout="this.start()" vspace="0">
   
					<ul style="list-style-type:circle">
					
					 
					@foreach ($a as $b)
					<li><a href="{{$b->link}}">{{$b->notification}}</li>
					<br>  
                    <!-- <li><a href="https://www.google.com/">Antardhwani 2015 </a></li>
					<br>
					<li><a href="https://www.google.com/">GYANODAYA V</li>
					<br>
					<li><a href="https://www.google.com/">Listen Live Commentary of Antardhwani</li>
					<br>
					<li><a href="https://www.google.com/">Sub-Commitee has been formed to deal with the matters of DUCR by University administration</li>
					</ul> -->
					@endforeach
					</marquee></p> 

          

                </div>
				<div class="col-lg-5 col-md-6">
                    <h2 class="section-heading text-center">From the Desk</h2>
                    <hr class="light">
                    <p class="text-faded text-justify">Delhi University Community Radio, DUCR 90.4 MHz. was established in 2007. From the day of begining, it is a Radio of the community, by the community, for the community. We believe to make our audience the main protagonists, by their involvement in all aspects of its management and programme production, and by providing them with programming that will help them in the development and social advancement of our community. We invite the people, residing in and around Delhi University to come and join us, to make our community the best one in the world.
We are also providing internships and time to time training programmes, so that they can boost their communication skills, productivity, professional development and the most important the way one should serve. 
</p>

                   

                </div>
				<div class="col-lg-4 col-md-6 text-center">
                    <h2 class="section-heading">About Us</h2>
                    <hr class="light">
                    <p class="text-faded text-justify">Delhi University Community Radio, DUCR 90.4 is a Community Radio Station situated inside the University stadium, University of Delhi. It was inaugurated by Sh. Kapil Sibal, then Honourable Minister of Science & Technology and Minister of Earth Sciences, Government of India on 2nd October 2007 in the presence of Prof. Deepak Pental, Hon’ble Vice Chancellor of the University of Delhi. 
					Prof Pental emphasized that the larger participation of faculty and students will strengthen the DUCR and make it popular among the community residing in and around University Campus. DUCR is functioning under the supervision of R.K Singh Consultant, DUCR (Technical and Program) former Engineer-in-Chief of Doordarshan. The main thrust area of DUCR 90.4 MHz is to broadcast student centric community based programmes. </p>

                </div>
				</div>
                <div class="row">
                    <div class="col-sm-offset-4 col-sm-4"><a href="{{ URL::to('committee') }}" target="_blank"><button type="button" class="btn btn-info">Our Committees</button></a>
			        </div>
                    <div class="col-sm-4"><a href="{{ URL::to('team') }}" target="_blank"><button type="button" class="btn btn-info">Meet our Team</button></a>
                    </div>
                </div>

				</div>
					
   
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
			   
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Programms at DUCR</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Our Schedule</h3>
                        <p class="text-muted">Know our schedule and fill your calendar with the programms that you like.</p>
                    </div>
                </div>
                <!--<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Ready to Ship</h3>
                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>-->
                <div class="col-lg-4 col-md-6 text-center">
                    <a href="archive"><div class="service-box">
                        
                        <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
                        <h3>Recent ones</h3></a>
                        <p class="text-muted">Don't worry if you missed the live programm. Listen to them now.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <a href="archive"><div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Loved Archives</h3></a>
                        <p class="text-muted">Listen to the best of the programms of DUCR in this section.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ URL::to('gallery') }}" target="_blank" class="portfolio-box">
                        <img src="img/h1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    On Trip - Gyanodya 2015
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ URL::to('gallery') }}" target="_blank" class="portfolio-box">
                        <img src="img/header33.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    University Fest - Antardhvani 2015
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ URL::to('gallery') }}" target="_blank" class="portfolio-box">
                        <img src="img/h1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Interaction with Vice Chancellor
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ URL::to('gallery') }}" target="_blank" class="portfolio-box">
                        <img src="img/header33.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Visit of DUCR through lens
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ URL::to('gallery') }}" target="_blank" class="portfolio-box">
                        <img src="img/h1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Conducting a programme from Studio
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ URL::to('gallery') }}" target="_blank" class="portfolio-box">
                        <img src="img/header33.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    DUCR team on stall - Antardhvani 2015
                                </div>
                            </div>
                        </div>
                    </a>
                </div> 
            </div>
        </div>
    </section>

    <!--<aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Free Download at Start Bootstrap!</h2>
                <a href="#" class="btn btn-default btn-xl wow tada">Download Now!</a>
            </div>
        </div>
    </aside>-->
    
	<div class="fixed-side-social-container">
		<a class="social-icon google-icon" href="https://plus.google.com/106032972855787333251" target="new" title="Give Feedback/Suggestions"><span></span></a>
	</div>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Want to Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your journey with us? That's great! Just fill this <a href="php/register.php">form</a> and we will get back to you as soon as possible!</p>

                </div>
                <!--<div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>999-987-1583</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">ducr90.4@ducr.du.ac.in</a></p>
                </div>-->
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-2 col-lg-offset-2 text-center">
                    <p class="foot"><a href="{{ URL::to('faq') }}" target="_blank">FAQ's</a></p>
                </div>
                <div class="col-lg-2 text-center">
                    <p class="foot"><a href="{{ URL::to('privacy') }}" target="_blank">Privacy Policy</a></p>
                </div>
                <div class="col-lg-2 text-center">
                    <p class="foot"><a href="{{ URL::to('credit') }}" target="_blank">Credits</a></p>
                </div>
                <div class="col-lg-2 text-center">
                    <p class="foot"><a href="{{ URL::to('adminpanel') }}" target="_blank">Admin</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="foot">If you find any bugs please report to <a href="mailto:developer@ducr.du.ac.in">developer@ducr.du.ac.in</a></p>
                </div>
            </div>
        </div>
    </section>
	
        <!--<div class="container text-center">
            <div class="call-to-action">
                <h2>Free Download at Start Bootstrap!</h2>
                <a href="#" class="btn btn-default btn-xl wow tada">Download Now!</a>
            </div>
        </div>
    </aside>-->
	    <!--<section id="Login">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">please fill the form to login</h2>
                    <hr class="primary">
                    <p>Ready to start login with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>

                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>9999871583</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@vineetrauhila@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>-->
<!--
	<div id="feedback" style="text-align:left;margin:0;padding:0;font:inherit">
			<a href="#">feedback</a>
		</div>

		<script>
			// Get the wrapper div, and the contained &lt;a&gt; element
			var feedback_btn = document.getElementById("feedback");
			var feedback_link = feedback_btn.getElementsByTagName("a")[0];

			// Check for browsers that don't support CSS3 transforms or IE's filters
			if(feedback_btn.style.Transform == undefined && feedback_btn.style.WebkitTransform == undefined && feedback_btn.style.MozTransform == undefined && feedback_btn.style.OTransform == undefined && feedback_btn.filters == undefined) {

				// Swap width with height, change padding
				feedback_link.style.width="15px";
				feedback_link.style.height="70px";
				feedback_link.style.padding="16px 8px";
				
				// Insert vertical SVG text
				feedback_link.innerHTML = "<object type='image/svg+xml' data='feedback_vertical.svg'></object>";
			}

			// OnClick event here
			feedback_link.onclick = function(e) { e.preventDefault(); alert("Clicked feedback link"); }
		</script>
-->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
