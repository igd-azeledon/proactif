<?php
    @session_start();
    //security seed to ensure that requests to send_email.php are done from this file
    $_SESSION['seed'] = sha1(uniqid(mt_rand(), true));
?>
<!doctype html>
<html class="no-js" lang="fr">
<head>

<meta charset="utf-8">

<title>PROACTIF - CONTACT US</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="shortcut icon" href="../favicon.ico" />

<!--CSS STARTS-->
<link rel="stylesheet" type="text/css" href="../css/default.css" />
<link rel="stylesheet" type="text/css" href="../css/page.css" />
<link rel="stylesheet" type="text/css" href="../css/error.css" />
<!--CSS ENDS-->

<script src="../js/libs/modernizr-2.0.min.js"></script>

</head>
<body>

<!--TOP STARTS-->
<?php include_once("../includes/_include_top_en.php"); ?>
<!--TOP ENDS-->

<section class="banner pic6"><div><h2 class="different">Contact us<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis erat at dolor commodo eleifend. Vestibulum cursus</span></h2></div></section>

<!--PAGE CONTENT STARTS-->
<section id="PageContent">

<!--CENTER CONTENT STARTS-->
	<section id="CenterContent">
		<ul class="links">
			<li><a href="../index.php" title="Home">Home</a>></li>
			<li>Contact us</li>
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
		<h2>Any questions?<br />We'll be glad to answer them!</h2>
		<h1>You want to contact us?</h1>
		<article id="ContactInfo">
			<div>
				<h3>By phone</h3>
				<h1>1 877 871-7500</h1>
				<p>Monday to Thursday, from 8:30 a.m. to 5 p.m.<br />Friday, 9:30 to 5:00 p.m.</p>
			</div>
			<div>
				<h3>By e-mail:</h3>
				<a href="mailto:insurance@nbc.ca">insurance@nbc.ca</a>
			</div>
		</article>
		<article>
			<h2>Prefer us to call you?*</h2>
			<p>Tell us when and at what number<br /><em>* Please allow two business days</em></p>
	  <form name='contact' method='post' action='../send_email.php'>
				<input type="hidden" name="lang" value="en"/>
				<input type="hidden" name="seed" value="<?php echo $_SESSION['seed']?>"/>
				<fieldset class="step1">
					<legend>1. Personal information</legend>
					<ul>
						<li>
							<label for="first_name">First name: <span>*</span></label>
							<input type="text" name="first_name" id="first_name" value="<?php echo (isset($_SESSION['contact_form']['first_name']))?$_SESSION['contact_form']['first_name']:''?>"/>
						</li>
						<li>
							<label for="last_name">Last name: <span>*</span></label>
							<input type="text" name="last_name" id="last_name" value="<?php echo (isset($_SESSION['contact_form']['last_name']))?$_SESSION['contact_form']['last_name']:''?>"/>
						</li>
						<li>
							<label for="email">Email: <span>*</span></label>
							<input type="text" name="email" id="email" value="<?php echo (isset($_SESSION['contact_form']['email']))?$_SESSION['contact_form']['email']:''?>"/>
						</li>
						<li>
							<label for="phone">Telephone: <span>*</span></label>
							<input type="text" name="phone" id="phone" value="<?php echo (isset($_SESSION['contact_form']['phone']))?$_SESSION['contact_form']['phone']:''?>"/>
						</li>
					</ul>
				</fieldset>
				<fieldset class="step2">
					<legend>2. When is the best time to contact you?</legend>
					<ul>
						<li>
							<p>Tick the times when you are available:</p>
							<input type="checkbox" name="availability_time[]" id="availability_morning" value="Morning" <?php echo (isset($_SESSION['contact_form']['availability_time']) && in_array('Morning',$_SESSION['contact_form']['availability_time']))?'checked="checked"':''?>/><label for="availability_morning">Morning</label>
							<input type="checkbox" name="availability_time[]" id="availability_evening" value="Afternoon" <?php echo (isset($_SESSION['contact_form']['availability_time']) && in_array('Afternoon',$_SESSION['contact_form']['availability_time']))?'checked="checked"':''?>/><label for="availability_evening">Afternoon</label>
						</li>
						<li class="no_padding clearfix">
							<p>Tick the days on which you are available:</p>
							<ul>
								<li><input type="checkbox" name="availability_days[]" id="availability_moday" value="Monday" <?php echo (isset($_SESSION['contact_form']['availability_days']) && in_array('Monday',$_SESSION['contact_form']['availability_days']))?'checked="checked"':''?>/><label for="availability_monday">Monday</label></li>
								<li><input type="checkbox" name="availability_days[]" id="availability_tuesday" value="Tuesday" <?php echo (isset($_SESSION['contact_form']['availability_days']) && in_array('Tuesday',$_SESSION['contact_form']['availability_days']))?'checked="checked"':''?>/><label for="availability_tuesday">Tuesday</label></li>
								<li><input type="checkbox" name="availability_days[]" id="availability_wednesday" value="Wednesday" <?php echo (isset($_SESSION['contact_form']['availability_days']) && in_array('Wednesday',$_SESSION['contact_form']['availability_days']))?'checked="checked"':''?>/><label for="availability_wednesday">Wednesday</label></li>
								<li><input type="checkbox" name="availability_days[]" id="availability_thursday" value="Thursday" <?php echo (isset($_SESSION['contact_form']['availability_days']) && in_array('Thursday',$_SESSION['contact_form']['availability_days']))?'checked="checked"':''?>/><label for="availability_thursday">Thursday</label></li>
								<li><input type="checkbox" name="availability_days[]" id="availability_friday" value="Friday" <?php echo (isset($_SESSION['contact_form']['availability_days']) && in_array('Friday',$_SESSION['contact_form']['availability_days']))?'checked="checked"':''?>/><label for="availability_friday">Friday</label></li>
							</ul>
						</li>
					</ul>
				</fieldset>
				<fieldset class="step3">
					<legend>3. Other information</legend>
					<ul>
						<li>
							<label for="type" class="demande">Please specify the nature of your request</label>
							<select name="type" value='type'>
								<option value='Information' <?php 
                                                                if(isset($_SESSION['contact_form']['type']) && $_SESSION['contact_form']['type']=='Information')
                                                                {
                                                                    echo 'selected';
                                                                }
                                                                ?>>Information</option>
                                                                <option value='Réclamation' <?php 
                                                                if(isset($_SESSION['contact_form']['type']) && $_SESSION['contact_form']['type']=='Claim')
                                                                {
                                                                    echo 'selected';
                                                                }
                                                                ?>>Claim</option>
							</select>
						</li>
						<li class="comment">
							<label for='comments'>Comments</label>
							<textarea name='comments' id='comments'><?php echo (isset($_SESSION['contact_form']['comments']))?$_SESSION['contact_form']['comments']:''?></textarea>
						</li>
						<li class="allow">
							<input type="checkbox" name="allow_contact" id="allow_contact" value="1" <?php echo (isset($_SESSION['contact_form']['allow_contact']))?'checked="checked"':''?>/><label for="allow_contact">I accept to be contacted by telephone or by email regarding products and services offered by National Bank Insurance.</label>
						</li>
					</ul>
				</fieldset>
				<input type='submit' name='submit' value='SUBMIT' class="more"/>
			</form>
		</article>
	</section>
<!--CENTER CONTENT ENDS-->

<!--ASIDE STARTS-->
	<aside>
	  <img src="../images/page/image_02.jpg" alt="" />
  </aside>
<!--ASIDE ENDS-->

  <div class="clearfix"></div>
</section>
<!--PAGE CONTENT ENDS-->

<!--FOOTER STARTS-->
<?php include_once("../includes/_include_bottom_en.php"); ?>
<!--FOOTER ENDS-->

<!--FOOTER STARTS-->
<?php include_once("../includes/_include_footer_en.php"); ?>
<!--FOOTER ENDS-->

<!--SCRIPS START-->
<!--JavaScript at the bottom for fast page loading-->

<!--Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js"><\/script>')</script>

<script type="text/javascript" src="../js/jquery.tools.min.js"></script>

<!--scripts concatenated and minified via ant build script-->
<script defer src="../js/script.js"></script><!--Para colocar inizializadores de JS-->
<!--end scripts-->

<!--SCRIPS ENDS-->

<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
	<script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
<![endif]-->

</body>
</html>