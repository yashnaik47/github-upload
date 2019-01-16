<html>
	<head>
		<title>Sign  Up</title>
	</head>
	<body style="background-image:url(bga.jpg);background-size:cover;">
		<div style="border:1px solid black;padding:10px;width:400px;height:320px;margin:110 auto;">
		
		<form name="f1" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			<h1>Sign Up</h1>
			<p>Please fill in this form to create an account.</p>
			<label><b>Email</b></label>
			<br>
			<input type="text" name="email" size="20" required value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
			<br>
			<label><b>Password</b></label>
			<br>
			<input type="password" name="pswd" size="20" pattern=".{8,}" required title="8 characters minimum" value="<?php if(isset($_POST['pswd'])) echo $_POST['pswd'];?>">
			<br>
			<label><b>Re-enter password</b></label>
			<br>
			<input type="password" name="rpswd" size="20" required>
			<p>By creating an account you agree to our <a href="tac.php" style="color:dodgerblue">Terms & Privacy</a>.</p>
			<button type="reset" name="cancel">Cancel</button> &nbsp;
			<button type="submit" name="SU">Sign Up</button>
			or &nbsp;
			<a href="login.php" style="color:dodgerblue">Login</a>
		</form>
		</div>
		<?php
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				if($_POST['pswd']===$_POST['rpswd'])
				{
					header('Location: home.php');
				}
				else
				{
					echo '<script type="text/javascript">
					window.onload = function () 
					{ 
						alert("Passwords do not match"); 
					} 
					</script>';
				}
			}
		?>
	</body>
</html>