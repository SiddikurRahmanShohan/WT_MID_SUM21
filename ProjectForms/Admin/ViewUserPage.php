
<?php
	$name="";
	$uname="";
	$email="";
	$phone= "";
	$bG = "";
	$nId= "";
	$addrs="";
	$gndr= "";
	$empty_err="";
	
	$bgs = array("A+","A-","B+","B-","AB+","AB-","O+","O-");
	$hasError=false;
	
	

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"]) and empty($_POST["username"]) and empty($_POST["email"]) and empty($_POST["phone"]) 
			and empty($_POST["address"]) and empty($_POST["nid"]) and !isset($_POST["gender"]) and !isset($_POST["bg"]))
		
		{
			$empty_err="Nothing is entered";
			$hasError = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
			$uname=htmlspecialchars($_POST["username"]);
			$email=htmlspecialchars($_POST["email"]);
			$phone=htmlspecialchars($_POST["phone"]);
			$nId=htmlspecialchars($_POST["nid"]);
			$gndr=htmlspecialchars($_POST["gender"]);
			$bG=htmlspecialchars($_POST["bg"]);
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
	    <h3>View User</h3>
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
						<td align="right">Blood Group:  </td>
						<td>
							<select name="bg">
								<option selected disabled>BG</option>
								<?php
									foreach($bgs as $b){
										if($bG == $b)
											echo "<option selected>$b</option>";
										else
											echo "<option>$b</option>";
									}
								?>
							</select>
						</td>
					</tr>
                    
					
					<tr>
						<td align="right">Phone: </td>
						<td><input type="text" name="phone" placeholder="phone" value="<?php echo $phone;?>"></td>
					</tr>
					
					
					<tr>
						<td align="right">Email: </td>
						<td><input type="text" name="email" value="<?php echo $email;?>"></td>
					</tr>
					
					<tr>
						<td align="right">Gender: </td>
						<td><input type="radio" value="Male" <?php if($gndr == "Male") echo "checked";?> name="gender"> Male <input <?php if($gndr == "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female</td>
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
		<table border="2" >
					<tr>
					    <td align="center">NID</td>
						<td align="center">Name</td>
						<td align="center">Username</td>
						<td align="center">Gender</td>
						<td align="center">BG</td>
						<td align="center">Phone</td>
						<td align="center">Email</td>
						<td align="center">Address</td>
						<td align="center">Marital Status</td>
						<td align="center">Go to</td>
						<td align="center">Action</td>
						
					</tr>
					
			        <tr>
						<td align="center"><?php echo $nId;?></td>
						<td align="center"><?php echo $name;?></td>
						<td align="center"><?php echo $uname;?></td>
						<td align="center"><?php echo $gndr;?></td>
						<td align="center"><?php echo $bG;?></td>
						<td align="center"><?php echo $phone;?></td>
						<td align="center"><?php echo $email;?></td>
						<td align="center"><?php echo $addrs;?></td>
						<td align="center"></td>
						<td align="center"><a href="EditUser.php">Edit</a></td>
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

   