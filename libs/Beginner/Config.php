<?php
/**
 * Config 
 *
 * @package beginner_libs
 * @versuib 0.1
 * @author Net Devil <netdevildevel@gmail.com>
 *
 */
class Beginner_Config
{
    /**
     * Data
     *
     * @var array
     */
    protected $_data;

    public function __construct($data = array())
    {
        $this->_data = $data;
    }
} 
