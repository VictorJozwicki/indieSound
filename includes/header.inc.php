<header>
	<h1><a href="<?= SELF ?>">Sound Tree</a></h1>
	<nav>
		<ul>
			<li><a href="#">Tout les morceaux</a></li>
			<li><a href="#">Nouveau projet</a></li>
			<li><a href="#">Contact</a></li>
			<li class "sub"><a href="#"> Nom du Compte<!--<?= ($_SESSION['stUser']) ?> --></a>
				<ul>
					<li><a href="#">Notifications</a></li>
					<li><a href="#"> Réglages </a></li>
				</ul>
			</li>
			<li><a href="connection">Se connecter</a></li>
		</ul>
	</nav>
	
	
	<aside>
        <form name="search">
            <input type="text" name="searchValue" placeholder="Recherche..."/>
            <input type="submit" value="Rechercher"/>
        </form>
    </aside>
</header>
