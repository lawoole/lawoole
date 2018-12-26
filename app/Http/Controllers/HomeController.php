<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lawoole\Contracts\WebSocket\WebSocketHandler;
use Lawoole\Routing\Controller;
use Lawoole\WebSocket\HandShakeResponse;

class HomeController extends Controller
{
    /**
     * Welcome page.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function welcome(Request $request)
    {
        return view('welcome');
    }

    /**
     * WebSocket acceptor.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function websocket(Request $request)
    {
        return HandShakeResponse::accept($request, new class implements WebSocketHandler {
            /**
             * Called when web socket connection is open.
             *
             * @param \Lawoole\Contracts\WebSocket\Connection $connection
             * @param \Illuminate\Http\Request $request
             */
            public function onOpen($connection, $request)
            {
                //
            }

            /**
             * Called when received a web socket message.
             *
             * @param \Lawoole\Contracts\WebSocket\Connection $connection
             * @param bool $isBinary
             * @param string $data
             */
            public function onMessage($connection, $isBinary, $data)
            {
                $connection->push('Hello: '.$data);
            }

            /**
             * Called when web socket connection is closed.
             *
             * @param \Lawoole\Contracts\WebSocket\Connection $connection
             */
            public function onClose($connection)
            {
                //
            }
        });
    }
}
