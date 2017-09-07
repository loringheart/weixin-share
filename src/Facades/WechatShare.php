<?php
namespace Sensu\WechatShare\Facades;
use Illuminate\Support\Facades\Facade;

class WechatShare extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'wechatshare';
    }
}
