<?php 
namespace JokiRuiz\Module\Cron;
 
class Class
{
   protected $_logger;
 
   public function __construct(\Psr\Log\LoggerInterface $logger) {
      $this->_logger = $logger;
   }
 
   public function method() {
      $this->_logger->info('Executing cron “method”');
   }
}