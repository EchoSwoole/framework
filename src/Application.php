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
     * The Echoswoole framework version.
     *
     * @var string
     */
    const VERSION = '1.0.0';

    /**
     * The base path for the Echoswoole installation.
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
     * Set the base path for the application.
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
