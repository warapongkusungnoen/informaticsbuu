<?php
$access_token = 'TfOPZG66i4lD2Pb+Q3Yc9euP/JEVyOda+iMu7EuAWDo+uNn35I9Cp872kr9Sqw8b9W82YUYnSW/8qtyis+JagoZ78Y3xDebJawcg+QyixvItjxuGtmRN8GE6J0z6XJYToRYCdsD8D6iHI99f1pxJWwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
