<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Evaluation Stud.io</title>
<meta name="description" content="Evaluation Stud.io is a design studio based in Vancouver specializing in creating unique brand experiences."/>
<meta name="keywords" content="Evaluation Stud.io, Evaluation Stud.io, Vancouver Design Company, Design Company"/>
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="images/favicon.ico" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
<link href="bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/gotham.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('h1,h2,h3');
		</script>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/my.js"></script>
<script src="js/slide.js" type="text/javascript"></script>
<script type="text/javascript">
        $(function() {
            var offset = $("#logo").offset();
            var topPadding = 15;
            $(window).scroll(function() {
                if ($(window).scrollTop() > offset.top) {
                    $("#logo").stop().animate({
                        marginTop: $(window).scrollTop() - offset.top + topPadding
                    });
                } else {
                    $("#logo").stop().animate({
                        marginTop: 0
                    });
                };
            });
        });
    </script>


</head>

<body class="about">

<!-- Panel -->
<?php 
require_once 'out/toppanel.php'; 
?>
<div class="wrapper">
		<div class="container">
		    <div class="content">
			    <div id="columnLeft">
				    <div id="logo">
				        <a href="index.html"><img src="images/logo.jpg" /></a>
				    <!-- end #logo --></div>
		        <!-- end #columnLeft" --></div>
		        <div id="columnRight">
				<?php 
					require_once 'out/header.php'; 
				?>
		            
		            <div id="main">
		            <img src="images/chrisAndVal.jpg" />
				        <div id="mainLeft">
				            <img src="images/AboutUstxt.gif" /> 
				            
				        <!-- end #mainLeft --></div> 
			            <div id="mainRight">
							<div class="HeadercolumnLeft">
							<!-- end .columnLeft --></div>
							<div class="columnLeft">
								Evaluation Stud.io is a team of dedicated design and web professionals based in Vancouver B.C. who come from and specialize in a variety of media and interactive backgrounds. We bring our cross disciplinary experience to each project, taking advantage of emerging technologies and combining the sum (*wink*) of our abilities to deliver successful and innovative business solutions.
							<!-- end .columnLeft --></div>	
							<div class="columnRight">
								In this website you will find a selection of projects we have had the pleasure to work on. We are always happy to discuss potential opportunities, and if you have a project you would like to collaborate on <a href="contact.html">we would love to hear from you!</a> Thank you for visiting and we hope you enjoy your stay!
							<!-- end .columnLeft --></div>
			            <!-- end #mainRight --></div> 
		            <!-- end #main --></div>






		    <!-- end .content --></div>
		<!-- end .container --></div>
	</div><!-- end .wrapper -->
	        <div id="footer">
    <div id="footerImg">
    </div><!-- end footerImg -->
    <div id="stripe">
        <div id="stripeLeft">
        <!-- end stripeLeft --></div>
        <div id="stripeRight">
        <!-- end stripeRight --></div>
    <!-- end #stripe --></div>
    <div class="container">
	    <div id="copywrite">
	        &copy; Evaluation Stud.io <script type="text/javascript">
	          document.write(new Date().getFullYear());
	        </script>. All Rights Reserved
	        <br />
	        <img src="images/sumthingText.gif" />
	    <!-- end #copywrite"--></div>
	    <div class="nav">
		    Navigation
		    <br />
		    <a href="index.html">// Home</a>
		    <br />
		    <a href="about.html">// About</a>
		    <br />
		    <a href="work.html">// Work</a>
		    <br />
		    <a href="blog">// Blog</a>
		    <br />
		    <a href="contact.html">// Contact</a>
	    </div><!-- end .nav -->
	    <div class="nav">
		    Social
		    <br />
		    <a href="" target="_blank">// Facebook</a>
		    <br />
		    <a href="" target="_blank">// Twitter</a>


	    </div><!-- end .nav -->
	    <div id="contact">
	        Address
	        <br />
	        //  p.  Number  //  <a href="">e. Email</a>
	    <!-- end #contact --></div> 
    </div><!-- end .container -->   
<!-- end #footer --></div>	
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>