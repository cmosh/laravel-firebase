<?php namespace Cmosh\LaravelFirebase;

use Illuminate\Support\Facades\Facade;

class LaravelFirebaseFacade extends Facade {

    protected static function getFacadeAccessor() { return 'firebase'; }

}