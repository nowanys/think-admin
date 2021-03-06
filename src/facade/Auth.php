<?php
namespace suframe\thinkAdmin\facade;

use think\Facade;

/**
 * Class Auth
 * @package suframe\thinkAdmin\facade
 * @mixin \suframe\thinkAdmin\Auth
 */
class Auth extends Facade
{
    protected static function getFacadeClass()
    {
        return \suframe\thinkAdmin\Auth::class;
    }
}
