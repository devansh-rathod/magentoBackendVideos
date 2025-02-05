<?php 
namespace Training\ConsoleExample2\Console\Command;

use Elasticsearch\Endpoints\Info;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ExampleCommand extends Command
{
    protected function configure()
    {
        parent::configure();
        $this->setName("training:example:run")
             ->setDescription("Example command description");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello Devansh, this is a test command!');
        $output->writeln('<info>Hello Devansh, this is a test command!</info>');
        $output->writeln('<error>Hello Devansh, this is a test command!</error>');
        $output->writeln('<question>Hello Devansh, this is a test command!</question>');
    }
}
