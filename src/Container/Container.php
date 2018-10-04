<?php
/**
 * Echoswoole Container
 * User: EchoLi
 * Date: 2018/10/4
 * Time: 7:43 AM
 */
namespace Echoswoole\Container;

use ArrayAccess;

class Container implements ArrayAccess
{
    /**
     * 绑定的回调函数
     *
     * @var array
     */
    protected $bindings = [];

    /**
     * 服务名称的别名
     *
     * @var array
     */
    protected $aliases = [];

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }
}
