<?php

namespace Ollywarren\Prestashop\Facades;
use Illuminate\Support\Facades\Facade;

class Prestashop extends Facade {

    /**
     * getFacadeAccessor
     */
    protected static function getFacadeAccessor()
    {
        return 'Prestashop';
    }

}