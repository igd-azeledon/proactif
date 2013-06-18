<!doctype html>
<html class="no-js" lang="fr">
<head>

<meta charset="utf-8">

<title>PROACTIF - ACCUEIL</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="canonical" href="http://www.example.com" /> <!--Esto solo debe estar en el index-->

<link rel="shortcut icon" href="favicon.ico" />

<!--CSS STARTS-->
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/mainpage.css" />
<!--CSS ENDS-->

<script src="js/libs/modernizr-2.0.min.js"></script>

</head>
<body>

<!--TOP STARTS-->
<?php include_once("includes/_include_top.php"); ?>
<!--TOP ENDS-->

<!--BANNERS STARTS-->
<div id="Banners">
	<div>
		<a href="#" id="prev"></a>
		<a href="#" id="next"></a>
		<div id="imagenes_portafolio">
			<div>
				<h2>Parce qu’un accident<br /> est si vite arrivé</h2>
				<img src="images/index/banner_05.jpg" alt="Parce qu’un accident est si vite arrivé" />
			</div>
			<div>
				<h2 class="different">Trois niveaux de protection: un coup de main pour vous remettre sur pied</h2>
				<img src="images/index/banner_04.jpg" alt="Trois niveaux de protection: Un coup de main pour vous remettre sur pied" />
			</div>
			<div>
				<h2>Un programme<br /> d’assistance exclusif</h2>
				<img src="images/index/banner_03.jpg" alt="Un programme d’assistance exclusif" />
			</div>
			<div>
				<h2 class="different">Concentrez-vous sur la guérison, on s’occupe de votre sécurité financière!</h2>
				<img src="images/index/banner_02.jpg" alt="Concentrez-vous sur la guérison, on s’occupe de votre sécurité financière" />
			</div>
			<div>
				<h2 class="different">Deux prestations plutôt qu’une : <strong>+25%</strong> de la prestation en cas de blessure</h2>
				<img src="images/index/banner_01.jpg" alt="Deux prestation pour le prix d’une : une garantie de convalescence" />
			</div>
		</div>
	</div>
</div>
<!--BANNERS ENDS-->

<!--PAGE CONTENT STARTS-->
<section id="PageContent">

<!--CENTER CONTENT STARTS-->
	<section id="CenterContent">
		<article>
			<h1>ProActif, Assurance en cas de blessure</h1>
			<p>Parce qu’un accident est si vite arrivé, <strong>ProActif, Assurance en cas de blessure</strong> vous aide à surmonter les imprévus financiers et à vous concentrer sur votre rétablissement.</p>
			<p><strong>ProActif, Assurance en cas de blessure</strong>vous offre une protection abordable en cas de fracture, de dislocation, de brûlure ou de paralysie afin de minimiser les conséquences d’un tel accident.</p>
			<a href="#" class="more">En Savoir Plus</a>
			<div class="col_2">
				<img src="images/index/image_01.jpg" alt="" />
				<div>
					<h2>Saviez-vous que...</h2>
					<p>Chaque année, environ 4 millions de blessures limitent les Canadiens dans leurs activités quotidiennes.<sup>1</sup></p>
					<em>1. Statistique Canada, Enquête annuelle sur la santé dans les collectivités canadiennes</em>
					<a href="#" class="red_arrow">En savoir plus</a>
				</div>
			</div>
		</article>
		<hr />
		<article>
			<h2>Assistance soins médicaux : Un programme de soutien en soins de santé</h2>
			<p>Adhérer à <strong>ProActif, Assurance en cas de blessure</strong> c’est également bénéficier du programme <strong>Assistance soins médicaux</strong>, un service de soutien médical complet et personnalisé !</p>
			<a href="#" class="more">En Savoir Plus</a>
		</article>
	</section>
<!--CENTER CONTENT ENDS-->

<!--ASIDE STARTS-->
	<?php include_once("includes/_include_aside.php"); ?>
<!--ASIDE ENDS-->

	<div class="clearfix"></div>
</section>
<!--PAGE CONTENT ENDS-->

<!--FOOTER STARTS-->
<?php include_once("includes/_include_bottom.php"); ?>
<!--FOOTER ENDS-->

<!--FOOTER STARTS-->
<?php include_once("includes/_include_footer.php"); ?>
<!--FOOTER ENDS-->

<!--SCRIPS START-->
<!--JavaScript at the bottom for fast page loading-->

<!--Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js"><\/script>')</script>

<script type="text/javascript" src="js/jquery.tools.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>

<!--scripts concatenated and minified via ant build script-->
<script defer src="js/script.js"></script><!--Para colocar inizializadores de JS-->
<!--end scripts-->

<!--SCRIPS ENDS-->

<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
	<script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
<![endif]-->

</body>
</html>