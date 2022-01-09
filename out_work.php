<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Evaluation Stud.io</title>
<meta name="description" content="The Sum is a design studio based in Vancouver specializing in creating unique brand experiences."/>
<meta name="keywords" content="The Sum, TH= SUM, Vancouver Design Company, Design Company"/>
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="images/favicon.ico" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/gotham.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('h3');
			
			
		</script>
<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/accordion.css" type="text/css" media="screen" />
<script type="text/javascript"
src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	//Hide (Collapse) the toggle containers on load
	$(".acc_container").hide(); 
	//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
	$("h2.acc_trigger").click(function(){
		$(this).toggleClass("active").next().slideToggle("slow");
		
		return false; //Prevent the browser jump to the link anchor
	});

});
</script>
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

<body class="work">

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
	            <div id="main">

					<h2 class="acc_trigger"><a href="#">01 <strong>Business Intelligence</strong></a></h2>
					<div class="acc_container">
					    <div class="block">
						<!--Content Goes Here-->
						<div class="projectNav">
								<div class="projectNavFloat">
									<a target="idFrame">Data Mining</a>
									<br />
									<a target="idFrame" >Data Analysis</a>
								</div><!-- end .projectNavFloat -->	
								<div class="projectNavFloat">
									<a target="idFrame" >Dashboard Maintenance</a>
									<br />
									<a target="idFrame" >Data Reporting</a>
								</div><!-- end .projectNavFloat -->
								<div class="projectNavFloat">
									<a target="idFrame" >Dashboard Creation</a>
									<br />
									<a target="signFrame" >Reports, Presentations and Scientific Publications</a>
								</div><!-- end .projectNavFloat -->
								<br class="clearfloat" />
							</div><!-- end .projectNav -->
							
					    </div><!-- end .block -->
					</div><!-- end .acc_container -->


			        <h2 class="acc_trigger"><a href="#">02 <strong>Data Management</strong></a></h2>
					<div class="acc_container">
					    <div class="block">
							
							<!--Content Goes Here-->
							<div class="projectNav">
								<div class="projectNavFloat">
									<a target="webFrame" >Data Governance</a>
									<br />
									<a target="webFrame" >Data Architecture</a>
									<br />
									<a target="webFrame" >Data Quality and Cleansing</a>
								</div><!-- end .projectNavFloat -->	
								<div class="projectNavFloat">
									<a target="webFrame" >Data Modeling and Design</a>
									<br />
									<a target="webFrame" >Database Management</a>
									<br />
									<a target="webFrame" >Data Security</a>
								</div><!-- end .projectNavFloat -->
								<div class="projectNavFloat">
									<a target="webFrame" >Data Integration</a>
									<br />
									<a target="webFrame" >Content Management</a>
									<br />
									<a target="webFrame" >Data Warehousing</a>
								</div><!-- end .projectNavFloat -->

								<br class="clearfloat" />
							</div><!-- end .projectNav -->

					    </div><!-- end .block -->
					</div><!-- end .acc_container -->
					


					<h2 class="acc_trigger"><a href="#">03 <strong>AI-Powered Solutions</strong></a></h2>
					<div class="acc_container">
					    <div class="block">
						<!--Content Goes Here-->
						<div class="projectNav">
							
								<a target="otherFrame" >Task Automation</a>
								<br />
								<a target="otherFrame" >Analytical Insight</a>
								<br />
								<a target="otherFrame" >Optimized Engagement</a>
							
						</div><!-- end .projectNav -->	
					    </div><!-- end .block -->
					</div><!-- end .acc_container -->
					
					<h2 class="acc_trigger"><a href="#">04 <strong>Survey Tools</strong></a></h2>
					<div class="acc_container">
					    <div class="block">
						<!--Content Goes Here-->
						<div class="projectNav">
								<div class="projectNavFloat">
									<a target="printFrame" >Customized Assessment Tools</a>
									<br />
									<a target="printFrame" >Healthcare Provider</a>
									<br />
									<a target="printFrame" >Patient-Reported Experience Measure</a>
								</div><!-- end .projectNavFloat -->	
								<div class="projectNavFloat">
									<a target="printFrame" >Patient-Reported Outcome Measure</a>
									<br />
									<a target="printFrame" >Caregiver Surveys</a>
									<br />
									<a target="printFrame" >Burnout Surveys</a>
								</div><!-- end .projectNavFloat -->
								<div class="projectNavFloat">
									<a target="printFrame" >Satisfaction Surveys</a>
									<br />
									<a target="printFrame" >Team Experience Survey</a>
								</div><!-- end .projectNavFloat -->
							
								<br class="clearfloat" />
							</div><!-- end .projectNav -->
							
					    </div><!-- end .block -->
					</div><!-- end .acc_container -->
					
					<h2 class="acc_trigger"><a href="#">05 <strong>Quality Improvement</strong></a></h2>
					<div class="acc_container">
					    <div class="block">
						<!--Content Goes Here-->
						<div class="projectNav">
								<div class="projectNavFloat">
									<a target="signFrame" >Logic Models and Conceptual Frameworks</a>
									<br />
									<a target="signFrame" >Performance Indicators / KPIs</a>
									<br />
									<a target="signFrame" >CQI Frameworks</a>
								</div><!-- end .projectNavFloat -->	
								<div class="projectNavFloat">
									<a target="signFrame" >Custom Data Source Creation</a>
									<br />
									<a target="signFrame" >Data Collection and Analysis</a>
									
								</div><!-- end .projectNavFloat -->
								<br class="clearfloat" />
							</div><!-- end .projectNav -->
							
					    </div><!-- end .block -->
					</div><!-- end .acc_container -->
					

	            <!-- end #main --></div>
	            <br class="clearfloat" />
	            <br class="clearfloat" />
	            <br class="clearfloat" />
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
</body>
</html>
