<?php
/**
 * S A M P L E    P H P    C O D E
 * 
 * @author     Mikhail (Mik™) <miksoft.tm@gmail.com>
 * @copyright  Copyright (c) 2016, Mikhail
 */

    namespace Models;

        use \Libraries\JSON as JSON;

/**
 * Profile section model class
 * 
 * @package PHPSample
 * @subpackage Models
 * @category Portfolio
 * @author Mikhail (Mik™) <miksoft.tm@gmail.com>
 * @version 1.0.0 (7.06.2016)
 */
class Portfolio extends \Core\BaseModel {
    
    protected $portfolio;
    
    /**
     * CLASS CONSTRUCTOR
     */
    function __construct() {
        $this->portfolio = JSON::get_section('portfolio');
    } // function __construct()


    /**
     * Get all the properties of the object JSON-section 'portfolio'
     * 
     * @return \Models\Profile
     */
    function get() {
        return $this->portfolio;
    }
    
    
    function sort() {
        usort($this->portfolio, function($a, $b) {
            if ($a->order == $b->order) {
                return $a->title > $b->title ? -1 : 1;
            }
            return ($a->order > $b->order) ? 1 : -1;
        });
    }
}

/* Location: /php.inc/models/portfolio.class.php */