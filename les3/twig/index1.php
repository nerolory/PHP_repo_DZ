<?php
    require_once  'Twig/autoloader.php';
    Twig_Autoloader::register();

    try{
        $loader = new Twig_Loader_Filesystem('templates');
        $twig = new Twig_Environment($loader);
        $template = $twig->loadTemplate('thanks.tmpl');
        $content = $template->render(array(
            'name' => 'Clark Kent',
            'username' => 'ckent',
            'password' => 'ckent',
            'password' => 'KrypOnline'
        ));
        echo $content;
    }catch(Exception $e){
        die('ERROR: '.$e->getMessage());
    }
?>