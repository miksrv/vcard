<?php
/**
 * S A M P L E    P H P    C O D E
 * 
 * @author     Mikhail (Mik™) <miksoft.tm@gmail.com>
 * @copyright  Copyright (c) 2016, Mikhail
 */

    if (DEBUG) {
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
    }

    define('VIEWPATH', BASEPATH . 'php.inc/views/');

    define('DIR_LIBRARIES', COREPATH . 'libraries/');
    define('DIR_CONTROLLERS', COREPATH . 'controllers/');
    define('DIR_MODELS', COREPATH . 'models/');
    define('DIR_CORECLASS', COREPATH . 'core/');
    define('DIR_CONTENT', COREPATH . 'data/');

/* Location: /php.inc/config/defines.php */