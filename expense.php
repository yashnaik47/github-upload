<?php include 'home.php';?>
<html>
	<head>
		<title>Expense</title>
	</head>
	<body>
		<form name="ExpFrm" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			<br>
			<b>Please fill in the below details:</b>
			<br><br>
			Food:
			<input type="text" name="food" size="20" value="<?php if(isset($_POST['food'])) echo $_POST['food'];?>">
			<br><br>
			Rent:
			<input type="text" name="rent" size="20" value="<?php if(isset($_POST['rent'])) echo $_POST['rent'];?>">
			<br><br>
			Transport:
			<input type="text" name="trans" size="20" value="<?php if(isset($_POST['trans'])) echo $_POST['trans'];?>">
			<br><br>
			Shopping:
			<input type="text" name="shop" size="20" value="<?php if(isset($_POST['shop'])) echo $_POST['shop'];?>">
			<br><br>
			Health:
			<input type="text" name="health" size="20" value="<?php if(isset($_POST['health'])) echo $_POST['health'];?>">
			<br><br>
			<input type="submit" value="Submit">&nbsp;
			<input type="reset" value="Reset">
		</form>
		
		<?php
			
			if($_SERVER['REQUEST_METHOD']=="POST")
			{
				$food=$_POST['food'];
				$rent=$_POST['rent'];
				$trans=$_POST['trans'];
				$shop=$_POST['shop'];
				$health=$_POST['health'];
				
				$servername="localhost";
				$username="root";
				$pwd="";
				$dbname="project";
				
				$conn=mysqli_connect($servername,$username,$pwd,$dbname) or die ("Not connected".mysqli_error());
				
				//To insert data
				$insert="insert into expense(food,rent,trans,shop,health) values ('$food','$rent','$trans','$shop','$health')";
				$cmd=mysqli_query($conn,$insert);
				if($cmd)
				{
					echo"<br>Values added successfully.<br><br>";
				}
				else
				{
					echo"<br>Values not inserted.\n";
				}
				
				//to display data
				$select="select * from expense";
				$cmd2=mysqli_query($conn,$select);
				
				if($cmd2)
				{
					echo"<table border='1' cellpadding='5' cellspacing='2' style='background-color:#f2f2f2'>";
					echo"<th>No.</th>";
					echo"<th>Date</th>";
					echo"<th>Food</th>";
					echo"<th>Rent</th>";
					echo"<th>Transport</th>";
					echo"<th>Shopping</th>";
					echo"<th>Health</th>";
					while($i=mysqli_fetch_assoc($cmd2))
					{
						$no=$i['No'];
						$date=$i['Date'];
						$food2=$i['food'];
						$rent2=$i['rent'];
						$trans2=$i['trans'];
						$shop2=$i['shop'];
						$health2=$i['health'];
						echo"<tr>";
						echo"<td>$no</td><td>$date</td><td>$food2</td><td>$rent2</td><td>$trans2</td><td>$shop2</td><td>$health2</td>";
						echo"</tr>";
					}
					echo"</table>";
				}
				
				//To caculate total
				$select3="select SUM(food + rent + trans + shop + health) total2 from Expense";
				$cmd4=mysqli_query($conn,$select3);
				if($cmd4)
				{
					while($i=mysqli_fetch_assoc($cmd4))
					{
						$tot2=$i['total2'];
						echo"<br><br><b>Total Expenditure : Rs. $tot2</b><br><br>";
					}
				}
			}
		?>
	</body>
</html>