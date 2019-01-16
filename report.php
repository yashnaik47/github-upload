<?php include 'home.php'?>
<html>
	<body>
		<?php
			//To calculate Total
			
			$servername="localhost";
			$username="root";
			$pwd="";
			$dbname="Project";	
			$conn=mysqli_connect($servername,$username,$pwd,$dbname) or die("Not connected".mysqli_error());
			$select2="select SUM(Sal + Bonus + Other) total from Income";
			$cmd3=mysqli_query($conn,$select2);
				
			if($cmd3)
			{
				while($i=mysqli_fetch_assoc($cmd3))
				{
					$tot=$i['total'];
					echo"<b>Total Income : Rs. $tot</b>";
				}
			}
			
			$select3="select SUM(food + rent + trans + shop + health) total2 from Expense";
			$cmd4=mysqli_query($conn,$select3);
			if($cmd4)
			{
				while($i=mysqli_fetch_assoc($cmd4))
				{
					$tot2=$i['total2'];
					echo"<br><br><b>Total Expenditure : Rs. $tot2</b>";
				}
			}
		?>
	</body>
</html>