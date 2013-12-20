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
     * Are here stores configuration data. 
     * 
     * @var array
     */
    protected $_data;

	/**
	 * Create Config
	 * 
	 * This method create an instance of the class.
	 * 
	 * @param array $data array configuration data
	 */
    public function __construct($data = array())
    {
        $this->_data = $data;

        $this->refreshTree();
    }

	/**
	 * Convert To Array
	 * 
	 * @return array
	 */
    public function toArray()
    {
        $array = array();

        foreach ($this->_data as $name => $value) {
            $array[$name] = $value;

            if ($value instanceof self) {
                $array[$name] = $value->toArray();
            }
        }

        return $array;
    }

    protected function refreshTree()
    {
        foreach ($this->_data as $name => $value) {
            if (is_array($value)) {
                $this->_data[$name] = new self($value);
            }
        }
    }
} 
