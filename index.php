<?php
require 'version/conf.php';
$v = $jsonapi_version;
?><!doctype html>
<html lang="en">
	<head>
		<title>JSONAPI &mdash; a Bukkit plugin.</title>
		<meta name="description" value="JSONAPI is an HTTP, Socket and WebSocket API for control and data extraction on a Bukkit server." />
		<meta name="author" value="Alec Gorge" />

		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="css/bootstrap-responsive.min.css" />
		<link type="text/css" rel="stylesheet" href="content.css" />
		<link type="text/css" rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="span4" id="sidebar">
					<ul class="blocks">
						<li class="download">
							<a class="download-link" href="version/latest/">Download<span>JSONAPI v<?=$v?>.zip</span></a>
						</li>
						<li class="sep">&nbsp;</li>
						<li><a href="apidocs/">API Docs</a></li>
						<li><a href="http://github.com/alecgorge/jsonapi/wiki">Wiki</a></li>
						<li><a href="http://github.com/alecgorge/jsonapi/issues">Issues/Tickets</a></li>
						<li class="sep">&nbsp;</li>
						<li><a href="http://dev.bukkit.org/server-mods/jsonapi">BukkitDev</a></li>
						<li><a href="http://forums.bukkit.org/threads/admn-info-jsonapi-v3-6-0-json-http-and-socket-api-for-controlling-a-server-1-2-5.14270/page-15">Bukkit Thread</a></li>
						<li class="sep">&nbsp;</li>
						<li><a href="https://github.com/alecgorge/jsonapi/tree/master/sdk">SDKs</a></li>
						<li><a href="http://ci.alecgorge.com/">Jenkins (CI)</a></li>
						<li class="sep">&nbsp;</li>
						<li><a href="http://adminiumapp.com/">Adminium for iOS</a></li>
					</ul>
				</div>
				<div class="span8" id="content">
					<h1>JSONAPI</h1>
					<p>JSONAPI is a plugin for Bukkit that allows you to access data and other information about your server and your players through a simple, yet secure, HTTP API. This allows you to make <strong>awesome websites</strong>, <strong>iPhone apps</strong>, and a way for your <strong>players to purchase goods online and automatically receive them in game</strong>.</p>

					<p>However, this plugin won't do all of that by itself. It is simply an API that allows you to assemble the features in a way that makes sense for your needs.</p>

					<h2>Download</h2>

					<p><a href="http://alecgorge.com/minecraft/jsonapi/version/latest/">Download JSONAPI v3.6.0 (for Minecraft 1.1-R6 and Minecraft 1.2)</a></p>

					<p>You can find the source code on GitHub at <a href="http://github.com/alecgorge/jsonapi">alecgorge/jsonapi</a>. I accept pull requests!</p>

					<h2>What features exist in JSONAPI?</h2>

					<h3>There are tons of API methods.</h3>

					<p>There are 146 different API methods in 8 different categories covering a wide range of features:</p>

					<ul>
					<li><a href="http://alecgorge.com/minecraft/jsonapi/apidocs/#package-Chat">Chat</a> (groups, prefixes, suffixes, etc.)</li>
					<li><a href="http://alecgorge.com/minecraft/jsonapi/apidocs/#package-Economy">Economy</a> (give money, create banks, etc.)</li>
					<li><a href="http://alecgorge.com/minecraft/jsonapi/apidocs/#package-Permission%20methods">Permissions</a> (control permissions and groups)</li>
					<li><a href="http://alecgorge.com/minecraft/jsonapi/apidocs/#package-World%20Editing">Edit signs and chests</a></li>
					<li>Integration with drdanick's <a href="http://forums.bukkit.org/threads/admn-remotetoolkit-r10-a13-restarts-crash-detection-auto-saves-remote-console-1-2-3.674/">Remote Toolkit</a> to enable the ability to turn the server on and off using API methods. <em>Note:</em> this requires the <a href="https://github.com/downloads/alecgorge/jsonapi_rtk/JSONAPI_RTK%20v1.1.zip">JSONAPI_RTK</a> Remote Toolkit module.</li>
					<li><a href="https://github.com/alecgorge/jsonapi/wiki/Stream-sources">Get a live stream</a> of chat, connections and disconnections and/or the console.</li>
					<li>...and many more standard features (ban, unban, inventory management, etc.)</li>
					</ul>

					<h3>JSONAPI is well documented.</h3>

					<p>There are many guides along with an expansive technical reference available on the <a href="https://github.com/alecgorge/jsonapi/wiki">wiki</a>.</p>

					<p>Every API method is documented and <a href="http://alecgorge.com/minecraft/jsonapi/apidocs/">viewable online</a>.</p>

					<p>You can read a careful documentation of the <a href="https://github.com/alecgorge/jsonapi/wiki/Analyzing-the-jsonapi-request-and-response-format">the request and response format on the wiki</a> if you are thinking about writing a new SDK or plan on rolling your own solution.</p>

					<h3>There are easy to use SDKs.</h3>

					<p>SDKs allow for easy usage of all of JSONAPI's capabilities currently there are 4 SDKs:</p>

					<ul>
					<li>PHP: <a href="https://raw.github.com/alecgorge/jsonapi/master/sdk/php/JSONAPI.php">JSONAPI.php</a> (<a href="http://alecgorge.com/minecraft/jsonapi/phpsdkdocs/jsonapi/jsonapi.html">docs</a>)</li>
					<li>.NET: <a href="https://github.com/alecgorge/jsonapi/tree/master/sdk/DotNet%203.5">JSONAPI</a></li>
					<li>JavaScript: <a href="https://github.com/alecgorge/jsonapi/tree/master/sdk/js">jsonapi.js</a></li>
					<li>Python: <a href="https://raw.github.com/alecgorge/jsonapi/master/sdk/py/MinecraftApi.py">MinecraftApi.py</a></li>
					</ul>

					<h3>Easily integrate JSONAPI with other plugins.</h3>

					<p>Using the API for JSONAPI, you can easily <strong>add new methods</strong> or <strong>stream sources</strong>. Check out the section "For plugin developers" at <a href="https://github.com/alecgorge/jsonapi/wiki">the bottom of the wiki</a>.</p>

					<h3>There is an interactive test console.</h3>

					<p>Once you setup Adminium on your server, you can use <a href="http://alecgorge.github.com/jsonapi/">this test console</a> to easily test all of the available API methods and view the JSON response.</p>

					<h2>What else can you do with JSONAPI? <em>You can...</em></h2>

					<ul>
					<li>Integrate your website and your Minecraft server</li>
					<li>Control your server with your iPad/iPhone/iPod Touch through <a href="http://adminiumapp.com">Adminium</a></li>
					<li>Setup scripts that perform actions on your server, all through an easy to use API!</li>
					</ul>

					<h2>What uses JSONAPI?</h2>

					<ul>
					<li><a href="http://adminiumapp.com/">Adminium</a></li>
					<li><a href="http://spacebukkit.xereo.net/">SpaceBukkit</a></li>
					<li><a href="http://dev.bukkit.org/server-mods/heroicdeath/">HeroicDeath</a></li>
					<li>SimpServ</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="span8 offset4">
					<p id="footer">By <a href="http://alecgorge.com/">Alec Gorge</a>. Copyright &copy; 2012 Alec Gorge.</p>
				</div>
			</div>
		</div>
	</body>
</html>