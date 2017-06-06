<?php
$ip = $_SERVER["REMOTE_ADDR"];
$user_agent = $_SERVER["HTTP_USER_AGENT"];

if (preg_match("/chrome/i", $user_agent)) {
	$browser = "Chrome";
} elseif (preg_match("/opera/i", $user_agent)) {
	$browser = "Opera";
} elseif (preg_match("/firefox/i", $user_agent)) {
	$browser = "Firefox";
} elseif (preg_match("/msie/i", $user_agent)) {
	$browser = "Internet Explorer";
} else {
	$browser = "Unknown";
}

if (preg_match("/mac/i", $user_agent)) {
	$platform = "Macintosh";
} elseif (preg_match("/win/i", $user_agent)) {
	$platform = "Windows";
} elseif (preg_match("/linux/i", $user_agent)) {
	$platform = "Linux";
} else {
	$platform = "Unknown";
}

$server = $_SERVER["SERVER_SOFTWARE"];
$method = $_SERVER["REQUEST_METHOD"];
$timestamp = $_SERVER["REQUEST_TIME"];
$time = date("l, j F Y, H:i:s", $timestamp);
$protocol = $_SERVER["SERVER_PROTOCOL"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browser Detective</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<h1>Browser Detective</h1>

<p>IP-Address:</p>
<div class="result"><?=$ip?></div>
<p>Web-Browser:</p>
<div class="result"><?=$browser?></div>
<p>Platform:</p>
<div class="result"><?=$platform?></div>
<p>Web-Server Software:</p>
<div class="result"><?=$server?></div>
<p>Request Method:</p>
<div class="result"><?=$method?></div>
<p>Request Time:</p>
<div class="result"><?=$time?></div>
<p>Internet-Protocol:</p>
<div class="result"><?=$protocol?></div>
<p>Window Width:</p>
<div class="result"><span id="width"></span></div>
<p>Window Height:</p>
<div class="result"><span id="height"></span></div>

<script type="text/javascript">
var width = document.documentElement.clientWidth + "px";
var height = document.documentElement.clientHeight + "px";
document.getElementById("width").innerHTML = width;
document.getElementById("height").innerHTML = height;
</script>
</body>
</html>