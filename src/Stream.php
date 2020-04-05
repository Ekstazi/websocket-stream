<?php

namespace ekstazi\websocket\stream;

use Amp\ByteStream\InputStream;
use Amp\ByteStream\OutputStream;

/**
 * Interface Stream
 * @package ekstazi\websocket\stream
 */
interface Stream extends InputStream, OutputStream
{
}
