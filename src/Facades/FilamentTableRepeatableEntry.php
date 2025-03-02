<?php

namespace Filamerce\FilamentTableRepeatableEntry\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Filamerce\FilamentTableRepeatableEntry\Infolists\Components\TableRepeatableEntry
 */
class FilamentTableRepeatableEntry extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Filamerce\FilamentTableRepeatableEntry\Infolists\Components\TableRepeatableEntry::class;
    }
}
