<?php

/*
 * Written on 29-09-13 by Jan-Willem de Bruyn
 * 
 * Copyright (c) by Jan-Willem de Bruyn (http://datm.nl)
 */

class theming {
    static function includePHP($name, $currentPost) {
		$post = $currentPost;
        require_once($_SERVER['DOCUMENT_ROOT'] . '\\app\\pages\\includes\\' . $name . '.php');
    }
}

?>
