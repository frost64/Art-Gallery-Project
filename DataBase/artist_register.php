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
	<title>Register Artist</title>
</head>
<body background="/DataBase/img/DisplayBG.jpg" background-repeat=no-repeat>
	<form action="artist_register_try.php" method="post">
		<table align="center">
			<th colspan="2"><u>Artist Info</u></th>
			<tr>
				<td>
					Artist Number
				</td>
				<td>
					<input type="text" name="txtArtistno" required>
				</td>
			</tr>
			<tr>
				<td>
					First Name
				</td>
				<td>
					<input type="text" name="txtFname" required>
				</td>
			</tr>
			<tr>
				<td>
					Last Name
				</td>
				<td>
					<input type="text" name="txtLname" required>
				</td>
			</tr>
			<tr>
				<td>
					Phone
				</td>
				<td>
					<input type="text" name="txtPhone" required>
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