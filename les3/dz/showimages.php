<?php
//скрипт, получающий из БД имена файлов и путь к ним и выводящий их на страницу.
//так же при отображении увеличивает значение количества просмотров в базе

include_once "sqlconnect.php";

function imagebord($connection,$sqltable){
    $sql = "SELECT id, filename, path, seen, opened FROM $sqltable ORDER BY opened DESC";
    $sqlnewseen = "UPDATE $sqltable SET seen=seen+1 WHERE id=";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $sqlres = mysqli_query($connection, $sqlnewseen.$row["id"]);
            $thumb = $row["path"].$row["filename"];//путь к уменьшенной фотке
            $fullimage = $row["path"].'images\\'.$row["filename"];//путь к увеличенным фоткам
            $seen = $row["seen"];
            $opened = $row["opened"];
            $test = '<div class="imageinner">
                <div class="pic">
                <a href=showidpic.php?id='.$row["id"].'&db='.$sqltable.' target="_blank"><img src="'.$thumb.'" alt="pic"></a>
                </div>
                <div class="textlabel">
                <div class="seen">
                <i class="seen_icon"></i><span class="seen_count">'.$seen.'</span></div>
                <div class="opened">
                <i class="opened_icon"></i><span class="opened_count">'.$opened.'</span>
                </div></div></div>';
                return $test;
        }
    } else {
        return "Изображений в БД не найдено";
    }

    mysqli_close($connection);
}
?>