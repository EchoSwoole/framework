<?php
/**
 * Echoswoole控制台
 * User: EchoLi
 * Date: 2018/10/3
 * Time: 5:59 PM
 */

namespace Echoswoole\Console;

use Echoswoole\Command;
use Echoswoole\Application as App;
use Symfony\Component\Console\Application as BaseApplication;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * 控制台
 *
 * @author EchoLi <php360@qq.com>
 */
class Application extends BaseApplication
{
    /**
     * 控制台显示logo
     *
     * @var string
     */
    private static $logo = <<<LOGO
  _____     _          ____                     _
 | ____|___| |__   ___/ ___|_      _____   ___ | | ___
 |  _| / __| '_ \\ / _ \\___ \\ \\ /\\ / / _ \\ / _ \\| |/ _ \\
 | |__| (__| | | | (_) |__) \\ V  V / (_) | (_) | |  __/
 |_____\\___|_| |_|\\___/____/ \\_/\\_/ \\___/ \\___/|_|\\___|

LOGO;

    public function __construct()
    {
        parent::__construct(
            'Echoswoole',
            App::VERSION
        );
    }

    /**
     * {@inheritdoc}
     */
    public function run(InputInterface $input = null, OutputInterface $output = null)
    {
        return parent::run($input, $output);
    }

    /**
     * 初始化控制台命令
     *
     * @return array|\Symfony\Component\Console\Command\Command[]
     */
    protected function getDefaultCommands()
    {
        return array_merge(parent::getDefaultCommands(), array(
            new Command\StartCommand(), // 启动服务命令
            new Command\StartDaemonCommand(), // 后台守护进程命令
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getHelp()
    {
        return self::$logo . parent::getHelp();
    }
}
