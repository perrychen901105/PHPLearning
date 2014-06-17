<html>
	<body>
		<?php
		echo $_GET["name"];
		?>
		<form action="testForm.php" method="get">
			Name: <input type="text" name="name" />
			Age: <input type="text" name="age" />
			<input type="submit" />
		</form>
	</body>
</html>