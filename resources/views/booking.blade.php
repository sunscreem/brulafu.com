<!DOCTYPE html>
<html>
<head>
    <!-- ==========================
    	Meta Tags
    =========================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ==========================
    	Title
    =========================== -->
    <title>Bruce Cameron - Bookings</title>

    <!-- ==========================
    	Favicons
    =========================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">


    <!-- ==========================
    	Fonts
    =========================== -->
    <link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lilita+One' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Alegreya+Sans+SC' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>


    <!-- ==========================
    	CSS
    =========================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/creative-brands.css" rel="stylesheet" type="text/css">
    <link href="css/vertical-carousel.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">

    <!-- ==========================
    	JS
    =========================== -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top">
	<a href="#page-top" class="scroll-up scroll"><i class="fa fa-chevron-up"></i></a>
    <h1>Freelancer</h1>

   <!-- ==========================
        HEADER - START
    =========================== -->

    <header>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavigation"><i class="fa fa-bars"></i></button>
                    <img src="image/bruce.png" class="navbar-logo pull-left" alt="" />
                    <a href="/" class="navbar-brand animated flipInX">Bruce Cameron</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="myNavigation">
                    <ul class="nav navbar-nav navbar-right animated flipInX">
                        <li><a href="#about" class="scroll">About me</a></li>
                       <!--  <li><a href="#reference" class="scroll">Reference</a></li>
                        <li><a href="#pricing" class="scroll">Pricing</a></li>
                        --> <li><a href="#contact" class="scroll">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>


    </header>
    <!-- ==========================
        HEADER - END
    =========================== -->



<section id="service" class="content-first" >
    <div class="container">
        <h2 class="scrollpoint sp-effect3">Make A Booking</h2>
        <h4 style="margin-bottom:30px;">IMPORTANT NOTE: *ALL* bookings <em>must</em> be confirmed by phone.</h4>
        <div class="row">
             <div class="col-md-10 col-sm-offset-1">
             <!-- Calendly inline widget begin -->
            <div class="calendly-inline-widget" data-url="https://calendly.com/brulafuvisual" style="min-width:320px;height:580px;"></div>
            <script type="text/javascript" src="https://calendly.com/assets/external/widget.js"></script>
            <!-- Calendly inline widget end -->

    </div>
</section>


    <!-- ==========================
    	FOOTER - START
    =========================== -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 scrollpoint sp-effect3">

               			<ul class="brands brands-inline">
                            <li><a href="https://www.facebook.com/brulafu"><i class="fa fa-facebook  hi-icon-effect-8"></i></a></li>
                            <li><a href="https://twitter.com/brulafu"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://plus.google.com/118068756096440630319"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="https://uk.linkedin.com/pub/bruce-cameron/62/9a3/4a0"><i class="fa fa-linkedin"></i></a></li>
                        </ul>

                    <p>© <a href="https://www.robertcooper.xyz">Robert Cooper</a> / Brulafu Visual Communication LTD <?php echo date('Y'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========================
    	FOOTER - END
    =========================== -->

    <!-- ==========================
    	JS
    =========================== -->
	<script src="//code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    {{-- <script src="js/jquery.magnific-popup.min.js"></script> --}}
    <script src="js/creative-brands.js"></script>
    <script src="js/jquery.easy-pie-chart.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/custom.js"></script>
    <script>
    $(function () {
		$("input,textarea").jqBootstrapValidation({
        	preventSubmit: true,

			submitSuccess: function($form, event) {
				event.preventDefault(); // prevent default submit behaviour
				// get values from FORM
				var firstname = $("input#firstname").val();
				var lastname = $("input#lastname").val();
				var email = $("input#email").val();
				var message = $("textarea#message").val();

				$.ajax({
					url: "send.php",
					type: "POST",
					data: {
						firstname: firstname,
						lastname: lastname,
						email: email,
						message: message
					},
					cache: false,
					success: function() {
						// Success message
						$('.contact-alert').html("<div class='alert alert-success'>");
						$('.contact-alert > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'><i class='fa fa-times'></i></button><strong>Your message has been sent.</strong></div>");
						//clear all fields
						$('#contactForm').trigger("reset");
					},
					error: function() {
						// Fail message
						$('.contact-alert').html("<div class='alert alert-danger'>");
						$('.contact-alert > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'><i class='fa fa-times'></i></button><strong>Sorry, it seems that my mail server is not responding. Please try again later!</strong></div>");
						//clear all fields
						$('#contactForm').trigger("reset");
					},
				})
			}
		});
	});
    </script>
</body>
</html>