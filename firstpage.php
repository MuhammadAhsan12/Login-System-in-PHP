<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" type="text/css" href="./css/wellcome.scss?v=<?php echo time(); ?>">
</head>
<body>
<div id="nav-colors">
	Navbar
	<button id="pink" class="btn"></button>
	<button id="red" class="btn"></button>
	<button id="purple" class="btn"></button>
	<button id="blue" class="btn"></button>
	<button id="green" class="btn"></button>
	<button id="yellow" class="btn"></button>
	<button id="orange" class="btn"></button>
</div>
<div id="font-colors">
	Font
	<button id="white" class="btn"></button>
	<button id="black" class="btn"></button>
</div>
<div id="edges">
	Edges
	<button id="rounded" class="btn">Rounded</button>
	<button id="square" class="btn">Square</button>
</div>
<h1>Minimal Bootstrap Navbar</h1>
<nav class="navbar">
	<div class="container-fluid">
		<!-- Nav Header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><span class="fa fa-home"></span><span class="link"> Home</span></a>
		</div>
		<!-- Nav Collapse -->
		<div class="navbar-collapse collapse" id="collapse-1">
			<!-- Nav Left -->
			<ul class="nav navbar-nav">
				<!-- Products -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<span class="fa fa-tags"></span><span class="link"> Products</span> <span class="fa fa-caret-down"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#"><span class="fa fa-tag"></span> Catalogue 1</a></li>
						<li><a href="#"><span class="fa fa-tag"></span> Catalogue 2</a></li>
					</ul>
				</li>
				<!-- Services -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<span class="fa fa-gears"></span><span class="link"> Services</span> <span class="fa fa-caret-down"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#"><span class="fa fa-gear"/></span> Service 1</a></li>
						<li><a href="#"><span class="fa fa-gear"/></span> Service 2</a></li>
						<li><a href="#"><span class="fa fa-gear"/></span> Service 3</a></li>
					</ul>
				</li>
				<!-- About -->
				<li><a href="#"><span class="fa fa-info-circle"></span><span class="link"> About</span></a></li>
				<!-- Contact -->
				<li><a href="#"><span class="fa fa-phone"></span><span class="link"> Contact</span></a></li>
			</ul>
			<!-- Nav Right -->
			<form class="navbar-form navbar-right">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn"><span class="fa fa-search"></span></button>
			</form>
		</div>
	</div>
</nav>

<script src="./js/wellcome.js"></script>
</body>
</html>