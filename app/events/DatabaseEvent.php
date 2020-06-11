<?php

// namespace Mirage\Events;

// use Mirage\Libs\L;
// use Phalcon\Events\Event;
// use Phalcon\Db\Profiler;

// /**
//  * Class Auth
//  * @package Mirage
//  */

// class DatabaseEvent extends \Mirage\App\Event
// {

//     public function ping($connection)
//     {
//         try {
//             $connection->fetchAll('SELECT 1');
//         } catch (\Exception $e) {
//             $this->logger->error('connection to db is lost. try to reconnect');
//             $connection->connect();
//         }
//         return $connection;
//     }

//     public function beforeQuery(Event $event, $connection)
//     {
//         $connection = $this->ping($connection);

//         $this->profiler->startProfile(
//             $connection->getSQLStatement()
//         );
//     }

//     public function afterQuery(Event $event, $connection)
//     {
//         $this->logger->info($this->profiler->getSQLStatement() . " | " . $this->profiler->getTotalElapsedSeconds());
//         $this->profiler->stopProfile();
//     }
// }
