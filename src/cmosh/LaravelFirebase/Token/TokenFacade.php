<?php namespace Cmosh\LaravelFirebase;

use Illuminate\Support\Facades\Facade;

class TokenFacade extends Facade {

    protected static function getFacadeAccessor() { return 'firebase.token'; }

}
