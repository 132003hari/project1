const WebSocket = require('ws');

const wss = new WebSocket.Server({ port: 8080 });

wss.on('connection', (ws) =>
{
    console.log('A client connected');

    // Event listener for messages from clients
    ws.on('message', (message) =>
    {
        console.log(`Received message: ${message}`);

        // Echo the message back to the client
        ws.send(`You said: ${message}`);
    });

    // Event listener for connection close
    ws.on('close', () =>
    {
        console.log('Client disconnected');
    });
});
