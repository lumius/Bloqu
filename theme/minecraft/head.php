<head>
<meta charset="utf-8">

	<!-- Site Title -->
	<title><?php echo(config::settings('blog.title')); ?></title>
	
	<meta name="description" content="<?php echo config::settings('blog.description')?>" />

	<!-- Styles -->
	<link rel="stylesheet" href="/theme/minecraft/style/layout.css">
	<link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'> <!-- Google Font (Replace with own if needed) -->

	<!-- Javascript -->
	<script src="/theme/minecraft/js/jquery00.js"></script>
	<script src="/theme/minecraft/js/ticker00.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#items').list_ticker({
				speed:5000,
				effect:'fade'
			});	
		})
	</script>

	<meta charset="utf-8" />
</head>

<!-- Site Header -->
<div id="header">
	<div id="logo">
		<h1></h1> <!-- Site's Title on line 36 and 42 in layout.css  -->
	</div>
</div>