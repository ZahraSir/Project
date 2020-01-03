<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/modifier.css">
	<title>Zela Sport</title>
</head>
<body>
	<div class="reset">
		<form>
			<h2 align="center" style="color: #fff;">Reset password</h2>
			<input type="password" name="username" placeholder="old password">
			<br><br>
			<input type="password" name="username" placeholder="New password">
			<br><br>
			<input type="password" name="pass" placeholder="confirm new Password">
			<br><br>
			<input type="button" value="Save" onclick=" myFunction()">
			<br><br>
			<a href="seconnecter.php" style="text-decoration: none; color: white;">Go back to Home page</a>
			<br><br>
			<div id="msg"> your password changed successfully!!</div>
			<br><br>
			<script>
				function myFunction(){
					var x=document.getElementById("msg");
					x.className="show";
					setTimeout(function(){
						x.className=x.className.replace("show","");},3000);
				}
			</script>
		</form>
	</div>

</body>
</html>