<?php

namespace Filamerce\FilamentTableRepeatableEntry\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Filamerce\FilamentTableRepeatableEntry\FilamentTableRepeatableEntry
 */
class FilamentTableRepeatableEntry extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Filamerce\FilamentTableRepeatableEntry\Components\FilamentTableRepeatableEntry::class;
    }
}
