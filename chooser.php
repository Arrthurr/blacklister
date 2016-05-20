<?php require_once('../Connections/conn3Sixteen.php');

// CODE REVISED: 9 FEBRUARY 2011

$data_action	= $_POST['data_action'];
$blast_id		= $_POST['blast_list'];

// connect to database to retrieve HTML
mysql_select_db($database_conn3Sixteen, $conn3Sixteen);
$query_rsHtml = "SELECT html FROM blasts WHERE id=" . $blast_id . "";
$rsHtml = mysql_query($query_rsHtml, $conn3Sixteen) or die(mysql_error());
$row_rsHtml = mysql_fetch_array($rsHtml);
$blast_html = $row_rsHtml['html'];

if ($data_action == "View") {
	
	print "<p>Go <a href=\"javascript:history.back();\">back</a> to send this page.</p>";
	// print html to the browser
	print $blast_html;
	exit;
	
} elseif ($data_action == "Send") {
	
	$list		= $_POST['mail_list'];
	$mail_to	= $_POST['mail_to'];
	$mail_from	= $_POST['mail_from'];
	$reply_to	= $_POST['reply_to'];
	$mail_subject	= $_POST['mail_subject'];

	$mail_subject = stripslashes($mail_subject);
	
	/*
		DB List Key with Row Count
		==========================
		1. General - 3,536
		2. Regal Theater - 454
		3. Radio - 158
		4. Retail - 0
		5. SHPC - 196
		6. Test - 15,847
		7. MIYK - 825
		8. Midwest - 438
		9. DMDL Providers - 34
		10. CBC/Treasured Truth - 
    11. Title I Seminar - 
		
	*/
	
	switch($list) {
				
		case	"one_name":
				$message_count = 0;
				send_html($blast_html, $mail_to, $mail_from, $reply_to, $mail_subject);
				$message_count++;
				break;
		
		case	"general_list":
				$message_count = 0;
				$query_rsGeneral = "SELECT email FROM people WHERE group_id=1";
				$rsGeneral = mysql_query($query_rsGeneral, $conn3Sixteen) or die(mysql_error());
				
				// pass path name and result set to mail function
				while ($num_rows = mysql_fetch_array($rsGeneral)) {
					$address = $num_rows["email"];
					send_html($blast_html, $address, $mail_from, $reply_to, $mail_subject);
					$message_count++;
				}
				mysql_free_result($rsGeneral);
				break;
				
		case	"regal_list":
				$message_count = 0;
				$query_rsRegal = "SELECT email FROM people WHERE group_id=2";
				$rsRegal = mysql_query($query_rsRegal, $conn3Sixteen) or die(mysql_error());
				
				// pass path name and result set to mail function
				while ($num_rows = mysql_fetch_array($rsRegal)) {
					$address = $num_rows["email"];
					send_html($blast_html, $address, $mail_from, $reply_to, $mail_subject);
					$message_count++;
				}
				mysql_free_result($rsRegal);
				break;
				
		case	"radio_list":
				$message_count = 0;
				$query_rsRadio = "SELECT email FROM people WHERE group_id=3";
				$rsRadio = mysql_query($query_rsRadio, $conn3Sixteen) or die(mysql_error());

				// pass path name and result set to mail function
				while ($num_rows = mysql_fetch_array($rsRadio)) {
					$address = $num_rows["email"];
					send_html($blast_html, $address, $mail_from, $reply_to, $mail_subject);
					$message_count++;
				}
				mysql_free_result($rsRadio);
				break;
				
		case	"retail_list":
				$message_count = 0;
				$query_rsRetail = "SELECT email FROM people WHERE group_id=4";
				$rsRetail = mysql_query($query_rsRetail, $conn3Sixteen) or die(mysql_error());

				// pass path name and result set to mail function
				while ($num_rows = mysql_fetch_array($rsRetail)) {
					$address = $num_rows["email"];
					send_html($blast_html, $address, $mail_from, $reply_to, $mail_subject);
					$message_count++;
				}
				mysql_free_result($rsRetail);
				break;
				
		case	"shpc_list":
				$message_count = 0;
				$query_rsSHPC = "SELECT email FROM people WHERE group_id=5";
				$rsSHPC = mysql_query($query_rsSHPC, $conn3Sixteen) or die(mysql_error());

				// pass path name and result set to mail function
				while ($num_rows = mysql_fetch_array($rsSHPC)) {
					$address = $num_rows["email"];
					send_html($blast_html, $address, $mail_from, $reply_to, $mail_subject);
					$message_count++;
				}
				mysql_free_result($rsSHPC);
				break;
		
		case	"test":
				$message_count = 0;
				$query_rsTest = "SELECT email FROM people WHERE group_id=6";
				$rsTest = mysql_query($query_rsTest, $conn3Sixteen) or die(mysql_error());

				// pass path name and result set to mail function
				while ($num_rows = mysql_fetch_array($rsTest)) {
					$address = $num_rows["email"];
					send_html($blast_html, $address, $mail_from, $reply_to, $mail_subject);
					$message_count++;
				}
				mysql_free_result($rsTest);
				break;
				
		case	"miyk_list":
				$message_count = 0;
				$query_rsMIYK = "SELECT email FROM people WHERE group_id=7";
				$rsMIYK = mysql_query($query_rsMIYK, $conn3Sixteen) or die(mysql_error());
				
				// pass path name and result set to mail function
				while ($num_rows = mysql_fetch_array($rsMIYK)) {
					$address = $num_rows["email"];
					send_html($blast_html, $address, $mail_from, $reply_to, $mail_subject);
					$message_count++;
				}
				mysql_free_result($rsMIYK);
				break;
				
		case	"midwest":
				$message_count = 0;
				$query_rsMidwest = "SELECT email FROM people WHERE group_id=8";
				$rsMidwest = mysql_query($query_rsMidwest, $conn3Sixteen) or die(mysql_error());

				// pass path name and result set to mail function
				while ($num_rows = mysql_fetch_array($rsMidwest)) {
					$address = $num_rows["email"];
					send_html($blast_html, $address, $mail_from, $reply_to, $mail_subject);
					$message_count++;
				}
				mysql_free_result($rsMidwest);
				break;
		
		case	"dmdl_provider":
				$message_count = 0;
				$query_rsDMDLProvider = "SELECT email FROM people WHERE group_id=9";
				$rsDMDLProvider = mysql_query($query_rsDMDLProvider, $conn3Sixteen) or die(mysql_error());

				// pass path name and result set to mail function
				while ($num_rows = mysql_fetch_array($rsDMDLProvider)) {
					$address = $num_rows["email"];
					send_html($blast_html, $address, $mail_from, $reply_to, $mail_subject);
					$message_count++;
				}
				mysql_free_result($rsDMDLProvider);
				break;
				
		case	"cbc_tt":
				$message_count = 0;
				$query_rsCBC = "SELECT email FROM people WHERE group_id=10";
				$rsCBC = mysql_query($query_rsCBC, $conn3Sixteen) or die(mysql_error());

				// pass path name and result set to mail function
				while ($num_rows = mysql_fetch_array($rsCBC)) {
					$address = $num_rows["email"];
					send_html($blast_html, $address, $mail_from, $reply_to, $mail_subject);
					$message_count++;
				}
				mysql_free_result($rsCBC);
				break;
        
    case	"dmdl_titlei":
				$message_count = 0;
				$query_rsDMDLTitleI = "SELECT email FROM people WHERE group_id=11";
				$rsDMDLTitleI = mysql_query($query_rsDMDLTitleI, $conn3Sixteen) or die(mysql_error());

				// pass path name and result set to mail function
				while ($num_rows = mysql_fetch_array($rsDMDLTitleI)) {
					$address = $num_rows["email"];
					send_html($blast_html, $address, $mail_from, $reply_to, $mail_subject);
					$message_count++;
				}
				mysql_free_result($rsDMDLTitleI);
				break;
			
		default:
				echo "Don't know how you got here!";
			
	}
	
	mysql_free_result($rsHtml);
	header("Location: /admin/mailer.php?count=" . $message_count);
	exit;
	
} else {
	// this is if I _really_ tank!
	echo "No form input -- beats me how you got here.";
	exit;
	
}

function send_html($html, $name, $from, $reply, $subject) {
	// send the message
	$to = trim($name);
	$msg = stripslashes($html);

	$headers = "From: $from\n";
	$headers .= "Reply-to: $reply\n";
	$headers .= "Content-Type: text/html; charset=iso-8859-1\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-Transfer-Encoding: 7bit\n\n";

	mail ($to, $subject, $msg, $headers);
	return;
}

?>