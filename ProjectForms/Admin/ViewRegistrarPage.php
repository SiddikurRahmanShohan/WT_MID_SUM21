
<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$email="";
	$err_email="";
	$cPass="";
	$err_cPass="";
	$phone= "";
	$err_phone="";
	$fax= "";
	$err_fax="";
	$licNo= "";
	$err_licNo="";
	$addrs="";
	$err_address="";
	
	
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
	function lowerCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(ctype_lower($pas[$i]))  {
                return true;
            }
        }
		return false;
	}
	function upperCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(ctype_upper($pas[$i]))  {
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
			$err_code="phone Required";
			$hasError = true;
		}
		else if(!is_numeric($_POST["phone"])){
			$err_code="phone Must be a number";
			$hasError = true;
		}
		
		else{
			$code=htmlspecialchars($_POST["phone"]);
		}
		
		if(empty($_POST["licNo"])){
			$err_number="Licence Number Required";
			$hasError = true;
		}
		else if(!is_numeric($_POST["licNo"])){
			$err_number="must be a number";
			$hasError = true;
		}
		
		else{
			$number=htmlspecialchars($_POST["licNo"]);
		}
		
		
		if(empty($_POST["address"])){
			$err_address="Address Required";
			$hasError = true;
		}
		
		else{
			$addrs=htmlspecialchars($_POST["address"]);
		}
		
		if(empty($_POST["nid"])){
			$err_zip="nid Required";
			$hasError = true;
		}
		
		else{
			$zip=htmlspecialchars($_POST["nid"]);
		}
	
		
		if(!$hasError){
			echo $name."<br>";
			echo $_POST["username"]."<br/>";
			echo $_POST["email"]."<br/>";
			echo $_POST["phone"]."<br/>";
			echo $_POST["address"]."<br/>";
			echo $_POST["Password"]."<br/>";
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
						<td align="right">Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>"></td>
						<td><span><?php echo $err_name;?></span></td>
						
					</tr>
					
			        <tr>
						<td align="right">NID: </td>
						<td><input type="text" name="nid" value="<?php echo $nid;?>"></td>
						<td><span><?php echo $err_nid;?></span></td>
						
					</tr>
					
					<tr>
						<td align="right">Licence No: </td>
						<td><input type="text" name="licNo" value="<?php echo $licNo;?>"></td>
						<td><span><?php echo $err_licNo;?></span></td>
						
					</tr>
                    
					<tr>
						<td align="right">Phone: </td>
						<td><input type="text" name="phone" placeholder="phone" value="<?php echo $phone;?>"></td>
						<td><span><?php echo $err_phone;?></span></td>
					</tr>
					
					<tr>
						<td align="right">Fax: </td>
						<td><input type="text" name="fax" value="<?php echo $fax;?>"></td>
						<td><span><?php echo $err_fax;?></span></td>
					</tr>
					
					<tr>
						<td align="right">Email: </td>
						<td><input type="text" name="email" value="<?php echo $email;?>"></td>
						<td><span><?php echo $err_email;?></span></td>
					</tr>
					
					<tr>
						<td align="right">Office Address: </td>
						<td><input type="text" name="address" placeholder="Address" value="<?php echo $addrs;?>"></td>
						<td><span><?php echo $err_address;?></span></td>
					</tr>
					
					<tr>
						<td align="center" colspan="2"><input type="submit" value="Search"></td>
					</tr>
					
				</table>
				<table >
					<tr>
					    <td align="right">Licence No: </td>
						<td align="right">Name: </td>
						<td align="right">NID: </td>
						<td align="right">Phone: </td>
						<td align="right">Fax: </td>
						<td align="right">Email: </td>
						<td align="right">Office Address: </td>
						
					</tr>
					
			        <tr>
						
						
					</tr>
					
					<tr>
						
						
					</tr>
                    
					<tr>
						
					</tr>
					
					<tr>
						
					</tr>
					
					<tr>
						
					</tr>
					
					<tr>
						
					</tr>
					
					<tr>
					</tr>
					
				</table>
			</form>
		</fieldset>
		<a href="AdminHomePage.php">Back</a>
	</body>
</html>

   