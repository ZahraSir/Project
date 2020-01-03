<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Style/inscription.css">
	
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
   		<li><a href="../index.php">Acceuil</a> </li>
   		<li><a href="connexion/seconnecter.php"> Connexion</a></li>
   		<li><a href="connexion/inscription.php"> Inscription</a></li>
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


	<div class="signup">
		<form class="form">
			<h2 style="color: #fff;">S'inscrire</h2>
			<input type="text" name="username" placeholder="Pr&eacute;nom">
			<br><br>
			<input type="text" name="username" placeholder="Nom">
			<br><br>
			<input type="password" name="pass" placeholder="Mot de passe">
			<br><br>
			<input type="password" name="pass" placeholder="Confirmer le mot de passe">
			<br><br>
			<input type="text" placeholder="Adresse mail">
			<br><br>
			<input type="button" value="S'inscrire" onclick=" myFunction()">
			<br><br>
			<div id="msg"> Félicitations, vous êtes inscrit avec succès!!!</div>
			<br><br>
			<script>
				function myFunction(){
					var x=document.getElementById("msg");
					x.className="show";
					setTimeout(function(){
						x.className=x.className.replace("show","");},3000);
				}
			</script>
      Vous avez d&eacute;ja un compte ?<a href="seconnecter.php" style="text-decoration: none; font-family: 'play', sans-serif; color: gold;">&nbsp;Se connecter</a>
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