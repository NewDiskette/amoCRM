<?php
include 'menu.html';
include '../functions.php';
include '../config/config.php';

// Формируем URL для запроса
$link = setLink('.amocrm.ru/oauth2/access_token');
// Формируем заголовки 
$headers = ['Content-Type:application/json'];
// Соберем данные для запроса 
$data = $config_refresh_token;

include '../curlWithPost.php';
include './responseHandler.php';

prv($response);
prv($access_token);
prv($refresh_token);
prv($token_type);
prv($expires_in);

file_put_contents('../config/accessToken.txt', $access_token);
file_put_contents('../config/refreshToken.txt', $refresh_token);

include '../errors.php';