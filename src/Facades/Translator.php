<?php

namespace Smallzee\Translator\Facades;

class Translator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'translator';
    }
}