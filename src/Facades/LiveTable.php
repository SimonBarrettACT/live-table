<?php

namespace SimonBarrettACT\LiveTable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SimonBarrettACT\LiveTable\LiveTable
 */
class LiveTable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \SimonBarrettACT\LiveTable\LiveTable::class;
    }
}
