<?php

    $book = array(
        'title'     => 'Гарри Поттер',
        'author'    => 'Д.К. Роулинг',
        'publisher' => 'детская пресса',
        'pages'     => '784',
        'category'  => 'детская литература'
    );
    include  'Twig/autoloader.php';
    Twig_Autoloader::register();

    try{
        $loader = new Twig_Loader_Filesystem('templates');
        $twig = new Twig_Environment($loader);
        $template = $twig->loadTemplate('book.tmpl');


        $month = date('m',mktime());
        echo $template->render(array(
            'book' => $book
        ));
    }catch(Exception $e){
        die('ERROR: '.$e->getMessage());
    }
?>