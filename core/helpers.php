<?php

function dump(...$vars) {

    echo '<pre>';
    foreach ($vars as $var) {
        var_dump($var);
    }
    echo '</pre>';
}

function getClassBasename($class) {
    $position = strripos($class, '\\');
    return substr($class, $position + 1);
}

function getNamespace($class) {
    $position = strripos($class, '\\');
    return substr($class, 0, $position);
}

function slugify($string) {
    $string = str_replace(' ', '-', strtolower(trim($string)));

    $string = preg_replace('/[^a-z0-9-]/', '', $string);

    return $string;
}