<?php
$client_id = "JORKPLVLYGQCC4Y51PBM5C4SRFENKODBIFKD5RU3ZXGDKTJL";
$secret = "IW3E1ZAZJ5C0GMSHSBQQ3OZNGKCXYCYXT1MHM5MDX0L2BSAV";
$redirect = "http://54.200.186.73/foursquare/callback.php";

if($_GET['code']){
//We need to hit up the authkey URL and get the key in JSON format
$authkey = file_get_contents("https://foursquare.com/oauth2/access_token?client_id=".$client_id."&client_secret=".$secret."&grant_type=authorization_code&redirect_uri=".$redirect."&code=".$_GET['code']);
//We then need to decode it and store that key in a variable (or in a database)
$decoded_auth = json_decode($authkey,true);
$access_token = $decoded_auth['access_token'];
$today = date("Ymd");
//we then look up whatever endpoint of the api we want
$userinfo = file_get_contents("https://api.foursquare.com/v2/users/self/checkins?oauth_token=".$access_token."&v=".$today);
$decoded_userinfo = json_decode($userinfo, true);
$name = $decoded_userinfo['response']['checkins']['items'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Test</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />
	<style>
		body{
			background-color: #A5B594;
			font-family: serif;
		}
		#content{
			margin: auto;
			width: 70%;
			padding: 25px;
			border-radius: 10px;
			background-color: #828C35;
			box-shadow: 1px 1px 5px grey;
		}
		#content h1{
			font-size: 5em;
			color: #6F7306;
			text-shadow: 0px 1px 0px #6F7306, 0px -1px 0px #5C4A14;
			text-align: center;
		}
		#content p{
			color: #5C4A14;
			font-size: 1em;
			text-align: center;
		}
		#content p a{
			color: #5C4A14;
			text-shadow: 1px 1px 50px #FFFFFF;
		}
		#footer{
			position: absolute;
			bottom: 0px;
			width: 99%;
			color: #828C35;
		}
		#footer .left{
			float: left;
			clear: right;
		}
		#footer .right{
			float: right;
			width: 236px;
		}
	</style>
</head>

<body>
	<div id="content">
	<h1>The following are your checkins on FOURSQUARE:<h1>
	<?php 
	foreach ($name as $value) {
		echo "<p>";
		echo $value['venue']['name'];
		echo "</p>";
	}
	unset($value); ?>
	</div>
</body>

</html>
