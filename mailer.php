<?php require_once('/Connections/conn3Sixteen.php'); ?>

<!-- CODE REVISED: 9 FEBRUARY 2011 -->

<?php
// prepare values for blast list menu
mysql_select_db($database_conn3Sixteen, $conn3Sixteen);
$query_rsBlasts = "SELECT id, name FROM blasts";
$rsBlasts = mysql_query($query_rsBlasts, $conn3Sixteen) or die(mysql_error());
$row_rsBlasts = mysql_fetch_assoc($rsBlasts);
$totalRows_rsBlasts = mysql_num_rows($rsBlasts);
$count = "";
$count = $_GET["count"];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>3Sixteen Records :: Admin Area</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="450" border="0" cellspacing="0" cellpadding="0">
	<tr> 
		<td width="25" bgcolor="#996600">&nbsp;</td>
		<td width="425"><img src="/images/signature.gif" width="179" height="54"></td>
	</tr>
	<tr> 
		<td width="25">&nbsp;</td>
		<td width="425"><font size="2" face="Verdana">:: Blast Mailer</font></td>
	</tr>
	<tr> 
		<td width="25">&nbsp;</td>
		<td width="425">&nbsp;</td>
	</tr>
	<tr> 
		<td width="25">&nbsp;</td>
		<td width="425"> <form name="select_form" id="select_form" method="post" action="chooser.php">
				<table width="300" border="0" align="center" cellpadding="3" cellspacing="3">
					<?php
					if ($count) {
					echo "
					<tr> 
						<td>&nbsp;</td>
						<td><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><b>$count</b> 
								message(s) sent.</font></td>
					</tr>"; }
					?>
					<tr> 
						<td><div align="right"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>To: 
								</strong></font></div></td>
						<td> <input name="mail_to" type="text" id="mail_to" size="25" maxlength="50"></td>
					</tr>
					<tr> 
						<td><div align="right"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>From: 
								</strong></font></div></td>
						<td> <input name="mail_from" type="text" id="mail_from" value="3Sixteen Jazz <Jazz@3SixteenRecords.com>" size="25" maxlength="60"></td>
					</tr>
					<tr> 
						<td><div align="right"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Reply-To:</strong></font></div></td>
						<td> <input name="reply_to" type="text" id="reply_to" value="contact@3SixteenRecords.com" size="25" maxlength="60"></td>
					</tr>
					<tr> 
						<td><div align="right"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Subject:</strong></font></div></td>
						<td><input name="mail_subject" type="text" id="mail_subject" size="25" maxlength="60"></td>
					</tr>
					<tr> 
						<td>&nbsp;</td>
						<td>
							<select name="blast_list" id="blast_list">
								<option value="null">Choose a blast to send</option>
								<?php
									do { ?>
								<option value="<?php echo $row_rsBlasts['id']?>"><?php echo $row_rsBlasts['name']?></option>
								<?php
									} while ($row_rsBlasts = mysql_fetch_assoc($rsBlasts));
										$rows = mysql_num_rows($rsBlasts);
										if($rows > 0) {
											mysql_data_seek($rsBlasts, 0);
											$row_rsBlasts = mysql_fetch_assoc($rsBlasts);
										} ?>
							</select>
						</td>
					</tr>
					<tr> 
						<td>&nbsp;</td>
						<td>
							<select name="mail_list" id="mail_list">
								<option value="null">Choose a mailing list</option>
								<option value="one_name">THIS ADDRESS ONLY</option>
								<option value="general_list">General</option>
								<option value="regal_list">Regal Theater</option>
								<!-- option value="radio_list">Radio</option -->
								<!-- option value="retail_list">Retail</option -->
                				<option value="shpc_list">SHPC List</option>
                				<option value="test">Massive List</option>
								<option value="miyk_list">MIYK Only</option>
								<!-- option value="midwest">Midwest Clinic</option -->
								<option value="dmdl_provider">DMDL FY11 Personnel</option>
                				<option value="cbc_tt">CBC - Treasured Truth</option>
                				<option value="dmdl_titlei">DMDL Title I Seminar List</option>
							</select></td>
					</tr>
					<tr> 
						<td>&nbsp;</td>
						<td>
							<input name="data_action" type="submit" id="view" value="View">&nbsp;
							<input name="data_action" type="submit" id="send" value="Send">&nbsp;
							<input name="reset" type="button" id="reset" value="Reset" onClick="location.href='mailer.php'"></td>
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
		<td width="425">
			<font size="1" face="Verdana"><a href="index.html">Home</a> 
			| <a href="add_address.php">Add Address</a> | <a href="remove.php">Remove 
			Address</a></font></td>
	</tr>
</table>
</body>
</html>