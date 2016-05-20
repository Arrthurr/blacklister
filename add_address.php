<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>3Sixteen Records :: Admin Area</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<!-- CODE REVISED: 9 FEBRUARY 2011 -->
<body>
<table width="450" border="0" cellspacing="0" cellpadding="0">
	<tr> 
		<td width="25" bgcolor="#996600">&nbsp;</td>
		<td width="425"><img src="signature.gif" width="179" height="54"></td>
	</tr>
	<tr> 
		<td width="25">&nbsp;</td>
		<td width="425"><font size="2" face="Verdana">:: Add An Address</font></td>
	</tr>
	<tr> 
		<td width="25">&nbsp;</td>
		<td width="425">&nbsp;</td>
	</tr>
	<tr> 
		<td width="25">&nbsp;</td>
		<td width="425"> <form name="add_form" id="add_form" method="post" action="add_confirm.php">
				<table width="350" border="0" align="center" cellpadding="3" cellspacing="3">
					<tr> 
						<td><div align="right"><font size="2" face="Verdana">First Name:</font></div></td>
						<td><input name="first_name" type="text" id="address" size="25" maxlength="50"></td>
					</tr>
					<tr> 
						<td><div align="right"><font size="2" face="Verdana">Last Name:</font></div></td>
						<td><input name="last_name" type="text" id="address" size="25" maxlength="50"></td>
					</tr>
					<tr> 
						<td><div align="right"><font size="2" face="Verdana">Email Address:</font></div></td>
						<td><input name="address" type="text" id="address" size="25" maxlength="50"></td>
					</tr>
					<tr> 
						<td>&nbsp;</td>
						<td>
						<select name="select_list" id="select_list">
							<option value="null">Choose a mailing list</option>
							<option value="general_list">General</option>
							<option value="regal_list">Regal Theater</option>
							<!-- option value="radio_list">Radio</option -->
							<!-- option value="retail_list">Retail</option -->
	            			<option value="shpc_list">SHPC List</option>
	            			<option value="test">Massive List</option>
							<option value="miyk_list">MIYK</option>
							<!-- option value="midwest">Midwest Clinic</option -->
							<option value="dmdl_provider">DMDL FY11 Personnel</option>
              				<option value="cbc_tt">CBC - Treasured Truth</option>
              				<option value="dmdl_titlei">DMDL Title I Seminar List</option>
						</select>
						<input name="data_action" type="submit" id="data_action" value="Add">
						</td>
					</tr>
					<tr> 
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
				</table>
			</form></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr> 
		<td width="25">&nbsp;</td>
		<td width="425"><font size="1" face="Verdana"><a href="index.html">Home</a> 
			| <a href="mailer.php">Blast Mailer</a> | <a href="remove.php">Remove 
			An Address</a></font></td>
	</tr>
</table>
</body>
</html>
