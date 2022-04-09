<html>
<head>
	<title>Customer Login and Sign Up</title>
        <link rel="stylesheet" type="text/css" href="Styles/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>	
		<style>
			.error
			{
				color:red;
			}
			button:hover
			{
		    	cursor: pointer;
	    		background: #7FFFD4;
				color: #000;
			}
		</style>

		<script type="text/javascript">
		$(document).ready(function() {
			$("#uid").blur(function(){
				var uid=$(this).val();

				$.ajax({
					url:"check.php",
					method:"POST",
					data:{u_id:uid},
					datatype:"text",
					success:function(html)
					{
						$('#availability').html(html);
					}

				});
			});
		});
		</script>

</head>
<body style="background-image: url(Images/3.jpg)" onload='document.signup.email.focus()'>

	<div class="content">
		<div class="login-box" style="margin-left: -170px">
			<h1>Customer Sign Up</h1>
        	<form action="CSignup.php" method="POST" name="signup">
				<input type="text" name="name" placeholder="Customer Name" required><br>
				<input type="email" name="email" placeholder="Email" required><br>
				<input type="text" name="uid" placeholder="Username" required><br>
				<input type="password" name="pwd" placeholder="Password" required><br>
				<span id="availability"></span><br>
	    		<input type="submit" value="Sign Up" name="signup">
			</form>
		</div>

		<div class="login-box" style="margin-left: 170px;">
			<h1>Customer Login</h1>
			<?php if(isset($_GET['loginerror']) && ($_GET['loginerror']==true))
			 	{ ?>
			 	<span class="error">Invalid Username or Password</span>
				<?php } ?>
    		<form action="CLogin.php" method="POST">
				<p>Username</p>
				<input type="text" name="uid" placeholder="Enter Your Username" required><br><br>
				<p>Password</p>
				<input type="password" name="pwd" placeholder="•••••••••" required><br>
				<input type="submit" value="Log In" name="login">
    			<input type="button" value="Back to Login" onclick="location = 'LoginType.php'"/>
			</form>
		</div>
	</div>
</body>
</html>
