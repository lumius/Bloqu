<?php

/*
 * Written on 12-09-13 by Corstian Boerman
 * 
 * Copyright (c) by Corstian Boerman (http://corstianboerman.com)
 */

class config {
    static function settings($key, $value = null) {
        static $_config = array();

        $_config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . '/app/config.ini', true);
        
        if ($value == null)
          return (isset($_config[$key]) ? $_config[$key] : null);
        else
          $_config[$key] = $value;
    }
}

?>
