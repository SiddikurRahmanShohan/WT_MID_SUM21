
<?php
	$name="";
	$uname="";
	$email="";
	$phone= "";
	$fax= "";
	$licNo= "";
	$nId= "";
	$addrs="";
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

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"]) and empty($_POST["username"]) and empty($_POST["email"]) and empty($_POST["phone"]) 
			and empty($_POST["licNo"]) and empty($_POST["address"]) and empty($_POST["nid"]) and empty($_POST["fax"]))
		
		{
			$empty_err="Nothing is entered";
			$hasError = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
			$uname=htmlspecialchars($_POST["username"]);
			$email=htmlspecialchars($_POST["email"]);
			$phone=htmlspecialchars($_POST["phone"]);
			$licNo=htmlspecialchars($_POST["licNo"]);
			$fax=htmlspecialchars($_POST["fax"]);
			$nId=htmlspecialchars($_POST["nid"]);
		}
	
		
		if(!$hasError){
			echo $name."<br>";
			echo $_POST["username"]."<br/>";
			echo $_POST["email"]."<br/>";
			echo $_POST["phone"]."<br/>";
			echo $_POST["address"]."<br/>";
			echo $_POST["nid"]."<br/>";
		}
		
		
	}
?>
<html>
	<head></head>
	<body>
	    <h3>View Registrar</h3>
		<fieldset>
			<form action="" method="post">
				<table >
					<tr>
						<td align="right">Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>"></td>
						
					</tr>
					<tr>
						<td align="right">Username: </td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" ></td>
					</tr>
					
			        <tr>
						<td align="right">NID: </td>
						<td><input type="text" name="nid" value="<?php echo $nId;?>"></td>
						
					</tr>
					
					<tr>
						<td align="right">Licence No: </td>
						<td><input type="text" name="licNo" value="<?php echo $licNo;?>"></td>
						
					</tr>
                    
					
					<tr>
						<td align="right">Phone: </td>
						<td><input type="text" name="phone" placeholder="phone" value="<?php echo $phone;?>"></td>
					</tr>
					
					<tr>
						<td align="right">Fax: </td>
						<td><input type="text" name="fax" value="<?php echo $fax;?>"></td>
					</tr>
					
					<tr>
						<td align="right">Email: </td>
						<td><input type="text" name="email" value="<?php echo $email;?>"></td>
					</tr>
					
					<tr>
						<td align="right">Office Address: </td>
						<td><input type="text" name="address" placeholder="Address" value="<?php echo $addrs;?>"></td>
					</tr>
					
					<tr>
						<td align="center" colspan="2"><input type="submit" value="Search"></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><span><?php echo $empty_err;?></span></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		<table border="2">
					<tr>
					    <td align="center">Licence No</td>
						<td align="center">Name</td>
						<td align="center">Username</td>
						<td align="center">NID</td>
						<td align="center">Phone</td>
						<td align="center">Fax</td>
						<td align="center">Email</td>
						<td align="center">Office Address</td>
						<td align="center">Go to</td>
						<td align="center">Action</td>
						
					</tr>
					
			        <tr>
						<td align="center"><?php echo $licNo;?></td>
						<td align="center"><?php echo $name;?></td>
						<td align="center"><?php echo $uname;?></td>
						<td align="center"><?php echo $nId;?></td>
						<td align="center"><?php echo $phone;?></td>
						<td align="center"><?php echo $fax;?></td>
						<td align="center"><?php echo $email;?></td>
						<td align="center"><?php echo $addrs;?></td>
						<td align="center"><a href="AddRegistrarPage.php">Edit</a></td>
                        <td align="center"><input type="submit" value="Delete"></td>						
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
		<a href="AdminHomePage.php">Back</a>
	</body>
</html>

   