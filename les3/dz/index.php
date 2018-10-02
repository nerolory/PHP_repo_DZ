<?php
// формируем массив

include         "showimages.php";
include_once    "sqlconnect.php";
include         "Twig/Autoloader.php";
Twig_Autoloader::register();

$sqltable1 = "main";
$sqltable2 = "uploaded";
$images = imagebord($connection,$sqltable1);
$addImage  = imagebord($connection,$sqltable2);
echo imagebord($connection,$sqltable1);
echo imagebord($connection,$sqltable2);




try {
    $loader = new Twig_Loader_Filesystem('templates');

    $twig = new Twig_Environment($loader);

    $template = $twig->loadTemplate('v_index.tmpl');

    echo $template->render(array(
        'images'     => $images,
        'addImage'   => $addImage
    ));

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}
?>