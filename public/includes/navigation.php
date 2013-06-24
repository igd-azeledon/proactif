<?php
/*
 * functions to allow navigation between languages in the sit
 */

class Navigation
{
    private static $_fr_pages;  

    private static $_en_pages;
    
    function __construct() {
       $this->_fr_pages = array(
            'index.php',
            'nous-joindre.php',
            'a-propos.php',
            'assistance-soins-medicaux.php',
            'politique-confidentialite.php',
            'caracteristiques-prestations.php',
            'primes-prestations.php',
            'conditions-dutilisation.php',
            'trousse-dinformation.php'  
        );

        $this->_en_pages = array(
            'index.php',
            'contact-us.php',
            'about.php',
            'medical-care-assistance.php',
            'confidentiality-policy.php',
            'features-benefits.php',
            'bonus-benefits.php',
            'conditions-use.php',
            'information_package.php',
            'abc-security.php'
        );
   }

    function get_i18_link($currentlang='fr')
    {
        //get current page
        $current_page = explode('/',$_SERVER['SCRIPT_NAME']);
        $current_page = $current_page[count($current_page)-1];
        
        //get the index of the page
        $page_index = array_search($current_page, $this->{'_'.$currentlang.'_pages'});

        if($page_index===false)
            $page_index = 0;

        $newlang = ($currentlang=='fr')?'en':'fr';

        return $this->{'_'.$newlang.'_pages'}[$page_index];
    }
}

$navigation = new Navigation();
?>
