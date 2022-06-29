<a href="helpers/formGetData.html">Back</a>
<?php
include 'menu.html';
include './helpers/functions.php';

$array_link_api = $_POST;

$access_token = file_get_contents('helpers/config/accessToken.txt');

$redirect_uri = file_get_contents('helpers/config/redirectUri.txt');
$url = mb_substr($redirect_uri, 0, 5);
if($url == 'https') $https = true;

/** Формируем заголовки */
$headers = [
    'Authorization: Bearer ' . $access_token,
];

foreach($array_link_api as $link_api){

    /** Формируем URL для запроса */
    $link = setLink('.amocrm.ru/api/v4/' . $link_api);

    include 'helpers/curl.php';
    
    prv($out);
    /**
     * Данные получаем в формате JSON, поэтому, для получения читаемых данных,
     * нам придётся перевести ответ в формат, понятный PHP
     */
    $response = json_decode($out, true);
    prv($response);
    
    $code = (int)$code;
    prv($code);
    
    if($code == 401){
        header('Location: helpers/getTokens/getTokensByRefreshToken.php');
    }
    
    include 'helpers/errors.php';
}