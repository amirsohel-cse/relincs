var webSocketServer = require("websocket").server;
var http = require("http");
var htmlEntities = require("html-entities");
var mysql = require("mysql");
var PORT = 3280;

var Clients = [];

var server = http.createServer();
server.listen(PORT, function() {
    console.log("Server is listening on PORT:" + PORT);
});


wsServer = new webSocketServer({
    httpServer : server , 
});

wsServer.on('request' , request => {
    var connection = request.accept(null, request.origin);
    var index = Clients.push(connection) - 1;
    console.log('client', index , "connection");

    /**
     * this is where the secnd send message
     */
    connection.on('message' , message => {
        var utf8Data = JSON.parse(message.utf8Data);
    
        if (message.type === "utf8") {
            var obj = JSON.stringify({
                EvideoId : htmlEntities.encode(utf8Data.EvideoId),
                EuserId : htmlEntities.encode(utf8Data.EuserId),
                username : htmlEntities.encode(utf8Data.username),
                title : htmlEntities.encode(utf8Data.title),
                message : htmlEntities.encode(utf8Data.message),
                image_profile : htmlEntities.encode(utf8Data.image_profile),
            });
            for (let i = 0; i < Clients.length; i++) {
                Clients[i].sendUTF(obj);
            }
        }

    });

    connection.on('close' , connection => {
        Clients.splice(index , 1);
        console.log('Client' , index ,'was disconnacted');
    });
});