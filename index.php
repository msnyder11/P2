<!doctype html>
<html>
	<head>
		<title>PHP Basics</title>

		<?php require 'logic.php'; ?>

		<style>
			h1{text-align:center;}
			h2{text-align:center; font-size:80%}
			body{text-align:center;}
		</style>

		
	</head>

	<body>
		<h1> XKCD Password Generator </h1>
		<h2> 
			<p>
				Description: This web app will generate a xkcd password. The password will have the number of words entered (1 - 10). It will also have a random number and an @ symbol at the end if the check boxes are checked.
			</p>
			<p>
				What is a xkcd password: A xkcd password is a password that is made of random common words so it is easy to remember but hard for a computer to guess.
			</p>
		</h2>

		<form method='POST' action='index.php'>
    		Enter number of words (Maximum = 10)
		    <input type='text' name='numwords' value=<?php echo $numwords ?>><br>
		    <input type='checkbox' name='includenum' value='usenum' <?php echo $numcheck ?>>  Include a number<br>
		    <input type='checkbox' name='includesymbol' value='usesymbol' <?php echo $symbolcheck ?>> Include a special symbol<br>
		    <input type='submit' value='Generate Password'><br>
		</form>



	</body>

	<h1> <?php echo $password ?> </h1>
	


	
	

		
</html>