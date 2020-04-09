# websocket-stream-client
Websocket stream client is set of interfaces that provide amphp stream like inrerface for different websocket clients
# Interfaces
 Two interfaces provided
 ## `interface ConnectionFactory`
 ### Methods
 #### `connect(RequestInterface $request, string $mode = self::MODE_BINARY): Promise<Stream>`
 Return promise with stream connected to websocket provided by request. Mode is mode used for sending websocket frames
 ## `interface Connection extends ekstazi\websocket\common\Connection`
 For more details see [`ekstazi/websocket-common`](https://github.com/Ekstazi/websocket-common/)
