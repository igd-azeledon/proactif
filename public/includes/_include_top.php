<?php include_once('includes/navigation.php');?>
<header id="header_top">
	<div>
		<a href="http://www.assurances-bnc.ca" title="Banque Nationale" id="Banque" class="blankLink"><img src="images/defaults/logo_banque.gif" alt="Banque Nationale" /></a>
		<div>
<!--			<nav id="SocialMedia">
				<ul>
					<li><a href="#" title="Facebook" class="facebook"></a></li>
					<li><a href="#" title="Twitter" class="twitter"></a></li>
					<li><a href="#" title="Youtube" class="youtube"></a></li>
					<li><a href="#" title="Linkedin" class="linkedin"></a></li>
				</ul>
			</nav>-->
			<nav>
				<ul>
					<!--<li><a href="#" title="FAQ">FAQ</a>|</li>-->
					<li><a href="nous-joindre.php" title="Nous Joindre">Nous Joindre</a>|</li>
					<li><a href="en/<?php echo $navigation->get_i18_link('fr')?>" title="English">English</a></li>
				</ul>
			</nav>
			<a href="index.php" title="PROACTIF -Assurance en cas de blessure-" id="Proactif"><img src="images/defaults/logo_proactif_little.gif" alt="PROACTIF -Assurance en cas de blessure-" /></a>
		</div>
	</div>
	<nav>
		<ul>
			<li><a href="index.php" title="Accueil" class="one">Accueil</a></li>
			<li><a title="Assurance Proactif" class="sub"><span id="submenu" class="two">Assurance Proactif</span></a>
				<div class="tooltip">
					<a href="a-propos.php" title="&Agrave; Propos" class="two-a">&Agrave; Propos</a>
					<a href="caracteristiques-prestations.php" title="Caract&eacute;ristiques Prestations" class="long two-b">Caract&eacute;ristiques Prestations</a>
					<a href="primes-prestations.php" title="Primes - Prestations" class="two-c">Primes - Prestations</a>
					<a href="assistance-soins-medicaux.php" title="Assistance Soins M&eacute;dicaux" class="medi two-d">Assistance Soins M&eacute;dicaux</a>
				</div>
			</li>
			<li><a href="trousse-dinformation.php" title="Trousse D&rsquo;Information" class="three">Trousse D&rsquo;Information</a></li>
			<li><a href="nous-joindre.php" title="Nous Joindre" class="four">Nous Joindre</a></li>
		</ul>
	</nav>
</header>
