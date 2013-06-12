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
<!--CSS ENDS-->

<script src="js/libs/modernizr-2.0.min.js"></script>

</head>
<body>

<!--TOP STARTS-->
<?php include_once("includes/_include_top.php"); ?>
<!--TOP ENDS-->

<section class="banner pic1"><div><h2 class="different">Concentrez-vous sur la guérison, on s’occupe de votre sécurité financière</h2></div></section>

<!--PAGE CONTENT STARTS-->
<section id="PageContent">

<!--CENTER CONTENT STARTS-->
	<section id="CenterContent">
		<ul class="links">
			<li><a href="index.php" title="Accueil">Accueil</a>></li>
			<li>Nous Joindre</li>
		</ul>
                <h1>Vous désirez nous joindre ?</h1>
		<article>
                    <div>
                        <div>
                            <h2>Par téléphone</h2>
                            <p>1 877 871-7500</p>
                            <p>De 8 h 30 à 17 h du lundi au jeudi<br/>
                                De 9 h 30 à 17 h le vendredi</p>
                        </div>
                        <div>
                            <h2>Par courriel</h2>
                            <p><a href="mailto:assurances@bnc.ca">assurances@bnc.ca</a></p>
                        </div>
                    </div>
                </article>
                <article>
                    <h2>Laissez-nous vous rappeler</h2>
                    <p>Dites-nous quand et à quel numéro!<br/>
                    <em>*Prévoir un délai de deux jours ouvrables</em></p>
                    <form name='contact' method='post' action='send_email.php'>
                        <input type="hidden" name="lang" value="fr"/>
                        <input type="hidden" name="seed" value="<?php echo $_SESSION['seed']?>"/>
                        <fieldset>
                            <legend>1. Renseignements personnels</legend>
                            
                            <label for="first_name">Prénom: <span>*</span></label>
                            <input type="text" name="first_name" id="first_name"/>
                            
                            <label for="last_name">Nom: <span>*</span></label>
                            <input type="text" name="last_name" id="last_name"/>
                            
                            <label for="email">Courriel: <span>*</span></label>
                            <input type="text" name="email" id="email"/>
                            
                            <label for="phone">Téléphone: <span>*</span></label>
                            <input type="text" name="phone" id="phone"/>
                        </fieldset>
                        <fieldset>
                            <legend>2. Quel est le meilleur moment pour vous joindre ?</legend>
                            
                            <p>Cochez les plages horaires qui conviennent à vos disponibilités :</p>
                            <input type="checkbox" name="availability_morning" id="availability_morning" value="0"/><label for="availability_morning">En matinée</label>
                            <input type="checkbox" name="availability_evening" id="availability_evening" value="1"/><label for="availability_evening">En après-midi</label>
                            
                            <p>Cochez les journées qui conviennent à vos disponibilités :</p>
                            <input type="checkbox" name="availability_monday" id="availability_moday" value="1"/><label for="availability_monday">Lundi</label>
                            <input type="checkbox" name="availability_tuesday" id="availability_tuesday" value="1"/><label for="availability_tuesday">Mardi</label>
                            <input type="checkbox" name="availability_wednesday" id="availability_wednesday" value="1"/><label for="availability_wednesday">Mercredi</label>
                            <input type="checkbox" name="availability_thursday" id="availability_thursday" value="1"/><label for="availability_thursday">Jeudi</label>
                            <input type="checkbox" name="availability_friday" id="availability_friday" value="1"/><label for="availability_friday">Vendredi</label>            
                        </fieldset>
                        <fieldset>
                            <legend>3. Autres informations</legend>
                            
                            <label for="type">Veuillez préciser l'objet de votre demande</p>
                            <select name="type" value='type'>
                                <option value='0'>Information</option>
                                <option value='1'>Réclamation</option>
                            </select>
                            
                            <label for='comments'>Commentaires</label>
                            <textarea name='comments' id='comments'></textarea>
                           
                            <input type="checkbox" name="allow_contact" id="allow_contact" value="1"/><label for="allow_contact">Je désire que l’on communique avec moi par téléphone ou par courriel concernant les produits et services de Banque Nationale Assurances.</label>
                        </fieldset>
                        <input type='submit' name='submit' value='SOUMETTRE'/>
                    </form>
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