<html>
	<head>
		<title>Forgot Password</title>
	</head>
	<body style="background-image:url(bga.jpg);background-size:cover;">
		<div style="border:1px solid black;padding:10px;width:400px;height:260px;margin:110 auto;">
		
		<form name="fpass" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			<h1>Forgot Password</h1>
			<p>Please fill in this form to reset your password.</p>
			<label><b>Email</b></label>
			<br>
			<input type="text" name="email" size="20" required value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
			<br>
			
			<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
			<button type="reset" name="cancel">Cancel</button> &nbsp;
			<button type="submit" name="SU">Send Email</button>
			&nbsp;or
			<a href="login.php" style="color:dodgerblue">Login</a>
			
		</form>
		</div>
		<?php
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				if($_POST['email'])
				{
					echo '<script type="text/javascript">
					window.onload = function () 
					{ 
						alert("Please check your inbox for password reset instructions."); 
					} 
					</script>';
				}
			}
		?>
	</body>
</html>