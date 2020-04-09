<?php

namespace ekstazi\websocket\client;

use Amp\Promise;
use Psr\Http\Message\RequestInterface;

/**
 * Interface ConnectionFactory.
 * @package ekstazi\websocket\stream
 */
interface ConnectionFactory
{
    /**
     * Create websocket stream for given request and frame mode.
     * @param RequestInterface $request the request used to create websocket connection
     * @param string $mode Mode to use one of self::MODE_BINARY or self::MODE_TEXT
     * @return Promise<Connection> The promise that succeeds with stream for websocket connection
     */
    public function connect(RequestInterface $request, string $mode = Connection::MODE_BINARY): Promise;
}
