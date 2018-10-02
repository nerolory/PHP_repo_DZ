<?php
    include  'Twig/autoloader.php';
    Twig_Autoloader::register();

    try{
        $loader = new Twig_Loader_Filesystem('templates');
        $twig = new Twig_Environment($loader);
        $template = $twig->loadTemplate('numbers.tmpl');
        $num = rand(0,30);
        $div = ($num%2);

        echo $template->render(array(
            'num' => $num,
            'div' => $div,
        ));
    }catch(Exception $e){
        die('ERROR: '.$e->getMessage());
    }
?>