<?php
	$marks = rand(50,98);
	
	function grade(){
		global $marks;
		if($marks >= 90){
			$grade= "A+";
			echo '<h3>Grade is: '.grade();'<h3/>';
		}
	    else if($marks >= 80 and $marks < 90){
			$grade= "A";
		}
	    else if($marks >= 70 and $marks < 80){
			$grade= "B";
		}
	    else if($marks >= 60 and $marks < 70){
			$grade= "C";
		}
	    else{
			$grade= "F";
		}
		echo $grade;
	}
?>

<html>
	<head></head>
	<body>
		<p>The grade is: <b><?php grade();?></b> </p>
		<a href="problem.html">Back</a>
	</body>
</html>
