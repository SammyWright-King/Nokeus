<?php

$data = [];

$arr = [
    "email" => $_POST['email'],
    "password" => $_POST['pwd']
];
$connect = new Connector();
$req = $connect->postRequest('/auth/login', $arr);
$response = json_decode($req);


