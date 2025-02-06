<?php 
namespace Training\CronExample\Cron;
use Psr\Log\LoggerInterface;
class Example
{
    protected LoggerInterface $logger;
    public function __construct(LoggerInterface $logger)
    {
      $this->logger = $logger;
    }
    public function execute()
    {
      $this->logger->info('Devansh ,cron job started');  sleep(2);
      $this->logger->info('Devansh ,cron job ended');
    }
}