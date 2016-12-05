<?php
/**
 * A U T O M A T E D    W E A T H E R    S T A T I O N
 * 
 * @author     Mikhail (Mik™) <miksoft.tm@gmail.com>
 * @copyright  Copyright (c) 2016, Mikhail
 * @link       http://miksrv.ru
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