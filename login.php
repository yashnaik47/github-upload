<html>
	<head>
		<title>Log in</title>
	</head>
	<body style="background-image:url(bga.jpg);background-size:cover;">
		<div style="border:1px solid black;padding:10px;width:400px;height:320px;margin:110 auto;">
		
		<form name="f2" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			<h1>Log in</h1>
			<p>Please fill in this form to login to your account.</p>
			<label><b>Email</b></label>
			<br>
			<input type="text" name="email" size="20" required value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
			<br>
			<label><b>Password</b></label>
			<br>
			<input type="password" name="pswd" size="20" pattern=".{8,}" required title="8 characters minimum" value="<?php if(isset($_POST['pswd'])) echo $_POST['pswd'];?>">
			<br>
			<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
			<button type="reset" name="cancel">Cancel</button> &nbsp;
			<button type="submit" name="SU">Login</button>
			&nbsp;
			<a href="fpass.php" style="color:dodgerblue">Forgot Password</a>
		</form>
		<a href="signup.php" style=" position:absolute;top:8px;right:16px;font-size:16p	x;color:dodgerblue">Create New Account</a>
		</div>
		
		<?php
			#include "menu.php"
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				if($_POST['pswd']===$_POST['email'])
				{
					header('Location: home.php');
				}
				else
				{
					echo '<script type="text/javascript">
					window.onload = function () 
					{ 
						alert("Incorrect password"); 
					} 
					</script>';
				}
			}
		?>
	</body>
</html>