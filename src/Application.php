<?php
/**
 * Echoswoole Application
 * User: EchoLi
 * Date: 2018/10/2
 * Time: 7:53 PM
 */
namespace Echoswoole;

class Application
{
    /**
     * Echoswoole版本
     *
     * @var string
     */
    const VERSION = '1.0.0';

    /**
     * Echoswoole根路径
     *
     * @var string
     */
    protected $basePath;

    public function __construct($basePath = null)
    {
        if ($basePath) {
            $this->setBasePath($basePath);
        }
    }

    /**
     * 设置根路径
     *
     * @param  string  $basePath
     * @return $this
     */
    public function setBasePath(string $basePath) :Application
    {
        $this->basePath = rtrim($basePath, '\/');

        return $this;
    }
}
