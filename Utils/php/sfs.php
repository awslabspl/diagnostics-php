<?php
/*
 * Copyright (c) 2021.
 */

// setup the URL
$url = 'http://api.stopforumspam.org/api';


/**
 * Below is just SAMPLE data used for MOCKING tests.
 * Replace before any real-world use!
 */
$data = array(
        'name' => 'newspammer',
        'email' => 'newspammer@this.baddomain.com',
        'ip' => '185.61.149.193',
        'host' => 'hostname'
);

$data = http_build_query(self::class);

// init the request, set some info, send it and finally close it
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

curl_close($ch);

return $result;