<!DOCTYPE html>
<html>
	<head>
		<style>
			h1, p {
				font-family: Arial, Helvetica, sans-serif;
				font-style: italic;
			}
			
			h1 {
				font-size: 36pt;
			}
			
			p {
				font-size: 12pt;
			}
			
			body {
				background-color: rgb(255,204,0);
			}
			
			img {
				margin-top: 25px;
				font-size: 21px;
				text-align: center;

				-webkit-animation: fadein 4s;
				   -moz-animation: fadein 4s;
					-ms-animation: fadein 4s;
					 -o-animation: fadein 4s;
						animation: fadein 4s;
			}

			@keyframes fadein {
				from { opacity: 0; }
				to   { opacity: 1; }
			}

			/* Firefox < 16 */
			@-moz-keyframes fadein {
				from { opacity: 0; }
				to   { opacity: 1; }
			}

			@-webkit-keyframes fadein {
				from { opacity: 0; }
				to   { opacity: 1; }
			}

			@-ms-keyframes fadein {
				from { opacity: 0; }
				to   { opacity: 1; }
			}

			@-o-keyframes fadein {
				from { opacity: 0; }
				to   { opacity: 1; }
			}
		</style>
		<audio autoplay>
		  <source src="chef_excellence_jingle.mp3" type="audio/mpeg">
		  Your web browser does not support mp3 files.
		</audio>
	</head>
	<body>
		<div align="center">
			<img src="chef_excellence.png" id="image">
			<br>
			<br>
			<?php
				if (isset($_POST["input"])) {
					$message = $_POST["input"];
				} elseif (isset($_GET["input"])) {
					$message = $_GET["input"];
				} else {
					$message = "Website";
				}

				echo "<h1>An excellent $message</h1>";
			?>

			<form action="." method="post">
				<p>Input Excellence: </p><input type="text" name="input"><br><br>
				<input type="submit" value="Submit">
			</form>
		</div>
	</body>
</html>