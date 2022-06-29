<?php
include 'menu.html';
include './helpers/functions.php';

/** Формируем URL для запроса */
$link = setLink('.amocrm.ru/api/v4/contacts');

$access_token = file_get_contents('helpers/config/accessToken.txt');

$redirect_uri = file_get_contents('helpers/config/redirectUri.txt');
$url = mb_substr($redirect_uri, 0, 5);
if($url == 'https') $https = true;

/** Формируем заголовки */
$headers = [
    'Authorization: Bearer ' . $access_token,
];

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
