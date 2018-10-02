<?php
    include  'Twig/autoloader.php';
    Twig_Autoloader::register();

    try{
        $loader = new Twig_Loader_Filesystem('templates');
        $twig = new Twig_Environment($loader);
        $template = $twig->loadTemplate('seasons.tmpl');


        $month = date('m',mktime());
        echo $template->render(array(
            'month' => $month
        ));
    }catch(Exception $e){
        die('ERROR: '.$e->getMessage());
    }
?>