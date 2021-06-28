
<?php
	
	$regId="";
	$rgrId="";
	$gNid="";
	$bNid="";
	$empty_err="";
	
	$hasError=false;
	
	
	

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["regid"]) and empty($_POST["gnid"]) and empty($_POST["bnid"]) and empty($_POST["rgrid"]))
		
		{
			$empty_err="Nothing is entered";
			$hasError = true;
		}
		else{
			$regId=htmlspecialchars($_POST["regid"]);
			$gNid=htmlspecialchars($_POST["gnid"]);
			$bNid=htmlspecialchars($_POST["bnid"]);
			$rgrId=htmlspecialchars($_POST["rgrid"]);
		}
	
		
		if(!$hasError){
			
		}
		
		
	}
?>
<html>
	<head></head>
	<body>
	    <h3>Marriage Registar</h3>
		<fieldset>
			<form action="" method="post">
				<table >
					<tr>
						<td align="right">Registration ID: </td>
						<td><input type="text" name="regid" value="<?php echo $regId;?>"></td>
					</tr>
					<tr>
						<td align="right">Groom NID: </td>
						<td><input type="text" name="gnid" value="<?php echo $gNid;?>"></td>
					</tr>
					
					<tr>
						<td align="right">Bride NID: </td>
						<td><input type="text" name="bnid" value="<?php echo $bNid;?>"></td>
					</tr>
					<tr>
						<td align="right">Registrar Id: </td>
						<td><input type="text" name="rgrid" value="<?php echo $rgrId;?>"></td>
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
					    <td align="center">Registration Id</td>
						<td align="center">Date</td>
						<td align="center">Groom Name</td>
						<td align="center">Groom NID</td>
						<td align="center">Bride Name</td>
						<td align="center">Bride NID</td>
						<td align="center">Statas</td>
						<td align="center">Witness Name</td>
						<td align="center">Witness NID</td>
						<td align="center">Witness Address</td>
						<td align="center">Registrar Id</td>
						<td align="center">Registrar Name</td>
						<td align="center">Office Address</td>
						<td align="center">Go To</td>
						<td align="center">Action</td>
						
					</tr>
					
			        <tr>
						<td align="center"><?php echo $regId;?></td>
						<td align="center"><?php echo date("d/m/y"); ?></td>
						<td align="center"></td>
						<td align="center"><?php echo $gNid;?></td>
						<td align="center"></td>
						<td align="center"><?php echo $bNid;?></td>
						<td align="center"></td>
						<td align="center"></td>
						<td align="center"></td>
						<td align="center"></td>
						<td align="center"><?php echo $rgrId;?></td>
						<td align="center"></td>
						<td align="center"></td>
						<td align="center"><a href="ModifyRegistar.php">Modify</a></td>
                        <td align="center"><input type="submit" value="Delete"></td>						
					</tr>
		</table>
		<a href="AdminHomePage.php">Back</a>
	</body>
</html>

   