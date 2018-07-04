<!DOCTYPE html>
<?php
	$linkto='assignment4confirm.php'
?>
<html>
<head>
	<title>Assignment 4</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<h1 align="center">Assignment 4 - Forms</h1>
</head>
<body>
	<div class="pageContainer centerText">
		<h2>Text Properties</h2>

		<form method="post" action="<?php echo htmlspecialchars($linkto)?>" autocomplete="on" class="formLayout">
			
			<div class="formGroup">
				<label>Font:</label>
				<select name="font" >
  					<option value="Arial">Standard</option>
  					<option value="Courier New">Type Writer</option>
  					<option value="Chiller">Creepy</option>
  					<option value="Copperplate Gothic Light">Gothem</option>
  					<option value="French Script MT">Fancy</option>
  					<option value="Tiffany Light BT">Tiffany</option>
  					<option value="Wingdings">Trump</option>
				</select>
			</div>

			<div class="formGroup">
				<label>Font Color:</label>
				<select name="fontColor">
  					<option value="black">Standard</option>
  					<option value="white">Reverse</option>
  					<option value="red">Error</option>
  					<option value="blue">Hyper-link</option>
  					<option value="purple">Prince</option>
  					<option value="#c0c0c0">Metallic Grey</option>
  					<option value="#0aff00">Trump</option>
				</select>
			</div>

			<div class="formGroup">
				<label>Background:</label>
				<select name="backgroundColor">
  					<option value="white">Standard</option>
  					<option value="black">Reverse</option>
  					<option value="lightblue">Sky</option>
  					<option value="green">Grass</option>
  					<option value="#81d8d0">Tiffany</option>
  					<option value="#ffbbda">Princess</option>
  					<option value="#ff6600">Trump</option>
				</select>
			</div>

			<div class="formGroup">
				<label>Font Size:</label>
				<select name="fontSize">
  					<option value="30px">Standard</option>
  					<option value="12px">Small</option>
  					<option value="50px">Big</option>
  					<option value="90px">Huge</option>
  					<option value="150px">Trump</option>
				</select>
			</div>

			<div class="formGroup">
				<label></label>
				<textarea rows="10" cols="50" name="inputText"></textarea>
			</div>			

			<div class="formGroup">
               <label></label>
               <button type="submit">Submit</button>
            </div>
		</form>

	</div>
</body>
</html>