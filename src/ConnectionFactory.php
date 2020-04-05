<?php

namespace ekstazi\websocket\stream;

use Amp\Promise;
use Psr\Http\Message\RequestInterface;

interface ConnectionFactory
{
    /**
     * Send binary frames.
     */
    const MODE_BINARY = 'binary';

    /**
     * Send text frames.
     */
    const MODE_TEXT = 'text';

    public function connect(RequestInterface $request, string $mode = self::MODE_BINARY): Promise;
}
