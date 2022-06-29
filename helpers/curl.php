<?php

/** Сохраняем дескриптор сеанса cURL */
$curl = curl_init();

/** Устанавливаем необходимые опции для сеанса cURL  */
curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-oAuth-client/1.0');
curl_setopt($curl,CURLOPT_URL, $link);
curl_setopt($curl,CURLOPT_HTTPHEADER,$headers);
curl_setopt($curl,CURLOPT_HEADER, false);

if($data)curl_setopt($curl,CURLOPT_POSTFIELDS, json_encode($data));
if($https){
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, 1);
    curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, 2);
}else{
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
}

/** Инициируем запрос к API и сохраняем ответ в переменную */
$out = curl_exec($curl);
$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

curl_close($curl);
