<?php
$access_token = 'cbZs2x///Q1/gzGHdr71SpqJNjPhCzUssJrgFMHeZRyc8kUczZB1bLdeIEoOfoJOdPxTMKwAZoVVF3cQxqleOeRMV2JGrkbvvFm7BIoc8QWpdWIX7jqCHwE5QeEPLYYNAWiHfing8V2RliXQWVT6jgdB04t89/1O/w1cDnyilFU';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
