<?php
/**
 * Run Echoswoole server in background
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

class StartDaemonCommand extends Command
{
    protected function configure()
    {
        $this->setName('start:daemon')
            ->setDescription('Run server in background')
            ->setHelp('Run server in background');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('daemon');
    }
}
