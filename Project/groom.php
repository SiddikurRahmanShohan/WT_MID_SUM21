<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$gender="";
	$err_gender="";

	

	
	
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		else if(strlen($_POST["name"]) <=2){
			$err_name="Name Must be greater than 2";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		
		else{
			$uname=$_POST["username"];
		}
		
		
		
	}
?>
<html>
	<head></head>
	<body>
		<fieldset>
			<form action="" method="post">
				<table >
					<tr>
						<td>Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						
						
					</tr>
					<tr>
						<td>Username: </td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
					
					</tr>
					<tr>
						<td>UserId: </td>
						<td><input type="text" name="userid" value="<?php echo $uid;?>" placeholder="UserID"></td>
						
					</tr>
					
					
					<tr>
						<td>DateOfBirth: </td>
						<td><input type="text" name="dateofbirth" value="<?php echo $dbirth;?>" placeholder="DateOfBirth"></td>
						
					</tr>
					<tr>
						<td>BloodGroup: </td>
						<td><input type="text" name="bloodgroup" value="<?php echo $bgroup;?>" placeholder="BloodGroup"></td>
					
					</tr>
					<tr>
						<td>PresentAddress: </td>
						<td><input type="text" name="presentaddress" value="<?php echo $paddress;?>" placeholder="PresentAddress"></td>
						
					</tr>
					<tr>
						<td>ParmanentAddress: </td>
						<td><input type="text" name="parmanentaddress" value="<?php echo $paraddress;?>" placeholder="ParmanentAddress"></td>
					
					</tr>
					<tr>
						<td>NID number: </td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						
					</tr>
					<tr>
						<td>Nationality: </td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						
					</tr>
					<tr>
						<td>Age: </td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						
					</tr>
					<tr>
						<td>Father’s Name: </td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						
					</tr>
					<tr>
						<td>Mother’s Name: </td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						
					</tr>
					<tr>
						<td>passport number: </td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						
					</tr>
					

					<tr>
						<td>Gender: </td>
						<td><input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input <?php if($gender == "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female</td>
						
					</tr>
					
				<tr>
						<td>phone: </td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						
					</tr>
					<tr>
						<td>Email: </td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
					
					</tr>
					<tr>
						<td>MaritalStatus: </td>
						<td><input type="text" name="materialstatus" value="<?php echo $mstatus;?>" placeholder="MaterialStatus"></td>
						
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="password" placeholder="Password"></td>
					</tr>
					
					
						<td align="right" colspan="2"><input type="submit" value="Register"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
	</body>
</html>






