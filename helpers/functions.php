<?php

function setLink($link){
    /** Поддомен нужного аккаунта */
    $subdomain = file_get_contents('subdomainAmoCRM.txt');
    
    /** Формируем URL для запроса */
    return 'https://' . $subdomain . $link;
}

function pr($var) {
    static $int=0;
    echo '<pre><b style="background: red;padding: 1px 5px;">'.$int.'</b> ';
    print_r($var);
    echo '</pre>';
    $int++;
}

function prv($var) {
    static $int=0;
    echo '<pre><b style="background: white;border:1px solid blue;padding: 1px 5px;">'.$int.'</b> ';
    var_dump($var);
    echo '</pre>';
    $int++;
}