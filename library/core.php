<?php

function base_url() {
    return "http://localhost/rally_std";
}

function base_path() {
    return $_SERVER['DOCUMENT_ROOT'] . "/rally_std";
}

function salt_pass($pass) {
    //return md5("itoffside.com" . $pass);
    return $pass;
}
