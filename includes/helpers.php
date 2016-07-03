<?php
    function render($template, $title = []) {
        $path = "templates/" . $template . ".php";
        if (file_exists($path)) {
            extract($title);
            require $path;}
    }
?>
