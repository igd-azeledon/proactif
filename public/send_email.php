<?php
@session_start();

/**
 * check if an email is valid
 * @param string $email
 * @return bool
 */
function valid_email($email)
{
    if(trim($email)=="")
        return false;
    
    // First, we check that there's one @ symbol, and that the lengths are right
    if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email)) {
        // Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
        return false;
    }
    
    // Split it into sections to make life easier
    $email_array = explode("@", $email);
    $local_array = explode(".", $email_array[0]);
    for ($i = 0; $i < sizeof($local_array); $i++) {
        if (!preg_match("/^(([A-Za-z0-9!#$%&'*+\/=?^_`{|}~-][A-Za-z0-9!#$%&'*+\/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$/", $local_array[$i])) {
            return false;
        }
    }
    if (!preg_match("/^\[?[0-9\.]+\]?$/", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
        $domain_array = explode(".", $email_array[1]);
        if (sizeof($domain_array) < 2) {
            return false; // Not enough parts to domain
        }
        for ($i = 0; $i < sizeof($domain_array); $i++) {
            if (!preg_match("/^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$/", $domain_array[$i])) {
                return false;
            }
        }
    }

    return true;
}

//check if post information has been submitted
if($_POST)
{
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    //check the session seed
    if(isset($_POST['seed']) && $_POST['seed']==$_SESSION['seed'])
    {
        //to re-display the information in the form in case of error
        $_SESSION['contact_form'] = $_POST;
        
        //lang vars
        include('lang.php');
        
        //current language in use
        $current_lang = isset($_POST['lang'])?$_POST['lang']:'fr';
        
        //to store the text related to the found errors
        $error_text = '';
        $message = $lang[$current_lang]['mail_intro'].':';
        
        //validate email
        if(isset($_POST['email']) && valid_email($_POST['email']))
        {
            $message .= '<br/>'.$lang[$current_lang]['email_field_name'].': '.$_POST['email'];
        }
        else
            $error_text .= '<br/>'.$lang[$current_lang]['email_error'];
        
        //validate first name
        if(isset($_POST['first_name']) && trim($_POST['first_name'])!='')
        {
            $message .= '<br/>'.$lang[$current_lang]['first_name_field_name'].': '.$_POST['first_name'];
        }
        else
            $error_text .= '<br/>'.$lang[$current_lang]['first_name_error'];
        
        //validate last name
        if(isset($_POST['last_name']) && trim($_POST['last_name'])!='')
        {
            $message .= '<br/>'.$lang[$current_lang]['last_name_field_name'].': '.$_POST['last_name'];
        }
        else
            $error_text .= '<br/>'.$lang[$current_lang]['last_name_error'];
        
        //validate phone
        if(!isset($_POST['phone']) || trim($_POST['phone'])!='')
        {
            $message .= '<br/>'.$lang[$current_lang]['phone_field_name'].': '.$_POST['phone'];
        }
        else
            $error_text .= '<br/>'.$lang[$current_lang]['phone_error'];
        
        //validate availability time
        if(isset($_POST['availability_time']))
        {
            $message .= '<br/>'.$lang[$current_lang]['availability_time_field_name'].': '.implode(',',$_POST['availability_time']);
        }
        else 
            $error_text .= '<br/>'.$lang[$current_lang]['availability_time_error'];
        
        //validate availability day
        if(isset($_POST['availability_days']))
        {
            $message .= '<br/>'.$lang[$current_lang]['availability_days_field_name'].': '.implode(',',$_POST['availability_days']);
        }
        else 
            $error_text .= '<br/>'.$lang[$current_lang]['availability_days_error'];
        
        //contact type
        $message .= '<br/>'.$lang[$current_lang]['type_field_name'].': '.$_POST['type'];
        
        //validate comment
        if(isset($_POST['comments']) && trim($_POST['comments'])!="")
        {
            $message .= '<br/>'.$lang[$current_lang]['comment_field_name'].': '.$_POST['comments'];
        }
        
        //if the user desires to be contacted
        if(isset($_POST['allow_contact']))
            $message .= '<br/>'.$lang[$current_lang]['allow_contact_field_name'];
        
        //send email
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: admin@proactif.com' . "\r\n" . 'Reply-To: admin@proactif.com' . "\r\n";
        $mail_status = mail('admin@proactif.com', $lang[$current_lang]['mail_subject'], $message, $headers);
        
        $_SESSION['mail_status'] = $mail_status;
        if($mail_status)
        {
            $_SESSION['mail_notification'] = $lang[$current_lang]['mail_success'];
            unset($_SESSION['contact_form']);
        }
        else
            $_SESSION['mail_notification'] = $lang[$current_lang]['mail_failed'].$error_text;
        
        if($_POST['lang']=='en')
            header('Location: /en/contact-us.php');
        else
            header('Location: nous-joindre.php');
    }
}

?>
