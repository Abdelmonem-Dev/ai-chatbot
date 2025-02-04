AI Chatbot Project
This project is a sophisticated AI Chatbot Web Application built with Laravel as the backend and JavaScript for the frontend. The chatbot interacts with an external AI API (such as OpenAI or DeepSeek) to process user messages and provide intelligent responses. The application includes features like file uploads (e.g., images), message history, and fallback responses in case of API failure.

Features
Real-time Chat: Users can send messages and receive instant responses.
File Upload: Users can send images as part of the conversation.
AI Integration: The chatbot communicates with a third-party AI service.
Fallback Responses: If the AI API fails, a default fallback response ("Hello") is returned.
Modern UI: A sleek and interactive interface for chat communication.
Requirements
Before you begin, ensure you have the following:

PHP 8.0 or higher
Composer
Node.js (for frontend)
A valid AI API key (e.g., OpenAI, DeepSeek)
Installation
1. Clone the Repository
Clone this repository to your local machine:

bash
Copy
Edit
git clone https://github.com/your-username/ai-chatbot.git
cd ai-chatbot
2. Install Backend Dependencies
Run the following command to install PHP dependencies via Composer:

bash
Copy
Edit
composer install
3. Install Frontend Dependencies
Navigate to the frontend directory and install Node.js dependencies:

bash
Copy
Edit
npm install
4. Configure Environment
Copy the .env.example file to .env:

bash
Copy
Edit
cp .env.example .env
Edit the .env file to include your AI API Key:

env
Copy
Edit
AI_API_KEY=your-api-key-here
Also, ensure that other configuration settings like database credentials are correct.

5. Generate Application Key
Run the following command to generate the application key:

bash
Copy
Edit
php artisan key:generate
6. Migrate the Database (if applicable)
Run the database migrations if your application uses a database:

bash
Copy
Edit
php artisan migrate
7. Start the Application
You can now run the application using Laravel's built-in server:

bash
Copy
Edit
php artisan serve
The application will be available at http://127.0.0.1:8000.

Usage
Chatting with the Bot
Open the Application: Access the app in your browser.
Send a Message: Type your message in the chat input field and hit enter or click the send button.
Bot Response: The bot will process the message and send a response.
File Upload
You can upload files (e.g., images) during the chat. The file will be converted into a Base64 string and sent to the backend.

API Integration
The backend uses Guzzle to make API requests to the external AI service.
If the AI API fails, the app will return a fallback response ("Hello").
Code Structure
Backend (Laravel)
app/Http/Controllers/AIChatbotController.php: Handles the logic for processing user messages and interacting with the AI API.
routes/web.php: Contains the route definitions for chatbot functionality.
.env: Stores environment variables, including the AI API key.
Frontend (JavaScript)
public/js/script.js: Contains the JavaScript code for interacting with the backend API, updating the chat, and handling user actions.
resources/views/chat.blade.php: The main view for displaying the chatbot UI.
Styling (HTML & CSS)
The project includes clean and modern styles for the chat interface. Below is an example of how the styles are structured:

CSS Example
css
Copy
Edit
/* Basic Chat Window Styling */
.chat-container {
  width: 80%;
  margin: 0 auto;
  padding: 20px;
  background-color: #f4f7f6;
  border-radius: 8px;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.chat-header {
  text-align: center;
  padding-bottom: 20px;
  font-size: 24px;
  color: #333;
}

.chat-box {
  height: 400px;
  overflow-y: scroll;
  background-color: #fff;
  border: 1px solid #ddd;
  padding: 10px;
  border-radius: 8px;
}

.chat-input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 8px;
  margin-top: 10px;
  font-size: 16px;
}

.chat-button {
  padding: 10px;
  background-color: #FF5722;
  color: white;
  border: none;
  border-radius: 8px;
  cursor: pointer;
}

.chat-button:hover {
  background-color: #FF7849;
}
HTML Example
html
Copy
Edit
<div class="chat-container">
  <div class="chat-header">AI Chatbot</div>
  <div class="chat-box" id="chatBox"></div>
  <input type="text" class="chat-input" id="chatInput" placeholder="Type your message...">
  <button class="chat-button" id="sendButton">Send</button>
</div>
Troubleshooting
No valid response from the bot: If you encounter this error, ensure that the AI API key is correctly set in the .env file and that the API is functioning correctly.
File Upload Issues: Ensure that the server is configured to accept large file uploads if required.
License
This project is licensed under the MIT License.
