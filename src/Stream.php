<?php

namespace ekstazi\websocket\stream;

use Amp\ByteStream\InputStream;
use Amp\ByteStream\OutputStream;

interface Stream extends InputStream, OutputStream
{
}
