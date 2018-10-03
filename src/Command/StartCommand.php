<?php
/**
 * Echoswoole start server
 * User: EchoLi
 * Date: 2018/10/3
 * Time: 8:21 AM
 */
namespace Echoswoole\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class StartCommand extends Command
{
    protected function configure()
    {
        $this->setName('start')
            ->setDescription('Start Echoswoole Server')
            ->setHelp('This command allows Start Echoswoole Server');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('param:-d');
    }
}
