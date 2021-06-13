<?php
	$name = "raju";
	
	function check(){
		global $name;
		if($name === "raju" or $name === "mina" or $name === "mithu"){
			
			echo "<p><b>Hello:</b> "." ".$name."</p><br/>";
		}
	    else{
			echo '<p>You ar not recognized<p/>';
		}
	}
?>

<html>
	<head></head>
	<body>
		<?php check(); ?>
		<a href="problem.html">Back</a>
	</body>
</html>
