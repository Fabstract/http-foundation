<?php

namespace Symfony\Component\HttpFoundation;

/**
 * Interface ParameterBagInterface
 * @package Symfony\Component\HttpFoundation
 */
interface ParameterBagInterface extends \IteratorAggregate, \Countable
{

    /**
     * @param array $parameters An array of parameters
     */
    public function __construct(array $parameters = array());

    /**
     * Returns the parameters.
     *
     * @return array An array of parameters
     */
    public function all();

    /**
     * Returns the parameter keys.
     *
     * @return array An array of parameter keys
     */
    public function keys();

    /**
     * Replaces the current parameters by a new set.
     *
     * @param array $parameters An array of parameters
     */
    public function replace($parameters = []);

    /**
     * Adds parameters.
     *
     * @param array $parameters An array of parameters
     */
    public function add($parameters = []);

    /**
     * Returns a parameter by name.
     *
     * @param string $key The key
     * @param mixed $default The default value if the parameter key does not exist
     *
     * @return mixed
     */
    public function get($key, $default = null);

    /**
     * Sets a parameter by name.
     *
     * @param string $key The key
     * @param mixed $value The value
     */
    public function set($key, $value);

    /**
     * Returns true if the parameter is defined.
     *
     * @param string $key The key
     *
     * @return bool true if the parameter exists, false otherwise
     */
    public function has($key);

    /**
     * Removes a parameter.
     *
     * @param string $key The key
     */
    public function remove($key);

    /**
     * Returns the alphabetic characters of the parameter value.
     *
     * @param string $key The parameter key
     * @param string $default The default value if the parameter key does not exist
     *
     * @return string The filtered value
     */
    public function getAlpha($key, $default = '');

    /**
     * Returns the alphabetic characters and digits of the parameter value.
     *
     * @param string $key The parameter key
     * @param string $default The default value if the parameter key does not exist
     *
     * @return string The filtered value
     */
    public function getAlnum($key, $default = '');

    /**
     * Returns the digits of the parameter value.
     *
     * @param string $key The parameter key
     * @param string $default The default value if the parameter key does not exist
     *
     * @return string The filtered value
     */
    public function getDigits($key, $default = '');

    /**
     * Returns the parameter value converted to integer.
     *
     * @param string $key The parameter key
     * @param int $default The default value if the parameter key does not exist
     *
     * @return int The filtered value
     */
    public function getInt($key, $default = 0);

    /**
     * Returns the parameter value converted to boolean.
     *
     * @param string $key The parameter key
     * @param mixed $default The default value if the parameter key does not exist
     *
     * @return bool The filtered value
     */
    public function getBoolean($key, $default = false);

    /**
     * Filter key.
     *
     * @param string $key Key
     * @param mixed $default Default = null
     * @param int $filter FILTER_* constant
     * @param mixed $options Filter options
     *
     * @see http://php.net/manual/en/function.filter-var.php
     *
     * @return mixed
     */
    public function filter($key, $default = null, $filter = FILTER_DEFAULT, $options = []);
}
