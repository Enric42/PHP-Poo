<?php

spl_autoload_register(function ($className) {
    // className = Controllers\Articles
    // require = libraries/controllers/Article.php;

    $className = str_replace('\\', '/',$className);

    require_once('Libraries/'.$className.'.php');

});