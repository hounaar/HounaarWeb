// Connect to server
var socket = io.connect('http://localhost:3000');

// Send message
$('#send').click(function() {
    var message = $('#message').val();
    if (message != '') {
       
