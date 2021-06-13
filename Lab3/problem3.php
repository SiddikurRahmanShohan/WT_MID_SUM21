<?php
	$length = rand(20,30);
	$width = rand(20,30);
	
	function calulate(){
		global $length, $width;
		if($length == $width){
			$perimeter = 2*($length + $width);
			$area = $length + $width;
			echo "Perimeter is: ".$perimeter." Area is: ".$area."</p><br/>";
			echo "<p>The shape is like square</p><br/>";
		}
	    else{
			$perimeter = 2*($length + $width);
			$area = $length + $width;
			echo "Perimeter is: ".$perimeter." Area is: ".$area."</p><br/>";
		}
	}
?>

<html>
	<head></head>
	<body>
		<?php calulate(); ?>
		<a href="problem.html">Back</a>
	</body>
</html>
