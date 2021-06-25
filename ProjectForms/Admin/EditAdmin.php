
<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$email="";
	$err_email="";
	$phone= "";
	$err_phone="";
	$nId= "";
	$err_nId="";
	
	$empty_err="";
	
	$hasError=false;
	
	function numCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(is_numeric($pas[$i]))  {
                return true;
            }
        }
		return false;
	}
	function specialCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(($pas[$i]) == "#" or ($pas[$i])== "?")  {
                return true;
            }
        }
		return false;
	}
	
	

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
		}
		if(empty($_POST["username"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		else if(strlen($_POST["username"]) <=5){
			$err_uname="Username Must be greater than 5 character";
			$hasError = true;
		}
		
		else if(strpos($_POST["username"], " ") > 0){
			$err_uname="Username can not have space";
			$hasError = true;
		}
		
		else{
			$uname=htmlspecialchars($_POST["username"]);
		}
		if(empty($_POST["email"])){
			$err_email="Email Required";
			$hasError = true;
		}
		else if(strpos($_POST["email"], "@")> 0 and (strpos($_POST["email"], ".") > strpos($_POST["email"], "@"))){
			$email=htmlspecialchars($_POST["email"]);
		}
		
		else{
			$err_email="Email is not valid";
			$hasError = true;
		}
		
		if(empty($_POST["phone"])){
			$err_phone="Number Required";
			$hasError = true;
		}
		else if(!is_numeric($_POST["phone"])){
			$err_phone="Must be a number";
			$hasError = true;
		}
		if(empty($_POST["nid"])){
			$err_nId="Number Required";
			$hasError = true;
		}
		else if(!is_numeric($_POST["nid"])){
			$err_nId="Must be a number";
			$hasError = true;
		}
	
		
		if(!$hasError){
			echo $name."<br>";
			echo $_POST["username"]."<br/>";
			echo $_POST["email"]."<br/>";
			echo $_POST["phone"]."<br/>";
			echo $_POST["nid"]."<br/>";
		}
		
		
	}
?>
<html>
	<head></head>
	<body>
	    <h3>Admin Dashboard</h3>
		<fieldset>
			<form action="" method="post">
				<table >
					<tr>
						<td align="right">Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>"></td>
						<td><span><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td align="right">Username: </td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" ></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
					
			        <tr>
						<td align="right">NID: </td>
						<td><input type="text" name="nid" value="<?php echo $nId;?>"></td>
						<td><span><?php echo $err_nId;?></span></td>
						
					</tr>
                    
					
					<tr>
						<td align="right">Phone: </td>
						<td><input type="text" name="phone" placeholder="phone" value="<?php echo $phone;?>"></td>
						<td><span><?php echo $err_phone;?></span></td>
					</tr>
					
					
					<tr>
						<td align="right">Email: </td>
						<td><input type="text" name="email" value="<?php echo $email;?>"></td>
						<td><span><?php echo $err_email;?></span></td>
					</tr>
					
					<tr>
						<td align="center" colspan="2"><input type="submit" value="Done"></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><span><?php echo $empty_err;?></span></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		<a href="AdminHomePage.php">Back</a>
	</body>
</html>

   