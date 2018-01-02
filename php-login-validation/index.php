<?php echo "<?xml version=\"1.0\" encoding=\"UTF-8\""?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Lab 02 - Index Page</title>
<meta http-equiv="Content-Type" content="text/html; UTF-8"/>
</head>
<body>

<!-- Not the correct way -->

<form id="form0" action="login.php" method="post"> <!-- action attribute specifies where to send the form-data when a form is submitted-->
	<div style="position:absolute; top:100px; left:200px;">
	  <h1 style="text-align: center; font-size:16pt;">Adobe Login</h1>
         <img src="images/pretendheaderimg.png" width="380"
		   style="align:center" alt=""/><br /><br />
		   <!-- Pretend Image -->

		 <table border="0" width="350" cellpadding="2" cellspacing="2">
		 	<tr><!--########## FORM LOGIN ########## -->
		 		<td style="text-align:right;"><label for="userID">Login:</label></td> <!-- Label and input type name userID -->
		 		<td style="text-align:left;"><input type="text" name="userID" id="userID" size="20" maxlength="20"/></td>
		 	</tr>
		 	<tr>
		 		<td style="text-align:right;"><label for="passwd">Password:</label></td> <!-- Label and input type name passwd -->
		 		<td style="text-align:left;"><input type="password" name="passwd" id="passwd" size="20" maxlength="20"/></td>
		 	</tr>
		 	<tr>
		 		<td colspan="2" style="text-align:center;"><input type="submit" value="Login"/></td> <!--Defines a submit button-->
		 	</tr>
		 </table>
	</div>
</form>

<script type="text/javascript">
	document.getElementById("userID").focus(); //gets userID from form
</script>

</body>
</html>
