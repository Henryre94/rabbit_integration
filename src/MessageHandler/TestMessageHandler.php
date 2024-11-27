<?php

namespace App\MessageHandler;

use App\Message\TestMessage;

class TestMessageHandler 
{

    public function __invoke(TestMessage $message)
    {

        $content = $message->getContent();

        echo "Received message: " . $content;
    }

}