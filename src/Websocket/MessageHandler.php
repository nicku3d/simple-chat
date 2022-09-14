<?php


namespace App\Websocket;


use Ratchet\ConnectionInterface;
use Ratchet\MessageComponentInterface;

class MessageHandler implements MessageComponentInterface
{

    protected $connections;

    public function __construct()
    {
        $this->connections = new \SplObjectStorage;
    }

    public function onOpen(ConnectionInterface $conn)
    {
        $this->connections->attach($conn);
    }

    public function onClose(ConnectionInterface $conn)
    {
        $this->connections->detach($conn);
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        $this->connections->detach($conn);
        $conn->close();
    }

    public function onMessage(ConnectionInterface $from, $msg)
    {
        // sending message to all connections skipping its sender
        foreach($this->connections as $connection)
        {
            if($connection === $from)
            {
                continue;
            }

            $connection->send($msg);
        }
    }
}