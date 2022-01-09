<?php

if (isset($_SESSION["auth_user"])) {
    header("location:home.php");
    die;
}

?>


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
<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/gotham.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('h1,h2,h3,h5');
		</script>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/my.js"></script>
<!-- <script src="js/slide.js" type="text/javascript"></script> -->
<script type="text/javascript" src="js/validation_login.js"></script>

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

<body class="home">

<!-- Panel -->
<?php 
require_once 'out/toppanel.php'; 
?>

<div class="wrapper">
	<div class="container">
	    <div class="content">
		    <div id="columnLeft">
			    <div id="logo">
			        <a href="home.php"><img src="images/logo.JPG" /></a>
			    <!-- end #logo --></div>
	        <!-- end #columnLeft" --></div>
	        <div id="columnRight">
			<?php 
				require_once 'out/header.php'; 
			?>
		        
	            <div id="main">
			        <div id="mainLeft">
			            <img src="images/wegood.JPG" alt="We're Good. Just ask our moms." />
			            <div class="text">
				            <h5>
					            BUSINESS INTELLIGENCE: <br>
								- CUSTOMIZED DATA COLLECTION<br>
								- RELATIONAL DATABASING<br>
								- AI-POWERED ANALYTICS<br>
								- DATA DASHBOARDING
								
				            </h5>
			            <!-- end .text --></div>
			        <!-- end #mainLeft --></div>
		            <div id="mainRight">
						<a href="out_work.php"><img src="images/BIBW.jpeg" /></a>
		            <!-- end #mainRight --></div>
	            <!-- end #main --></div>
	            <br class="clearfloat" />

	        <!-- end #columnRight --></div>

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
		    <a href="index.php">// Home</a>
		    <br />
		    <a href="out_about.php">// About</a>
		    <br />
		    <a href="out_work.php">// Work</a>
		    <br />
		    <a href="out_contact.php">// Contact</a>
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
	        //  <a href="dcazes@evaluationstud.io">Email info@evaluationstud.io</a>
	    <!-- end #contact --></div>
    </div><!-- end .container -->
<!-- end #footer --></div>
	<script type="text/javascript"> Cufon.now(); </script>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-37174590-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</body>
</html>
