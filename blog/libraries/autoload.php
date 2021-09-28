<?php

spl_autoload_register(function ($className) {
    // className = Controllers\Articles
    // require = libaries/controllers/Article.php;

    $className = str_replace('\\', '/',$className);

    require_once('libraries/'.$className.'.php');

});