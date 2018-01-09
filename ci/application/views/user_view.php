<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User View</title>
</head>
<body>

<h1>
	<?php 

		echo $welcome;

	?>

</h1>
<br>
<h4><?php echo $bitch; ?></h4>
<br>
<h2>

<?php 
	foreach ($results as $result) {
	echo $result->username . '<br>';
	} 
?>

</h2>

</body>
</html>
