<?php

namespace Ollywarren\Prestashop\Services;

// use Automattic\WooCommerce\Client;
use BadMethodCallException;

/**
 * Prestashop Service Class that 
 * 
 * @author Olly Warren
 * @version 2.0
 * @license MIT
 */
class PrestashopService
{
	private $url;
    private $key;
    private $client;

    /**
     * Constructor.
     * Sets up the client class and its configuration
     */
	public function __construct()
	{
        // Required Settings
		$this->url               = config('prestashop.url');
        $this->consumer_key      = config('prestashop.key');
        $this->debug             = config('prestashop.debug');
        $this->client            = new \PrestaShopWebservice($this->url, $this->key);
	}

    /**
     * Magic Call Method
     * Looks for a method name on the client class and 
     * if found fires it.
     *
     * @param string $method
     * @param array $args
     * @return void
     */
	public function __call($method, $args) {
		if( is_callable([$this->client, $method]) ) {
			return call_user_func_array([$this->client, $method],$args);
		} else {
			throw new BadMethodCallException("Method $method does not exist on the Prestashop Library");
		}
	}

    /**
     * Magic Getter.
     * Gets any attributes from the client Class
     *
     * @param String $property
     * @return void
     */
	public function __get($property) {
		if( property_exists($this->client, $property) ) {
			return $this->client->{$property};
		} else {
			throw new BadMethodCallException("Property $property does not exist on the Prestashop Library");
		}
    }
}