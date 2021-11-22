<?php

    $menuArr=[
        'main'=>"Главная",
        'about'=>"О нас",
        'contact'=>"Контакты",
            ];
    $menuHtml='<ul>';

    foreach($menuArr as $val){
        $menuHtml.="<li>$val</li>";
    }
    echo $menuHtml."</ul>";

?>