<?php

namespace App\Controller;

use App\Message\TestMessage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\HttpFoundation\Response;

class MessageController extends AbstractController
{
    private MessageBusInterface $bus;

    public function __construct(MessageBusInterface $bus)
    {
        $this->bus = $bus;
    }

    public function sendMessage(): Response
    {
                
                $message = new TestMessage('Hello, this is a test message!');

                $this->bus->dispatch($message);
        
                return new Response('Message sent!');
    }


}