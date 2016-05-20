<?php require_once('conn3Sixteen.php'); ?>

<?php
$address = $_POST['address'];

// Now, let's delete those names from each table it's found in
$gone = del_address($address);
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
        <td width="425"><img src="signature.gif" width="179" height="54"></td>
    </tr>
    <tr>
        <td width="25">&nbsp;</td>
        <td width="425"><font size="2" face="Verdana">:: Address Removed</font></td>
    </tr>
    <tr>
        <td width="25">&nbsp;</td>
        <td width="425">&nbsp;</td>
    </tr>
    <tr>
        <td width="25">&nbsp;</td>
        <td width="425">
            <table width="350" border="0" align="center" cellpadding="3" cellspacing="3">
                <tr>
					<?php
					if ($gone!=0) { ?>
					<td colspan="2"><font size="2" face="Verdana"><?php echo "<b>$address</b>"; ?> is removed from the database.</font></td>
					<?php
					} else { ?>
					<td colspan="2"><font size="2" face="Verdana">No entries were found.</font></td>
					<?php } ?>
                </tr>
                <tr>
                    <td colspan="2"><font size="1" face="Verdana"><a href="remove.php">Remove another address</a></font></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td width="25">&nbsp;</td>
        <td width="425"><font size="1" face="Verdana"><a href="index.html">Home</a> | <a href="mailer.php">Blast
                    Mailer</a> | <a href="add_address.php">Add An Address</a></font></td>
    </tr>
</table>
</body>
</html>

<?php
//////////	FUNCTIONS	/////////////////

// DELETE query function
function del_address($email)
{
	// create sql statement for affected list
	$query = "DELETE FROM people WHERE email=\"$email\""
		or die("Can't create query: $query");
	
	// execute query
	mysql_query($query)
		or die("Can't execute query: $query");
		
	// get row confirmation
	$deleted = mysql_affected_rows();
	return $deleted;
}
?>
