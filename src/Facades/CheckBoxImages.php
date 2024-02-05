<?php

namespace ronylicha\CheckBoxImages\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ronylicha\CheckBoxImages\CheckBoxImages
 */
class CheckBoxImages extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ronylicha\CheckBoxImages\CheckBoxImages::class;
    }
}
