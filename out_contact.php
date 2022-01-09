<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Evaluation Stud.io</title>
<meta name="description" content="Evaluation Stud.io is a design studio based in Toronto specializing in creating unique brand experiences."/>
<meta name="keywords" content="Evaluation Stud.io, Evaluation Stud.io, Toronto Company, Design Company"/>
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="images/favicon.ico" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/gotham.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('h1,h2,h3');
		</script>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/my.js"></script>
<script src="js/slide.js" type="text/javascript"></script>
<script type="text/javascript" src="js/validation.js"></script>
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

<body class="contact">

<!-- Panel -->
<?php 
require_once 'out/toppanel.php'; 
?>
<div class="wrapper">
	<div class="container">
	    <div class="content">
		    <div id="columnLeft">
			    <div id="logo">
			        <a href="index.html"><img src="images/logo.JPG" /></a>
			    <!-- end #logo --></div>
	        <!-- end #columnLeft" --></div>
	        <div id="columnRight">
				<?php 
					require_once 'out/header.php'; 
				?>
	            <div class="topPad">
	            <div id="main">
			        <div id="mainLeft">
			            <img src="images/wegood.JPG" />    
			        <!-- end #mainLeft --></div> 
		            <div id="mainRight">
			            
			            
				            <div class="columnLeft">
								<img src="images/icon_phone.jpg" />
								<div class="txt">
									Tel: Phone
								<!-- end .txt --></div>	
							<!-- end .columnLeft --></div>
							
							<div class="columnLeft2">
								<img src="images/icon_email.jpg" />
								<div class="txt">
									<a href="mailto:dcazes@evaluationstud.io">Email Us</a>
								<!-- end .txt --></div>
							<!-- end .columnLeft --></div>
							
							<div class="columnLeft3">
								<img src="images/icon_mail.jpg" />
								<div class="txt2">
									Find us on LinkdIn
									<br />
									Address 2
									<br />
									Address 3
								<!-- end .txt --></div>
							<!-- end .columnLeft --></div>
							
							
							<br class="clearfloat" />
							
		            <!-- end #mainRight --></div> 
	            <!-- end #main --></div>
	            <!-- end.topPad --></div>
	            <div id="main">
					<div class="line">
					<!-- end .line -->
					<div id="mainLeft">
						<img src="images/comment_icon.png" />	
					<!-- end #mainLeft --></div>
					<div id="mainRight">
						
							<h4>Comments? Suggestions? Interesting projects?</h4>							Please drop us a line using our email form or just stay 
							<br />
							in the loop by joining our mailing list.
							<div id="contactFormBox">
								<form action="ContactForm.php" id="theform" name="theform" method="post">
								    <p><label for="name">Name</label><br /><input id="name" type="text" value="" name="name" /></p>
								    <p><label for="email">E-mail</label><br /><input id="email" type="text" value="" name="email" /></p>
								    <p><label for="message">Message</label><br /><textarea id="message" rows="10" cols="60"  name="message"></textarea></p>
								    <p>
								    <div id="error">There were errors on the form, please make sure all fields are filled out correctly.</div>
								    <input class="submit" type="submit" name="submit" value="" /></p>
								    
								    <br class="clearfloat" />
								</form>
							<!-- end contactFormBox --></div>
						
					<!-- end mainRight --></div>
	            <!-- end #main --></div>
	            <br class="clearfloat" />
	            
	        <!-- end #columnRight --></div>
	        
	    <!-- end .content --></div>

	<!-- end .container --></div>
</div><!-- end.wrapper -->
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
</body>
</html>