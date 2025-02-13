<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel ChatGPT</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <h1>Laravel ChatGPT Integration</h1>
    <textarea id="message" placeholder="Type your message..."></textarea>
    <button onclick="sendMessage()">Send</button>
    <p id="response"></p>

    <script>
        function sendMessage() {
            let message = document.getElementById('message').value;
            axios.post('/chat', { message: message })
                .then(response => {
                    document.getElementById('response').innerText = response.data.response;
                })
                .catch(error => {
                    console.error(error);
                });
        }
    </script>
</body>
</html>
