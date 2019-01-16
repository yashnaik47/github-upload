<html>
	<head>
		<title>Daily Expense Tracker</title>
		<style>
			*
			{
				padding:0px;
				margin:0px;
			}
			.d ul li
			{
				border:1px solid;
				height:50px;
				width:100px;
				float:left;
				text-align:center;
				line-height:50px;
				background-color:gray;
			}
			.d ul
			{
				list-style:none;
				color:white;
			}
			.d ul li:hover
			{
				background-color:gray;
				color:black;
			}
			.d li:hover ul{display: block;}
			
			
		</style>
	</head>
	<body style="background-image:url(bga.jpg);background-size:cover">
	
	
	
	
		
		<br><br>
		<h1 style="color:black;text-shadow:white;background-color:black back;padding:10px">
			<font face="verdana">
				Daily Expense Tracker
			</font>
		</h1>
		<br><br>
		<a href="signup.php" style=" position:absolute;top:8px;right:16px;font-size:16p	x;color:dodgerblue;">Logout</a>
		<center>
		<div class="d" style="margin:auto">
			
			<ul>
				<li><a href="overview.php" style="color:white">Overview</a></li>
				<li><a href="myacc.php" style="color:white">My Account</a></li>
				<li><a href="incomeadd.php" style="color:white">Income</a></li>
				<li><a href="expense.php" style="color:white">My Expenses</a></li>
				<li><a href="report.php" style="color:white">Reports</a></li>
				<li><a href="saving.php" style="color:white">Savings</a></li>				
				<li><a href="help.php" style="color:white">Help</a></li>
				<li><a href="cu.php" style="color:white">Contact Us</a></li>
			</ul>
			
		</div>
		</center>
		<br><br><br><br>
		
		
	</body>
</html>