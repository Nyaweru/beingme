<!DOCTYPE html>
<html>
  <head>
    <title>Chat</title>
  </head>
  <body>
  </html>
<div id = "container">
<h1>Chat with us!</h1>
    <div id="chat-box">
      <p>Help desk: Hello! How can I help you?</p>
    </div>
    <form id="chat-form">
      <input type="text" id="chat-input" placeholder="Type your message here...">
      <button type="submit">Send</button>
    </form>
    
    <script>
      const chatForm = document.getElementById('chat-form');
      const chatInput = document.getElementById('chat-input');
      const chatBox = document.getElementById('chat-box');

      chatForm.addEventListener('submit', (event) => {
        event.preventDefault();
        const message = chatInput.value;
        if (message) {
          const newMessage = document.createElement('p');
          newMessage.textContent = `User: ${message}`;
          chatBox.appendChild(newMessage);
          chatInput.value = '';
        }
      });
    </script>
    <br>
    <h3> HOW DO YOU FEEL ABOUT US</h3>
  
    <label for="message">Leave a message:</label>
  <textarea id="message" name="message" rows="15" cols="60"></textarea>
    </div>
    </div>
  
    <a href="index.php" class="button">HOME</a>
    </div>
    </div>
  </body>
</html>