<!DOCTYPE html>
<html>
<head>
	<title>NEWSPORTAL</title>
	<link rel="stylesheet"  href="https://stachpath.boostrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	intrgrity=
	"sha384-ggOyROiXCbMQv3Xipma34MD+dH/ifQ784/j6cY/iJTQUhcWr7x9JvoRxT2MZwiT"
	crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
	<meta charset="utf-8">
</head>
<body>

</body>
</html>
<nav class="one">
	<ul class="topmenu">
		<li><a href="#">Kategooriad<i class="fa fa-angle-down"></i></a>
			<ul class="submenu">
			<?php
			  Controller::AllCategory();
			?>
		  </ul>
		</li>
		<li> <a href="testError">Info</a></li>
		<li> <a href="./">Stardileht</a></li>
	</ul>
	
</nav>
<section>
	<div class="divBox">
		<?php 
		if(isset($content)) 
			echo$content;
	}
	else{
		echo '<h1>Content is gone!</h1>';
	}
	?>
	</div>
</section>
<hr>
<p style="display: block; text-align: center;">JPTVR18 2019 a. &copy</p>
</body>