var http = require('http');
var fs = require('fs');
var app = require('express');

app.get('styles.css', function(req, res){ res.send('styles.css'); res.end(); });

const PORT=8080; 

fs.readFile('index.html', function (err, html) {

    if (err) throw err;    

    http.createServer(function(request, response) {  
        response.writeHeader(200, {"Content-Type": "text/html"});  
        response.write(html);  
        response.end();  
    }).listen(PORT);
});
