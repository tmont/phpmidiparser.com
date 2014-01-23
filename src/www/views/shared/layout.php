<!doctype html>
<html>
	<head>
		<title><?php $this->renderSection('title', true); ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="/static/css/phpmidiparser.css"/>
	</head>

	<body>
		<header class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo $html->actionUrl('index', 'Home'); ?>">
						PHP MIDI Parser
					</a>
				</div>

				<div class="collapse navbar-collapse" id="nav">
					<ul class="nav navbar-nav">
						<li><?php echo $html->actionLink('News', 'index', 'Home'); ?></li>
						<li><?php echo $html->actionLink('Downloads', 'index', 'Download'); ?></li>
						<li><?php echo $html->actionLink('Demo', 'index', 'Demo'); ?></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Documentation
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><?php echo $html->actionLink('Reference', 'reference', 'Documentation'); ?></li>
								<li><?php echo $html->actionLink('Depenendencies', 'deps', 'Documentation'); ?></li>
								<li><?php echo $html->actionLink('Code Coverage', 'coverage', 'Documentation'); ?></li>
								<li><?php echo $html->actionLink('Resources', 'resources', 'Documentation'); ?></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</header>

		<div class="container">
			<h1>Welcome to phpmidiparser.com</h1>
			<?php $this->renderSection('body'); ?>
		</div>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script type="text/javascript" src="/static/js/bootstrap/dropdown.js"></script>
	</body>
</html>

