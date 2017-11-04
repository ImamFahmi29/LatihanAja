<!DOCTYPE html>
<html>
<head>
	<title>Testing</title>
</head>
<body>
	<?php echo '<p>Hello World!</p>'; ?>
	<br>
	<?php
		echo 'Hello World!<br />';
		echo('Hello World!<br />');
		print 'Hello World!<br />';
		print('Hello World!<br />');
	?>

	<?php
		// Claire O'Reilly said "Hello".
		echo 'Claire O\'Reilly';
		echo " said \"Hello\". <br>"; 
	?>
	<br>
	<?php
		$name = 'Phil ';
		$age  = 23;
		echo $name;
		echo ' is ';
		echo $age;
		// Phil is 23 
	?>
	<br>
	<?php
		define('NAME','Phil ');
		define('AGE',23);
		echo NAME;
		echo ' is ';
		echo AGE;
		// Phil is 23 
		?>
	<br>
	<?php
		$name = 'Phil';
		$age  = 23;
		echo "$name is $age";
		// Phil is 23 
		?>


</body>
</html>