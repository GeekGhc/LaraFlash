<?php

namespace GeekGhc\LaraFlash;
use Illuminate\Support\Facades\Facade;

class Flash extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'laraflash';
    }
}