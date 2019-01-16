<?php include 'home.php';?>
<html>
	<head>
		<title>Contact Us</title>
	</head>
	<body>
		<form name="CUFrm" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			<br>
			<b>Please fill in the below details:</b>
			<br><br>
			Name:
			<input type="text" name="name" size="20" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>">
			<br><br>
			Email:
			<input type="text" name="email" size="20" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
			<br><br>
			Message:<br><br>
			<textarea rows="4" cols="50" name="msg" value="<?php if(isset($_POST['msg'])) echo $_POST['msg'];?>">
			</textarea>
			<br><br>
			<input type="submit" value="Submit">&nbsp;
			<input type="reset" value="Reset">
		</form>
		
		<?php
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				$name=$_POST['name'];
				$email=$_POST['email'];
				$msg=$_POST['msg'];
				
				$servername="localhost";
				$username="root";
				$pwd="";
				$dbname="project";
				
				$conn=mysqli_connect($servername,$username,$pwd,$dbname) or die ("Not connected.".mysqli_error());
				
				//insert data
				$insert="insert into cu(name,email,msg) values('$name','$email','$msg')";
				$cmd=mysqli_query($conn,$insert);
				
				if($cmd)
				{
					echo"<br><br>Message sent successfully.";
				}
				else
				{
					echo"Error.";
				}
			}
		?>
		
	</body>
</html>	
	