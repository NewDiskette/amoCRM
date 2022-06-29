<?php

$client_id = file_get_contents('../config/clientId.txt');
$client_secret = file_get_contents('../config/clientSecret.txt');
$redirect_uri = file_get_contents('../config/redirectUri.txt');

$authorization_code = file_get_contents('../config/authorizationCode.txt');

$refresh_token = file_get_contents('../config/refreshToken.txt');

$config_authorization_code = [
    'client_id' => $client_id,
    'client_secret' => $client_secret,
    'grant_type' => 'authorization_code',
    'code' => $authorization_code,
    'redirect_uri' => $redirect_uri,
];

$config_refresh_token = [
    'client_id' => $client_id,
    'client_secret' => $client_secret,
    'grant_type' => 'refresh_token',
    'refresh_token' => $refresh_token,
    'redirect_uri' => $redirect_uri,
];