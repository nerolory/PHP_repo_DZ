<?php
    function text_get()
    {
        return file_get_contents('data/text.txt');
    }

    function text_set($text)
    {
        file_put_contents('data/text.txt', $text);
    }
