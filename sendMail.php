<?php

$apiKey = "7f6642509326b7e68a674023de092940-us1";
$campaignId = "6e43b8e9ed";

$memberId = md5(strtolower("kalvin.oanda@strathmore.edu"));
$dataCenter = substr($apiKey, strpos($apiKey, '-') + 1);
// $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $campaignId . '/actions/test';

$url = 'https://'. $dataCenter .'.api.mailchimp.com/3.0/campaigns/'. $campaignId .'/actions/test';

$jsonEmail = '{"test_emails":["the mail you want to send thing sat"],"send_type":"html"}';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERPWD, 'apikey:' . $apiKey);
// curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonEmail);

$result = curl_exec($ch);
curl_close($ch);

var_dump($result);
