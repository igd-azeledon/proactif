<?php
@session_start();

//check if post information has been submitted
if($_POST)
{
    //check the session seed
    if(isset($_POST['seed']) && $_POST['seed']==$_SESSION['seed'])
    {
        //to re-display the information in the form in case of error
        $_SESSION['contact_form'] = $_POST;
        
        //lang vars
        include('lang.php');
        
        var_dump($_POST);
        
        $email_status = mail($_POST['email'], $lang[$_POST['lang']]['email_subject'], $message);
        
        if($email_status)
        {
            $_SESSION['email_status'] = $lang[$_POST['lang']]['email_success'];
            unset($_SESSION['contact_form']);
        }
        else
            $_SESSION['email_status'] = $lang[$_POST['lang']]['email_error'];
        
        if($_POST['lang']=='en')
            header('Location: /en/contact-us.php');
        else
            header('Location: nous-joindre.php');
    }
}

?>
