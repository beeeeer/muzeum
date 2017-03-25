<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sterowanie</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="welcome">
		<?php 
			echo Form::open(array('action' => array('RaspController@getData'))) ;
			echo Form::select('mode', array('out' => 'out', 'in' => 'in'));
			echo Form::select('gpio', array('1' => '1', '4' => '4'));
			echo Form::submit('Submit!');
			echo Form::close();
		?>
	</div>
</body>
</html>
