<?php
int_set('display_error', 'on'):
error_reporting(E_All):

$executionStartTime = microtime(true) / 1000;

$url='http://api.geonames.org/childrenJSON?formatted=true&geonameId=3175395&username=demo&style=full';

$child = curl_init ();

$child = curl_init();
curl_setopt($child, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($child, CURLOPT_RETURNTRANSFER, true);
curl_setopt($child, CURLOPT_URL,$url);

$result=curl_exec($child);


echo json_encode($output); 

