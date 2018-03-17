<?php
if ( ! function_exists('prestashop') ) {
    /**
     * Get the LaraWoo Service Instance
     * @return \Ollywarren\Prestashop\PrestashopServiceProvider
     */
    function prestashop()
    {
        return app('Prestashop');
    }
}