<?php
/**
 * S A M P L E    P H P    C O D E
 * 
 * @author     Mikhail (Mik™) <miksoft.tm@gmail.com>
 * @copyright  Copyright (c) 2016, Mikhail
 */

    namespace Core;

/**
 * CLASS OF AUTOLOADER
 * 
 * Automatic loading of PHP classes, when they called in the program
 * 
 * @package PHPSample
 * @subpackage Core
 * @category Loader
 * @author Mikhail (Mik™) <miksoft.tm@gmail.com>
 * @version 1.0.0 (7.06.2016)
 */
class Loader {

    /**
     * An array of loaded PHP classes
     * @var array
     */
    protected $loaded = array();

    /**
     * An array of directories that may contain PHP classes
     * @var array 
     */
    protected $directory = array(
            DIR_LIBRARIES, 
            DIR_CONTROLLERS, 
            DIR_MODELS, 
            DIR_CORE
        );


    /**
     * This method is used automatically by the PHP class loader, 
     * which was assigned to the function 'spl_autoload_register' in a file index.php
     * 
     * @param string the class name
     * @return boolean the result of class loading
     */
    function autoload($class) {
        if (isset($this->loaded[$class]))
            return TRUE;

        $namespace = explode('\\', $class);

        if (is_array($namespace) && ! empty($namespace)) {

            $path = $this->_get_file_namespace($namespace);

        } else {

            $path = $this->_get_file($class);

        }

        $this->loaded[] = $class;

        require_once $path;
    } // function autoload($class)


    /**
     * The method returns the path of the appropriate namespace
     * 
     * @static
     * @param string $namespace
     * @return string path
     */
    protected static function get_path_namespace($namespace) {
        switch ($namespace) {
            case 'Controllers' : return DIR_CONTROLLERS;
            case 'Libraries' : return DIR_LIBRARIES;
            case 'Models' : return DIR_MODELS;
            case 'Core' : return DIR_CORECLASS;
        }
    } // protected static function get_path_namespace($namespace)


    /**
     * This method creates a file name for the title of class. 
     * This function is used if the class NOT uses namespaces.
     * 
     * @access private
     * @param string $class the class name
     * @return mixed (string) full path to the class file (boolean) OR FALSE
     */
    private function _get_file($class) {
        foreach ($this->directory as $path) {
            if (file_exists($path . self::_filename($class)) && ! class_exists($class)) {

                return $path . self::_filename($class);
            }
        }

        return FALSE;
    } // private function _get_file($class)


    /**
     * This method creates a file name for the title of class. 
     * This function is used if the class USES namespaces.
     * 
     * @access private
     * @param string the class name in a name spaces
     * @return mixed (string) full path to the class file (boolean) OR FALSE
     * @throws \Exception
     */
    private function _get_file_namespace($namespace) {
        $namespace = array_filter(
                $namespace,
                function($el) {return ! empty($el);});

        $namespace = array_values($namespace);

        $path  = self::get_path_namespace($namespace[0]);
        $class = strtolower($namespace[1]);
        $file  = self::_filename($class);

        if ( ! file_exists($path . $file))
            throw new \Exception('Class not found: ' . $path . $file);

        return $path . $file;
    } // private function _get_file_namespace($namespace)
    
    
    /**
     * Returns the file name by class
     * 
     * @static
     * @access private
     * @param string $class class name
     * @return string
     */
    private static function _filename($class) {
        return $class . '.class.php';
    } // $class . '.class.php'
}

/* Location: /php.inc/core/loader.class.php */