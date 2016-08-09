<?php
/**
 * S A M P L E    P H P    C O D E
 * 
 * @author     Mikhail (Mik™) <miksoft.tm@gmail.com>
 * @copyright  Copyright (c) 2016, Mikhail
 */

    /**
     * Enable or disable the display of errors and warnings php
     */
    define(DEBUG, FALSE);


    define(BASEPATH, __DIR__ . '/');
    define(COREPATH, BASEPATH . 'php.inc/');

    require_once COREPATH . 'config/defines.php';
    require_once DIR_CORECLASS . 'loader.class.php';

    /**
     * Autoloader initialization
     */
    $LOADER = new \Core\Loader();

    spl_autoload_register(array($LOADER, 'autoload'));
    
    /**
     * Loading router card
     */
    require_once COREPATH . 'config/routes.php';


    $controller = new \Core\Main();