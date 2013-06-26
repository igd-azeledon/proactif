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
<body id="Four">

<!--TOP STARTS-->
<?php include_once("includes/_include_top.php"); ?>
<!--TOP ENDS-->

<section class="banner"><div class="pic6"><div><h2 class="different">Contactez-nous<span>Vous avez des questions ?<br />Nous y répondrons avec plaisir !</span></h2></div></div></section>

<!--PAGE CONTENT STARTS-->
<section id="PageContent">

<!--CENTER CONTENT STARTS-->
	<section id="CenterContent">
		<ul class="links">
			<li><a href="index.php" title="Accueil">Accueil</a>></li>
			<li>Nous Joindre</li>
		</ul>
                <?php
                if(isset($_SESSION['mail_status']))
                {
                    if($_SESSION['mail_status']):
                        ?>
                        <div class="success_msg"><p><?php echo $_SESSION['mail_notification']?></p></div>
                        <?php
                    else:
                        ?>
                        <div class="error_msg"><p><?php echo $_SESSION['mail_notification']?></p></div>
                        <?php
                    endif;
                    unset($_SESSION['mail_status'],$_SESSION['mail_notification']);
                }
                ?>
                <h1>Vous désirez nous joindre ?</h1>
		<article id="ContactInfo">
                    <div>
                            <h3>Par téléphone</h3>
                            <h1>1 877 871-7500</h1>
                            <p>De 8 h 30 à 17 h du lundi au jeudi<br/>
                                De 9 h 30 à 17 h le vendredi</p>
                        </div>
                        <div>
                            <h3>Par courriel</h3>
                            <a href="mailto:assurances@bnc.ca">assurances@bnc.ca</a>
                        </div>
                </article>
                <article>
                    <h2>Laissez-nous vous rappeler*</h2>
                    <p>Dites-nous quand et à quel numéro!<br/>
                    <em>*Prévoir un délai de deux jours ouvrables</em></p>
                    <form name='contact' method='post' action='send_email.php'>
                        <input type="hidden" name="lang" value="fr"/>
                        <input type="hidden" name="seed" value="<?php echo $_SESSION['seed']?>"/>
                        <fieldset class="step1">
                            <legend>1. Renseignements personnels</legend>
							<ul>
                            <li>
                            <label for="first_name">Prénom: <span>*</span></label>
                            <input type="text" name="first_name" id="first_name" maxlength="60" pattern="[a-zA-Z _]+" required value="<?php echo (isset($_SESSION['contact_form']['first_name']))?$_SESSION['contact_form']['first_name']:''?>"/>
                            </li>
                            <li>
                            <label for="last_name">Nom: <span>*</span></label>
                            <input type="text" name="last_name" id="last_name" maxlength="60" pattern="[a-zA-Z _]+" required value="<?php echo (isset($_SESSION['contact_form']['last_name']))?$_SESSION['contact_form']['last_name']:''?>"/>
                            <li>
                            <label for="email">Courriel: <span>*</span></label>
                            <input type="text" name="email" id="email" maxlength="60" pattern="[a-zA-Z_0-9@.\-]+" required value="<?php echo (isset($_SESSION['contact_form']['email']))?$_SESSION['contact_form']['email']:''?>"/>
							</li>
                            <li>
                            <label for="phone">Téléphone: <span>*</span></label>
                            <input type="text" name="phone" id="phone" maxlength="20" pattern="[0-9 \-]+" required value="<?php echo (isset($_SESSION['contact_form']['phone']))?$_SESSION['contact_form']['phone']:''?>"/>
                            </li>
                        </ul>
                        </fieldset>
                        <fieldset class="step2">
                            <legend>2. Quel est le meilleur moment pour vous joindre ?</legend>
						<ul>
                         <li>
                            <p>Cochez les plages horaires qui conviennent à vos disponibilités :</p>
                            <input type="checkbox" name="availability_time[]" id="availability_morning" value="Matinée" <?php echo (isset($_SESSION['contact_form']['availability_time']) && in_array('Matinée',$_SESSION['contact_form']['availability_time']))?'checked="checked"':''?>/><label for="availability_morning">En matinée</label>
                            <input type="checkbox" name="availability_time[]" id="availability_evening" value="Après-midi" <?php echo (isset($_SESSION['contact_form']['availability_time']) && in_array('Après-midi',$_SESSION['contact_form']['availability_time']))?'checked="checked"':''?>/><label for="availability_evening">En après-midi</label>
						</li>
                        <li class="no_padding clearfix">    
                            <p>Cochez les journées qui conviennent à vos disponibilités :</p>
							<ul>
                            	<li><input type="checkbox" name="availability_days[]" id="availability_monday" value="Lundi" <?php echo (isset($_SESSION['contact_form']['availability_days']) && in_array('Lundi',$_SESSION['contact_form']['availability_days']))?'checked="checked"':''?>/><label for="availability_monday">Lundi</label></li>
                            	<li><input type="checkbox" name="availability_days[]" id="availability_tuesday" value="Mardi" <?php echo (isset($_SESSION['contact_form']['availability_days']) && in_array('Mardi',$_SESSION['contact_form']['availability_days']))?'checked="checked"':''?>/><label for="availability_tuesday">Mardi</label></li>
                            	<li><input type="checkbox" name="availability_days[]" id="availability_wednesday" value="Mercredi" <?php echo (isset($_SESSION['contact_form']['availability_days']) && in_array('Mercredi',$_SESSION['contact_form']['availability_days']))?'checked="checked"':''?>/><label for="availability_wednesday">Mercredi</label></li>
                            	<li><input type="checkbox" name="availability_days[]" id="availability_thursday" value="Jeudi" <?php echo (isset($_SESSION['contact_form']['availability_days']) && in_array('Jeudi',$_SESSION['contact_form']['availability_days']))?'checked="checked"':''?>/><label for="availability_thursday">Jeudi</label></li>
                            	<li><input type="checkbox" name="availability_days[]" id="availability_friday" value="Vendredi" <?php echo (isset($_SESSION['contact_form']['availability_days']) && in_array('Vendredi',$_SESSION['contact_form']['availability_days']))?'checked="checked"':''?>/><label for="availability_friday">Vendredi</label></li>
                            </ul>
                        </li>
                        </ul>
                        </fieldset>
                        <fieldset class="step3">
                            <legend>3. Autres informations</legend>
                            <ul>
							<li>
                            <label for="type" class="demande">Veuillez préciser l'objet de votre demande</label>
                            <select name="type" id="type">
                                <option value='Information' <?php 
                                if(isset($_SESSION['contact_form']['type']) && $_SESSION['contact_form']['type']=='Information')
                                {
                                    echo 'selected';
                                }
                                ?>>Information</option>
                                <option value='Réclamation' <?php 
                                if(isset($_SESSION['contact_form']['type']) && $_SESSION['contact_form']['type']=='Réclamation')
                                {
                                    echo 'selected';
                                }
                                ?>>Réclamation</option>
                            </select>
							</li>
                            <li class="comment">
                            <label for='comments'>Commentaires</label>
                            <textarea name='comments' id='comments'><?php echo (isset($_SESSION['contact_form']['comments']))?$_SESSION['contact_form']['comments']:''?></textarea>
                           </li>
                           <li class="allow">
                            <input type="checkbox" name="allow_contact" id="allow_contact" value="1" <?php echo (isset($_SESSION['contact_form']['allow_contact']))?'checked="checked"':''?>/><label for="allow_contact">J’accepte que l’on communique avec moi par téléphone ou par courriel concernant les produits et services de Banque Nationale Assurances.</label>
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

<!--BOTTOM STARTS-->
<?php include_once("includes/_include_bottom.php"); ?>
<!--BOTTOM ENDS-->

<!--FOOTER STARTS-->
<?php include_once("includes/_include_footer.php"); ?>
<!--FOOTER ENDS-->

<!--SCRIPS START-->
<!--JavaScript at the bottom for fast page loading-->

<!--Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js"><\/script>')</script>

<script type="text/javascript" src="js/jquery.tools.min.js"></script>
<script src="js/nous-joindre.js"></script>
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