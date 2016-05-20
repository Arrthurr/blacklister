<?php require_once('/Connections/conn3Sixteen.php');

// CODE REVISED: 9 FEBRUARY 2011

$first_name		= $_POST['first_name'];
$last_name		= $_POST['last_name'];
$address		= $_POST['address'];
$select_list	= $_POST['select_list'];

$address = trim($address);
$address = strtolower($address);

/*
	DB List Key
	===========
	1. General
	2. Regal Theater
	3. Radio
	4. Retail
	5. SHPC
	6. Test
	7. CJP
	8. Midwest
	9. DMDL Provider
	10. CBC/Treasured Truth
  11. DMDL Title I Seminar

*/

// Determine which list to add the address
switch($select_list) {
	
	case	"general_list":
			$group = 1;
			add_address($first_name, $last_name, $address, $group);
			break;
	
	case	"regal_list":
			$group = 2;
			add_address($first_name, $last_name, $address, $group);
			break;
	
	case	"radio_list":
			$group = 3;
			add_address($first_name, $last_name, $address, $group);
			break;
	
	case	"retail_list":
			$group = 4;
			add_address($first_name, $last_name, $address, $group);
			break;
			
	case	"shpc_list":
			$group = 5;
			add_address($first_name, $last_name, $address, $group);
			break;
			
	case	"test":
			$group = 6;
			add_address($first_name, $last_name, $address, $group);
			break;
	
	case	"miyk_list":
			$group = 7;
			add_address($first_name, $last_name, $address, $group);
			break;
			
	case	"midwest_list":
			$group = 8;
			add_address($first_name, $last_name, $address, $group);
			break;
			
	case	"dmdl_provider":
			$group = 9;
			add_address($first_name, $last_name, $address, $group);
			break;
			
	case	"cbc_tt":
			$group = 10;
			add_address($first_name, $last_name, $address, $group);
			break;
      
  case	"dmdl_titlei":
			$group = 11;
			add_address($first_name, $last_name, $address, $group);
			break;
			
	default:
		echo "No imput -- can't perform database update!";
		
}
	
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
        <td width="425"><font size="2" face="Verdana">:: Address Added</font></td>
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
                    <td colspan="2"><font size="2" face="Verdana"><?php echo "<b>$address</b>"; ?> is added to the <?php echo "<b>$select_list</b>"; ?> table.</font></td>
                </tr>
                <tr>
                    <td colspan="2"><font size="1" face="Verdana"><a href="add_address.php">add another address</a></font></td>
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
                    Mailer</a> | <a href="remove.php">Remove An Address</a></font></td>
    </tr>
</table>
</body>
</html>
<?php
//////////////////////////////////////////
//////////	FUNCTIONS	/////////////////
////////////////////////////////////////

// Add address to specified table
function add_address($firstname, $lastname, $email, $id)
{
	$sql = "INSERT INTO people(id,firstname,surname,email,group_id) VALUES ('','$firstname','$lastname','$email','$id')"
		or die("SQL error: " . mysql_error() . "<p>Query: $sql</p>");
	
	mysql_query($sql)
		or die("Runtime error: " . mysql_error() . "<p>Query: $sql</p>");
		
	return 1;
}
?>
