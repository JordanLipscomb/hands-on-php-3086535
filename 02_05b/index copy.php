<?php

function print_array($a) {
	echo '<pre>';
	var_dump( $a );
	echo '</pre>';
}


 function sanitize_form() {

	return true;
 }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Validate my Form</title>
        <meta name="author" value="Joe Casabona" />
				<style>
					body {
						background: #EFEFEF;
					}
					main {
						max-width: 800px;
						padding: 20px;
						margin: 0 auto;
						background: #FFFFFF;
						font-size: 1.5rem;
					}

					div {
						margin: 35px;
					}

					input, 
					textarea {
						font-size: 1.25rem;
						padding: 5px;
						width: 95%;
						border: 1px solid #DDDDDD;
					}
				</style>
    </head>
    <body>
			<main>
 				<h1>Contact Me</h1>
				<form name="contact" method="POST" id="contact">
					<div>
						<label for="name">Your Name*:</label><br/>
						<input type="text" name="name" required />
					</div>
					<div>
						<label for="email">Your Email*:</label><br/>
						<input type="email" name="email" required />
					</div>
					<div>
						<label for="message">Your Message*:</label><br/>
						<textarea name="message" required></textarea>
					</div>
					<div><input type="submit" name="submit" value="Contact Me" /></div>
				</form>
				</main>
    </body>
</html>