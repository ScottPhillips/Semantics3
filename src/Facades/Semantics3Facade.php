<?php

namespace Subbe\Semantics3\Facades;

use Illuminate\Support\Facades\Facade;

class Semantics3Facade extends Facade
{
    protected static function getFacadeAccessor() {
        return 'semantics3';
    }
}