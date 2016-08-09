<?php
/**
 * S A M P L E    P H P    C O D E
 * 
 * @author     Mikhail (Mik™) <miksoft.tm@gmail.com>
 * @copyright  Copyright (c) 2016, Mikhail
 */
    
    namespace Libraries;
	
/**
 * Language class
 * 
 * @package PHPSample
 * @subpackage Libraries
 * @category Lang
 * @author Mikhail (Mik™) <miksoft.tm@gmail.com>
 * @version 1.0.0 (7.06.2016)
 */
class Lang  {

    var $language = array();

    /**
     * Check the language of the browser
     * 
     * @static
     * @return string
     */
    function __construct() {
        if ( ! $lang = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']))
            return array();
        
        if ( ! preg_match_all('/([a-z]{1,8}(?:-[a-z]{1,8})?)(?:;q=([0-9.]+))?/', $lang, $lang))
            return array();
        
        $this->language = array_combine($lang[1], $lang[2]);
        
        foreach ($this->language as $key => $var) {
            $this->language[$key] = $var ? (float) $var : 1;
        }
        
        arsort($this->language, SORT_NUMERIC);
    } // static function check_language()
 
    
    /**
     * Specifies the user's preferred language
     * 
     * @param string $default default language site
     * @param array $langs an array of alternate language site
     * @return string
     */
    function check_language($default, $langs) {
        $languages = array();

        foreach ($langs as $lang => $alias) {

            if (is_array($alias)) {
                
                foreach ($alias as $alias_lang) {
                    $languages[strtolower($alias_lang)] = strtolower($lang);
                }

            } else {
                $languages[strtolower($alias)]=strtolower($lang);
            }
        }

        foreach ($this->language as $l => $v) {
            $s = strtok($l, '-');

            if (isset($languages[$s]))
                return $languages[$s];

        }
        return $default;
    } // function check_language($default, $langs)
    
    
    /**
     * Vail user age for russian language
     * @param integer $val age
     * @param string $lang current language ('ru')
     * @return string
     */
    static function to_normal_alt($val, $lang) {
        if ($lang != 'ru')
            return $val . ' years';

        $one  = ' год';
        $four = ' года';
        $five = ' лет';

        if (($val - $val % 10) % 100 != 10){
            if ($val % 10 == 1){
                $output = $val . $one;
            } else if ($val % 10 >= 2 && $val % 10 <= 4) {
                $output = $val . $four;
            } else {
                $output = $val . $five;
            }

        } else {
            $output = $val . $five;
        }

        return $output;
    } // static function to_normal_alt($val, $lang)
}

/* Location: /php.inc/libraries/lang.class.php */