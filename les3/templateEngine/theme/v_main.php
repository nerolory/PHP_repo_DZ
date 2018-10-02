<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title><?=$title?></title>
        <meta content="text/html; charset="windows-1251" http-equiv="content">
        <link rel="stylesheet" type="text/css" media="screen" href="theme/style.css"/>
    </head>
    <body>
        <div id="header">
            <h1><?=$title?></h1>
        </div>

        <div id=""menu">
            <a href="index.php">Читать текст</a>
            <a href="edit.php">редактировать текст</a>
        </div>

        <div id="content">
            <?=$content?>
        </div>

         <div id="footer">
            Все права защищены. Адрес. Телефон.
        </div>
    </body>
</html>