<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="formLabel">
				<h3>CLIENT LOGIN</h3>
			<!-- end .formLabel --></div>
			<div class="left">
				<!-- Login Form -->
				<form class="clearfix" id="loginform" action="login.php" method="post">
				<label class="grey" for="log">Username:</label>
				<input class="field" type="text" name="log" id="log" value="" size="10" />
			<!-- end .left --></div>

			<div class="left">
				<label class="grey" for="pwd">Password:</label>
				<input class="field" type="password" name="pwd" id="pwd" size="10" />
			<!-- end .left --></div>

			<div class="left">
			<input type="hidden" name="submitID" value="1" />
				<input type="submit" name="submit" value="" class="bt_login" />
			<!-- end .left --></div>
			     <!-- end Login Form --></form>
			<br class="clearfloat" />
			<div class="paneltxt">
				Not a client?  Interested in working together? <a href="contact.html">Click here to request a quote for your next project!</a>
			<!-- end .paneltxt --></div>
			<span id="panelerror" style="margin-left: 298px; color: #fb6467; font-weight: bold; "/>
		</div>

    </div>

	<!-- The tab on top -->
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>


			<li id="toggle">
				<a id="open" class="open" href="login.php">Login</a>
				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>
			</li>
			<li class="right">&nbsp;</li>
		</ul>
	</div> <!-- / top -->
</div> <!--panel -->
