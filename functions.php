<?php 

function generatePassword($length) {
    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-=~!@#$%^&*()_+,./<>?;:[]{}\|';
    return substr(str_shuffle($chars), 0, $length);
}

?>