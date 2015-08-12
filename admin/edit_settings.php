<?php
# Load object properties
$title = $account->getTitle();
$surname = $account->getSurname();
$othernames = $account->getOtherNames();
$emailaddress = $account->getEmailAddress();

$titleErr = $surnameErr = $othernamesErr = $emailaddressErr ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
	if(($surnameErr=="")&&($othernamesErr=="")&&($emailaddressErr=="")){
		$account->Update($title,$surname,$othernames,$emailaddress,$accid);
	}else{
		echo '<strong class="error-text">Notice:</strong><span class="message-text"> Please fix the highlighted fields before you proceed..</span>';
	}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<table width="400px">
	<form method="post" action="">
		<tr>
			<td colspan="" valign="top">
				<table width="100%">
					<tr>
						<th class="hexa-fill" width="20px" ></th>
						<th class="pink-fill" >System Title</th>
					</tr>
					<tr>
						<th class="hexa-fill" width="20px" ></th>
						<th class="pink-fill" ></th>
					</tr>	
					<tr>
						<td class="image-fill" rowspan="6"></td>
						<td>
							<strong class="font-12">System Title</strong>
							*<span class="message-text"><?php echo $surnameErr;?></span>
						</td>
					</tr>	
					<tr>
						<td>
							<input type="text" name="surname" value="<?php echo $surname;?>" class="text-input">
						</td>
					</tr>
					<tr>
						<td>
							<strong class="font-12">Address</strong>
							*<span class="message-text"><?php echo $othernamesErr;?></span>
						</td>
					</tr>	
					<tr>
						<td>
							<input type="text" name="othernames" value="<?php echo $othernames;?>" class="text-input">
						</td>
					</tr>
					<tr>
						<td>
							<strong class="font-12">Timeout</strong>
							*<span class="message-text"><?php echo $emailaddressErr;?></span>
						</td>
					</tr>	
					<tr>
						<td>
							<input type="text" name="emailaddress" value="<?php echo $emailaddress;?>" class="text-input">
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td  class="bottom-border">
				<br>
			</td>
		</tr>
		<tr>
			<td >
				<table width="100%">
					<tr>
						<td>
							<input type="submit" value="Save" name="save">
							<a href="../admin/users.php?id=<?php echo $accid;?>" class="link-no-deco">
								<input type="button" value="Cancel" name="cancel">
							</a>
						</td>
						<td align="right">
							<a href="../account/del_confirm.php?id=<?php echo $accid;?>" class="link-no-deco">
								<input type="button" value="Delete" name="Delete">
							</a>
						</td>
					</tr>
				</table>
			</td>
	</form>
		</tr>
</table>