<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="motdepasse.css">
	<title></title>
</head>
<body>
	<div class="forget">
		<form>
			<h2 align="center" style="color: #fff">Forget password</h2>
			<h5 style="font-size: 15px; color:black ">Enter email here that you used on your account.We send link on your email to reset your password.</h5>
			<input type="text" name="username" placeholder="Enter your email" >
			<br><br>
			<input type="button" value="Send" onclick="myFunction()">
			<br><br>
			<a href="index1.html" style="text-decoration: none;">Go back to Home page </a>
			<br><br>
			<div id="snackbar">Link send on your email successfelly !!</div>
			<script type="text/javascript">
				function myFunction(){
					var x=document.getElementById("snackbar");
					x.className="show";
					setTimeout(function(){
						x.className=x.className.replace("show","");},3000);
				}
			</script>
		</form>
	</div>

</body>
</html>