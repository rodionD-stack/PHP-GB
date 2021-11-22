<?php

    function replString($string) {
        return strtr($string, " ", "_");
    }

    $res = replString("Строка для проверки кода.");
    echo $res;

?>