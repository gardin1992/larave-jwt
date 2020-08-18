<?php

$token = $_GET['token'];

$part = explode(".",$token);
$header = $part[0];
$payload = $part[1];
$signature = $part[2];

$valid = hash_hmac('sha256',"$header.$payload",'minha-senha',true);
$valid = base64_encode($valid);

if($signature == $valid){
   echo "valid";
}else{
   echo 'invalid';
}
