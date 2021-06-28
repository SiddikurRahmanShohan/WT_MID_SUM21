
<?php
	
	$dId="";
	$mId="";
	$gNid="";
	$bNid="";
	$empty_err="";
	
	$hasError=false;
	
	
	

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["did"]) and empty($_POST["mid"]) and empty($_POST["gnid"]) and empty($_POST["bnid"]))
		
		{
			$empty_err="Nothing is entered";
			$hasError = true;
		}
		else{
			$dId=htmlspecialchars($_POST["did"]);
			$mId=htmlspecialchars($_POST["mid"]);
			$gNid=htmlspecialchars($_POST["gnid"]);
			$bNid=htmlspecialchars($_POST["bnid"]);
		}
	
		
		if(!$hasError){
			
		}
		
		
	}
?>
<html>
	<head></head>
	<body>
	    <h3>Divorce Registar</h3>
		<fieldset>
			<form action="" method="post">
				<table >
					<tr>
						<td align="right">Divorce ID: </td>
						<td><input type="text" name="did" value="<?php echo $dId;?>"></td>
					</tr>
					<tr>
						<td align="right">Marriage ID: </td>
						<td><input type="text" name="mid" value="<?php echo $mId;?>"></td>
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
					    <td align="center">Divorce Id</td>
						<td align="center">Date</td>
						<td align="center">Groom Name</td>
						<td align="center">Groom NID</td>
						<td align="center">Bride Name</td>
						<td align="center">Bride NID</td>
						<td align="center">Marriage Id</td>
						<td align="center">Registrar Id</td>
						<td align="center">Registrar Name</td>
						<td align="center">Office Address</td>
						<td align="center">Go To</td>
						<td align="center">Action</td>
						
					</tr>
					
			        <tr>
						<td align="center"><?php echo $dId;?></td>
						<td align="center"><?php echo date("d/m/y"); ?></td>
						<td align="center"></td>
						<td align="center"><?php echo $gNid;?></td>
						<td align="center"></td>
						<td align="center"><?php echo $bNid;?></td>
						<td align="center"><?php echo $mId;?></td>
						<td align="center"></td>
						<td align="center"></td>
						<td align="center"></td>
						<td align="center"><a href="ModifyDivorceRegistar.php">Modify</a></td>
                        <td align="center"><input type="submit" value="Delete"></td>						
					</tr>
		</table>
		<br/>
		<br/>
		<h3>Divorce Requests</h3>
		<table border="2">
					<tr>
						<td align="center">Date</td>
						<td align="center">Marriage ID</td>
						<td align="center">Groom Name</td>
						<td align="center">Groom NID</td>
						<td align="center">Bride Name</td>
						<td align="center">Bride NID</td>
						<td align="center">Requester</td>
						<td align="center">Reason</td>
						<td align="center">Action</td>
						
					</tr>
					
			        <tr>
						<td align="center"><?php echo date("d/m/y"); ?></td>
						<td align="center"><?php echo $mId; ?></td>
						<td align="center"></td>
						<td align="center"><?php echo $gNid;?></td>
						<td align="center"></td>
						<td align="center"><?php echo $bNid;?></td>
						<td align="center"></td>
						<td align="center"></td>
                        <td align="center"><input type="submit" value="Approve"></td>						
					</tr>
		</table>
		<a href="AdminHomePage.php">Back</a>
	</body>
</html>

   