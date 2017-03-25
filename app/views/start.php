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
		input, label {
		    float: left;
		    display: block;
		    width: 35%;
		}
	</style>
</head>
<body>
	<div class="welcome">
		<?php 
			echo Form::open(array('action' => array('RaspController@getData'))) ;
			echo Form::label('mode', 'in');
			echo Form::radio('mode', 'in');
			echo Form::label('mode', 'out');
			echo Form::radio('mode', 'out');
			echo Form::label('gpio', '1');
			echo Form::radio('gpio', '1');
			echo Form::label('gpio', '4');
			echo Form::radio('gpio', '4');
			echo Form::submit('Submit!');
			echo Form::close();
		?>
	</div>
</body>
</html>
