<?php
	include "connect.php";
?>
<!DOCTYPE html>
<html>
<style>
	th 
	{
		font-size: 40px;
		text-align: center;
		padding: 12px;
		color: MediumSeaGreen;
	}
</style>
<head>
	<title>Modify Art</title>
</head>
<body  background="/DataBase/img/DisplayBG.jpg" background-repeat=no-repeat>
	<form action="modify_art_try.php" method="post">
		<table align="center">
			<th colspan="2"><u>Art Info</u></th>
			<tr>
				<td>
					Art ID
				</td>
				<td>
					<input type="text" name="txtArtid" required>
				</td>
			</tr>
				

			<tr>
				<td colspan="2" align="left">
					<input type="submit" value="Submit">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<?php
						if (isset($_GET["Message"])) {
							echo $_GET["Message"];
								
						}
					?>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>