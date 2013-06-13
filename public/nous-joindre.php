<?php
    @session_start();
    //security seed to ensure that requests to send_email.php are done from this file
    $_SESSION['seed'] = sha1(uniqid(mt_rand(), true));
?>
<!doctype html>
<html class="no-js" lang="fr">
<head>

<meta charset="utf-8">

<title>PROACTIF - NOUS JOINDRE</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="shortcut icon" href="favicon.ico" />

<!--CSS STARTS-->
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/page.css" />
<link rel="stylesheet" type="text/css" href="css/error.css" />
<!--CSS ENDS-->

<script src="js/libs/modernizr-2.0.min.js"></script>

</head>
<body>

<!--TOP STARTS-->
<?php include_once("includes/_include_top.php"); ?>
<!--TOP ENDS-->

<section class="banner pic6"><div><h2 class="different">Contactez-nous<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis erat at dolor commodo eleifend. Vestibulum cursus</span></h2></div></section>

<!--PAGE CONTENT STARTS-->
<section id="PageContent">

<!--CENTER CONTENT STARTS-->
	<section id="CenterContent">
		<ul class="links">
			<li><a href="index.php" title="Accueil">Accueil</a>></li>
			<li>Nous Joindre</li>
		</ul>


<div class="error_msg"><p>Une erreur s'est produite lors du contact avec Proactif<br>S'il vous plaît entrer une adresse email valide<br>Prénom est requis<br>Nom est requis<br>Téléphone est requis<br>Meilleur moment pour vous joindre est requis<br>Journées qui conviennent à vos disponibilités est requis</p></div>

<div class="success_msg"><p>L'utilisateur a soumis les informations suivantes</p></div>


		<h1>Vous désirez nous joindre ?</h1>
		<article id="ContactInfo">
			<div>
				<h3>Par téléphone</h3>
				<h1>1 877 871-7500</h1>
				<p>De 8 h 30 à 17 h du lundi au jeudi<br /> De 9 h 30 à 17 h le vendredi</p>
			</div>
			<div>
				<h3>Par courriel</h3>
				<a href="mailto:assurances@bnc.ca">assurances@bnc.ca</a>
			</div>
		</article>
		<article>
			<h2>Laissez-nous vous rappeler</h2>
			<p>Dites-nous quand et à quel numéro!<br /><em>*Prévoir un délai de deux jours ouvrables</em></p>
			<form name='contact' method='post' action='send_email.php'>
				<input type="hidden" name="lang" value="fr"/>
				<input type="hidden" name="seed" value="<?php echo $_SESSION['seed']?>"/>
				<fieldset class="step1">
					<legend>1. Renseignements personnels</legend>
					<ul>
						<li>
							<label for="first_name">Prénom: <span>*</span></label>
							<input type="text" name="first_name" id="first_name"/>
						</li>
						<li>
							<label for="last_name">Nom: <span>*</span></label>
							<input type="text" name="last_name" id="last_name"/>
						</li>
						<li>
							<label for="email">Courriel: <span>*</span></label>
							<input type="text" name="email" id="email"/>
						</li>
						<li>
							<label for="phone">Téléphone: <span>*</span></label>
							<input type="text" name="phone" id="phone"/>
						</li>
					</ul>
				</fieldset>
				<fieldset class="step2">
					<legend>2. Quel est le meilleur moment pour vous joindre ?</legend>
					<ul>
						<li>
							<p>Cochez les plages horaires qui conviennent à vos disponibilités :</p>
							<input type="checkbox" name="availability_morning" id="availability_morning" value="0"/><label for="availability_morning">En matinée</label>
							<input type="checkbox" name="availability_evening" id="availability_evening" value="1"/><label for="availability_evening">En après-midi</label>
						</li>
						<li class="no_padding clearfix">
							<p>Cochez les journées qui conviennent à vos disponibilités :</p>
							<ul>
								<li><input type="checkbox" name="availability_monday" id="availability_moday" value="1"/><label for="availability_monday">Lundi</label></li>
								<li><input type="checkbox" name="availability_tuesday" id="availability_tuesday" value="1"/><label for="availability_tuesday">Mardi</label></li>
								<li><input type="checkbox" name="availability_wednesday" id="availability_wednesday" value="1"/><label for="availability_wednesday">Mercredi</label></li>
								<li><input type="checkbox" name="availability_thursday" id="availability_thursday" value="1"/><label for="availability_thursday">Jeudi</label></li>
								<li><input type="checkbox" name="availability_friday" id="availability_friday" value="1"/><label for="availability_friday">Vendredi</label></li>
							</ul>
						</li>
					</ul>
				</fieldset>
				<fieldset class="step3">
					<legend>3. Autres informations</legend>
					<ul>
						<li>
							<label for="type" class="demande">Veuillez préciser l'objet de votre demande</label>
							<select name="type" value='type'>
								<option value='0'>Information</option>
								<option value='1'>Réclamation</option>
							</select>
						</li>
						<li class="comment">
							<label for='comments'>Commentaires</label>
							<textarea name='comments' id='comments'></textarea>
						</li>
						<li class="allow">
							<input type="checkbox" name="allow_contact" id="allow_contact" value="1"/><label for="allow_contact">Je désire que l’on communique avec moi par téléphone ou par courriel concernant les produits et services de Banque Nationale Assurances.</label>
						</li>
					</ul>
				</fieldset>
				<input type='submit' name='submit' value='SOUMETTRE' class="more"/>
			</form>
		</article>
	</section>
<!--CENTER CONTENT ENDS-->

<!--ASIDE STARTS-->
	<aside>
		<img src="images/page/image_02.jpg" alt="" />
	</aside>
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