<?php include 'home.php';?>
<html>
	<head>
		<title>Add Income</title>
	</head>
	<body>
		<form name="IncomeFrm" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
						
			<br>
			<b>Please fill in the below details:</b>
			<br><br>
			Salary:
			<input type="text" size="20" name="sal" value="<?php if(isset($_POST['sal'])) echo $_POST['sal'];?>">
			<br><br>
			Bonus:
			<input type="text" size="20" name="bon" value="<?php if(isset($_POST['bon'])) echo $_POST['bon'];?>">
			<br><br>
			Other:
			<input type="text" size="20" name="other" value="<?php if(isset($_POST['other'])) echo $_POST['other'];?>">
			<br><br>
			<input type="submit" value="Submit">
			&nbsp;
			<input type="reset" value="Reset">
		</form>
		
		<?php
			if($_SERVER['REQUEST_METHOD']=="POST")
			{
				$sal=$_POST['sal'];
				$bon=$_POST['bon'];
				$other=$_POST['other'];

				
				$servername="localhost";
				$username="root";
				$pwd="";
				$dbname="Project";
				
				$conn=mysqli_connect($servername,$username,$pwd,$dbname) or die("Not connected".mysqli_error());
				
				//Inserting values for Salary
					$insert="insert into Income(Sal,Bonus,Other) values('$sal','$bon','$other')";
					$cmd=mysqli_query($conn,$insert);
				
					if($cmd)
					{
						echo"<br>Values inserted successfully.<br><br>";
					}
					else
					{
						echo"Value not inserted.";
					}
				
				
				//To display values
				$select="select * from income";
				$select2="SELECT SUM(Sal) AS 'Total' from income";
				$cmd2=mysqli_query($conn,$select);
				//$cmd3=mysqli_query($conn,$select2);
				echo"<table border='1' cellpadding='5' cellspacing='2' style='background-color:#f2f2f2'>";
				echo"<th>No.</th>";
				echo"<th>Date</th>";
				echo"<th>Salary</th>";
				echo"<th>Bonus</th>";
				echo"<th>Other</th>";
				//echo"<th>Total</th>";
				if($cmd2)
					
				{
					while($i=mysqli_fetch_assoc($cmd2))
					{
						echo"<tr>";
						$no=$i['No.'];
						$date=$i['Date'];
						$Sal=$i['Sal'];
						$Bon=$i['Bonus'];
						$Other=$i['Other'];
						//$Total=$i['Total'];
				
						echo"<td>$no</td><td>$date</td><td>$Sal</td><td>$Bon</td><td>$Other</td>";
						echo"</tr>";
					}
				}
				echo"</table>";
				
				//To calculate Total
				$select2="select SUM(Sal + Bonus + Other) total from Income";
				$cmd3=mysqli_query($conn,$select2);
					
				if($cmd3)
				{
					while($i=mysqli_fetch_assoc($cmd3))
					{
						$tot=$i['total'];
						echo"<b><br><br>Total Income : Rs. $tot</b><br><br>";
					}
				}
				
			}
		?>
	</body>
</html>