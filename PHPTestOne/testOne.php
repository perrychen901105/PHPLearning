<html>
	<body>
		<?php
		$d = date("D");
		if ($d == "Fri") {
			echo "Have a nice weekend!<br/>";
		} else {
			echo "Have a nice day!<br/>";
		}
		
		$families = array("Griffin" => array(
		"Peter",
		"Lois",
		"Megan"
		),
		"Quagmire"=>array(
		"Glenn"
		),
		"Brown"=>array(
		"Cleveland",
		"Loretta",
		"Junior"
		) );
		
		echo "Is " . $families['Griffin'][2] . " a part of the Griffin family?";
		
		?>
	</body>
</html>