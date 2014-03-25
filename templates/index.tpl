<!DOCTYPE html>
{config_load 'gallery.conf' 'site'}
<html lang="en">
<head>
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	<meta charset="utf-8">
	<title>{#title#}</title>
	<meta name="description" content="{#description#}">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="photobox/photobox.css">
	<link rel='stylesheet' href='justifiedgallery/css/jquery.justifiedgallery.min.css' type='text/css' media='all' />
	<!--[if lt IE 9]><link rel="stylesheet" href="photobox/photobox.ie.css"><![endif]-->
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="photobox/jquery.photobox.js"></script>
	<script type='text/javascript' src='justifiedgallery/js/jquery.justifiedgallery.min.js'></script>
</head>
<body>
<div class="main">
	<h1>{#title#}</h1>
	<p>{#description#}</p>
</div>
<div id="gallery">
	{foreach $images as $thumb=>$image}
	<div>
		<a href="{$image}">
			<img src="{$thumb}" alt="{$thumb}">
		</a>
	</div>
	{/foreach}
</div>
<div id="footer">
	<p>&copy; {$smarty.now|date_format:'%Y'} Sebastian Wolf using</p>
	<ul>
		<li><a href="http://www.smarty.net">{$smarty.version}</a></li>
		<li><a href="https://github.com/yairEO/photobox">photobox</a></li>
		<li><a href="https://github.com/miromannino/Justified-Gallery">Justified Gallery</a></li>
	</ul>
</div>
<script src="main.js"></script>
</body>
</html>
