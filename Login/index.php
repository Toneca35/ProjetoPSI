<?php 
include('header.php');
require_once("../assets/php/library/configDatabase.php");
?>
<title>pagina login</title>
<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/login.js?v=2"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">

<div class="container">
	<h2 class="text-center">Sample Conference</h2>		
	<form class="form-login" method="post" id="login-form">
		<h2 class="form-login-heading">User Log In Form</h2><hr />
		<div id="error">
		</div>
		<div class="form-group">
			<input class="form-control" placeholder="Email address" name="username" id="user_email" />
			<span id="check-e"></span>
		</div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="Password" name="password" id="password" />
		</div>
		<hr />
		<div class="form-group">
			<button type="submit" class="btn btn-default" name="login_button" id="login_button">
			<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			</button> 
		</div> 
	</form>		
		
</div>
<?php include('footer.php');?>