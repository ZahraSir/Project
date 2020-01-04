<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Style/seconnecter.css">
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<link rel="stylesheet" href="../Style/bootstrap.css">
	<title>Zela Sport</title>
</head>
<body>
	<div class="top-nav-bar">
	<div class="search-box">
		<i class="fa fa-bars" id="menu-btn" onclick="openmenu()" ></i>
      <i class="fa fa-times" id="close-btn" onclick="closemenu()" ></i>
		<img src="../images/logo.png" class="logo" alt="logo Zela sport">
		<input type="text" class="form-control">
		<span class="input-group-text"><i class="fa fa-search" ></i></span>
	</div>

   <div class="menu-bar">
   	<ul>
   		<li><a href="../index.php">Acceuil</a></li>
   		<li><a href="#"> Connexion</a></li>
   		<li><a href="inscription.php"> Inscription</a></li>
   		<li><a href="#"> <i class="fa fa-shopping-basket" ></i>Panier</a> </li>
	</ul>
   </div>
   </div>

   <script >
  function openmenu(){
    document.getElementById("side-menu").style.display="block";
    document.getElementById("menu-btn").style.display="none";
    document.getElementById("close-btn").style.display="block"
  }
    function closemenu(){
    document.getElementById("side-menu").style.display="none";
    document.getElementById("menu-btn").style.display="block";
    document.getElementById("close-btn").style.display="none"
  }
</script>

	<div class="signin">
		<form class="form">
			<h2 style="color: white">Se connecter</h2>
			<input type="text" name="username" placeholder="Nom d'utilisateur">
			<input type="password" name="pass" placeholder="Mot de passe">
			<br>
			<br>
			<a href="conf.html"><input type="button" value="Se connecter"></a>
			<br>
			<br>
			<div id="container">
		<a href="modifier.php" style="margin-right: 10px; font-size: 13px; font-family:Tahoma, Geneva,sans-serif; color: gold;" >Modifier le mot de passe</a>
		<a href="motdepasse.php" style="margin-right: 10px; font-size: 13px; font-family:Tahoma, Geneva,sans-serif; color: gold;" >mot de passe oublié</a>
	        </div>
	        <br><br><br><br>
	   Vous n'avez pas de compte?<a href="inscription.php" style="color: gold" >&nbsp;S'inscrire</a>
		</form>
	</div>
<section class="footer">
	<div class="container text-center">
		<div class="row">
			<div class="col-md-3">
				<h1>LIENS UTILES</h1>
				<p>Politique de confidentialite</p>
				<p>Conditions d'utilisation</p>
				<p>politique de retour</p>
				<p>Coupon de reduction</p>
			</div>
			<div class="col-md-3">
				<h1>ENTREPRISE</h1>
				<p>A propos de nous</p>
				<p>Contacter nous</p>
				<p>carriere</p>
				<p>Affilier</p>
			</div>
			<div class="col-md-3">
				<h1>SUIVER NOUS</h1>
				<p><i class="fa fa-facebook-official"></i> Facebook</p>
				<p><i class="fa fa-youtube-play"></i> Youtube</p>
				<p><i class="fa fa-linkedin"></i> Linkedin</p>
				<p><i class="fa fa-twitter"></i>  Twitter</p>
			</div>
			<div class="col-md-3 footer-image">
				<h1>Download App</h1>
				<img src="../images/capture1.png" width="100%">
			</div>
		</div>
		<hr> 
	<p class="copyright">Copyright <i class="fa fa-heart-o"></i>2019 ZELASPORT.</p>
	</div>
</section>
</body>
</html>