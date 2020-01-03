	<div class="top-nav-bar">
	<div class="search-box">
		<i class="fa fa-bars" id="menu-btn" onclick="openmenu()" ></i>
      <i class="fa fa-times" id="close-btn" onclick="closemenu()" ></i>
		<img src="images/logo.png" class="logo" alt="logo Zela sport">
		<input type="text" class="form-control">
		<span class="input-group-text"><i class="fa fa-search" ></i></span>
	</div>

   <div class="menu-bar">
   	<ul>
   		<li><a href="#">Registre</a> </li>
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
