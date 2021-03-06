<?php

class Renderer {

    //render('articles/show')
    public static function render(string $path, array $variables = []){

        //['var1' => 2; 'var2' => "lion"]
        // $var1 = 2;
        //$var2 = "lion";
        extract($variables);

        ob_start();
        require('templates/'. $path .'.html.php');
        $pageContent = ob_get_clean();

        require('templates/layout.html.php');
    }
}