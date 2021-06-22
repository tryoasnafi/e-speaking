<?php

namespace App\Controllers;

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use \App\Libraries\Chat;

class ChatServer extends BaseController
{
    public function index()
    {
        if (!is_cli()) {
            die("Please, run server in terminal");
        }

        $server = IoServer::factory(
            new HttpServer(
                new WsServer(
                    new Chat()
                )
            ),
            9090
        );

        $server->run();
    }
}
