
<!DOCTYPE html>
<html>
<head>
<title>GSB</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
            <br><br><br>
		<h1>Gestion Visites GSB</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
                           
                    <!-- Formulaire de connexion -->
				<form action="./?action=accueilVisite" method="post">
                                        <input class="text" type="text" name="login" id="" placeholder="Login de connexion" required="" /><br />
                                        <input class="text" type="password" name="mdp" id="" placeholder="Mot de passe"  required=""/><br />
					<input type="submit" value="Se connecter">
				</form>
                                <?php
                                    if(isset($_POST["login"]))
                                    {
                                        if($leVisiteur == "")
                                            { ?>
                                            <p id="erreurCnx" align="center"> Le login saisi n'appartient à aucun visiteur ou le mot de passe est incorrect !</p>
                                            <?php }
                                    }?>
			</div>
		</div>
              
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2021 GSB Form. All rights reserved | Design by Galaxy Swiss Bourdin</p>
                        <br><br><br><br><br><br><br><br><br>
		</div>
		<!-- bulles de fond -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
                        <li></li>
			<li></li>
			<li></li>
                        
		</ul>
	</div>
        
	<!-- //main -->
</body>
</html>