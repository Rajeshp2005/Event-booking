<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbox</title>
    <style>body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.chatbox {
    max-width: 400px;
    margin: 50px auto;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.messages {
    padding: 10px;
    max-height: 300px;
    overflow-y: scroll;
}

.message {
    background-color: #f0f0f0;
    padding: 8px;
    margin-bottom: 8px;
    border-radius: 4px;
}

form {
    display: flex;
    justify-content: space-between;
    padding: 10px;
    border-top: 1px solid #ddd;
}

input {
    flex: 1;
    padding: 8px;
}

button {
    padding: 8px 16px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
</style>
</head>
<body>
    <div class="chatbox">
        <div class="messages" id="messages">
            <div class="message">Welcome! Ask a question.</div>
        </div>
        <form id="chatForm" onsubmit="sendMessage(); return false;">
            <input type="text" id="userInput" placeholder="Type your question..." autocomplete="off">
            <button type="submit">Send</button>
        </form>
        <a href="./index.php">back</a>
    </div>
    <script>const messagesContainer = document.getElementById('messages');
const userInput = document.getElementById('userInput');

function sendMessage() {
    const userQuestion = userInput.value.trim();
    
    if (userQuestion !== '') {
        appendMessage('user', userQuestion);
        autoAnswer(userQuestion);
        userInput.value = '';
    }
}

function appendMessage(sender, message) {
    const messageElement = document.createElement('div');
    messageElement.classList.add('message', sender);
    messageElement.textContent = message;
    messagesContainer.appendChild(messageElement);

    // Scroll to the bottom
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
}

function autoAnswer(userQuestion) {
    // You can implement your own logic for auto-answering based on the user's question
    // For simplicity, let's have a predefined set of answers for certain questions
    let answer = 'you can ask following questions only:what is the rate for pre wedding?,what is the rate for post wedding?,where is the location?,where can you serve?';

    if (userQuestion.toLowerCase().includes('what is the rate for pre wedding?')) {
        answer = '20k';
    }  if (userQuestion.toLowerCase().includes('what is the rate for post wedding?')) {
        answer = '40k';
    }
      if(userQuestion.toLowerCase().includes('where is the location?')) {
        answer = 'Gongabu,Kathmandu';
    }
    
      if(userQuestion.toLowerCase().includes('where can you serve?')) {
        answer = 'we serve inside the province bagmati';
    }
    
    
    // Simulate a delay before providing the answer
    setTimeout(() => {
        appendMessage('bot', answer);
    }, 500);
}
</script>
</body>
</html>
