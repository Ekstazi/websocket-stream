# websocket-stream-client
Websocket stream client is set of interfaces that provide amphp stream like inrerface for different websocket clients
# Interfaces
 Two interfaces provided
 ## `interface ConnectionFactory`
 ### Constants
 #### `const MODE_BINARY = 'binary'`
 Send data as binary frames
 #### `const MODE_TEXT = 'text'`
 Send data as text frames
 ### Methods
 #### `connect(RequestInterface $request, string $mode = self::MODE_BINARY): Promise<Stream>`
 Return promise with stream connected to websocket provided by request. Mode is mode used for sending websocket frames
 ## `interface Stream extends  InputStream, OutputStream`
 ### Methods
 #### `public function read(): Promise<string|null>`
 Resolves with a string when new data is available or `null` if the stream has closed.
 #### `public function write(string $data): Promise`
Writes data to the stream. Succeeds once the data has been successfully written to the stream.
 #### `public function end(string $finalData = ''): Promise`
Marks the stream as no longer writable. Optionally writes a final data chunk before. Note that this is not the
same as forcefully closing the stream. This method waits for all pending writes to complete before closing the
stream. Socket streams implementing this interface should only close the writable side of the stream.
