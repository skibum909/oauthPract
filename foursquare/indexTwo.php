<?php
/*
 *      index.php
 *      
 *      Copyright 2011 Colin Wren <colin@gimpneek.com>
 *      
 *      This program is free software; you can redistribute it and/or modify
 *      it under the terms of the GNU General Public License as published by
 *      the Free Software Foundation; either version 2 of the License, or
 *      (at your option) any later version.
 *      
 *      This program is distributed in the hope that it will be useful,
 *      but WITHOUT ANY WARRANTY; without even the implied warranty of
 *      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *      GNU General Public License for more details.
 *      
 *      You should have received a copy of the GNU General Public License
 *      along with this program; if not, write to the Free Software
 *      Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 *      MA 02110-1301, USA.
 *      
 *      
 */
$client_id = "JORKPLVLYGQCC4Y51PBM5C4SRFENKODBIFKD5RU3ZXGDKTJL";
$secret = "IW3E1ZAZJ5C0GMSHSBQQ3OZNGKCXYCYXT1MHM5MDX0L2BSAV";
$redirect = "http://54.200.186.73/foursquare/callback.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>16 Map Test</title>
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
			font-size: 10em;
			color: #6F7306;
			text-shadow: 0px 1px 0px #6F7306, 0px -1px 0px #5C4A14;
			text-align: center;
		}
		#content p{
			color: #5C4A14;
			font-size: 2em;
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
	<h1>16 Map Test</h1>
	<p>16 Map Test is a test app for an tutorial I'm writing. It will simply tell your name.</p>
	<p><a href="https://foursquare.com/oauth2/authenticate?client_id=<?php echo $client_id; ?>&response_type=code&redirect_uri=<?php echo $redirect; ?>" title="Login">Log in with Foursquare</a></p>
	</div>
	
	<div id="footer">
	<p class="left">This application uses the foursquare<sup>TM</sup> application programming interface but is not endorsed or certified by Foursquare Labs, Inc</p>
	<p class="right"><img src="http://colinwren.com/projects/route/poweredbyfoursquare-mark.png" /></p>
	</div>
</body>

</html>
