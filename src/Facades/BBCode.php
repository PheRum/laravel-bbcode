<?php

namespace PheRum\BBCode\Facades;

use Illuminate\Support\Facades\Facade;

class BBCode extends Facade
{
    /***
     * @inheritdoc
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-bbcode';
    }
}
