<!DOCTYPE html>
<html>
<head>
	<title>Your Text</title>
</head>
<body>
	<div class="pageContainer centerText">
		<?php

		$font = $_POST['font'];
		$fontColor = $_POST['fontColor'];
		$backgroundColor = $_POST['backgroundColor'];
		$fontSize = $_POST['fontSize'];
		$inputText = $_POST['inputText'];

		echo 
		"<div>
			<p style='font-family:$font; 
			color:$fontColor;
			background-color:$backgroundColor;
			font-size:$fontSize;
			text-align:center;'>
				$inputText
			</p>
		</div>"
		?>
	</div>
</body>
</html>