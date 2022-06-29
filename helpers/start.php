<?php

if($_POST['redirect_uri']){
    file_put_contents('config/redirectUri.txt', $_POST['redirect_uri']);
}

if($_POST['subdomain_amoCRM']){
    file_put_contents('../subdomainAmoCRM.txt', $_POST['subdomain_amoCRM']);
    file_put_contents('getTokens/subdomainAmoCRM.txt', $_POST['subdomain_amoCRM']);
}

if($_POST['client_secret']){
    file_put_contents('config/clientSecret.txt', $_POST['client_secret']);
}

if($_POST['client_id']){
    file_put_contents('config/clientId.txt', $_POST['client_id']);
}

if($_POST['authorization_code']){
    file_put_contents('config/authorizationCode.txt', $_POST['authorization_code']);
}

header('Location: getTokens/getTokens.php');
