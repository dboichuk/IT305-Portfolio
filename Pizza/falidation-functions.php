<?php

function validName($name){
    return !empty(trim($name));
}

function validMethod($method){
    return $method=="pickup" || $method=="delivery";
}

function validAddress($address){
    return !empty(trim($address)) && sizeof($address)>=10;
}