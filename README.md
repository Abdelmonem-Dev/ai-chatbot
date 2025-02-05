<h1 align="center">🤖 AI Chatbot Web Application</h1>

<p align="center">
  A sophisticated AI-powered chatbot web application built with <strong>Laravel</strong> (backend) and <strong>JavaScript</strong> (frontend). The chatbot integrates with external AI APIs (e.g., OpenAI, DeepSeek) to provide real-time, intelligent responses. It supports features like <strong>file uploads</strong>, <strong>message history</strong>, and <strong>fallback responses</strong> for a seamless user experience.
</p>

---

## ✨ Features

<div style="display: flex; flex-wrap: wrap; gap: 10px;">
  <div style="flex: 1; min-width: 200px; padding: 10px; border: 1px solid #ddd; border-radius: 8px;">
    <h3>Real-time Chat</h3>
    <p>Instant messaging with AI-powered responses.</p>
  </div>
  <div style="flex: 1; min-width: 200px; padding: 10px; border: 1px solid #ddd; border-radius: 8px;">
    <h3>File Upload</h3>
    <p>Upload images and other files during conversations.</p>
  </div>
  <div style="flex: 1; min-width: 200px; padding: 10px; border: 1px solid #ddd; border-radius: 8px;">
    <h3>AI Integration</h3>
    <p>Connects with third-party AI services for intelligent responses.</p>
  </div>
  <div style="flex: 1; min-width: 200px; padding: 10px; border: 1px solid #ddd; border-radius: 8px;">
    <h3>Fallback Responses</h3>
    <p>Default responses ("Hello") in case of API failure.</p>
  </div>
  <div style="flex: 1; min-width: 200px; padding: 10px; border: 1px solid #ddd; border-radius: 8px;">
    <h3>Modern UI</h3>
    <p>Sleek and user-friendly chat interface.</p>
  </div>
</div>

---

## 🛠️ Prerequisites

Before you begin, ensure you have the following installed:
```
- PHP 8.0 or higher
- Composer
- Node.js (for frontend dependencies)
- A valid AI API key (e.g., OpenAI, DeepSeek)
```


## 🚀 Installation

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/ai-chatbot.git
cd ai-chatbot
```
2. Install Backend Dependencies
Install PHP dependencies using Composer:
```
composer install
```
4. Install Frontend Dependencies
Install Node.js dependencies:
```
npm install
```

4. Configure Environment
Copy the .env.example file to .env and update it with your API key and other settings:
cp .env.example .env
Edit the .env file:
```
AI_API_KEY=your-api-key-here
AI_API_URL=https://api.deepseek.com/v1/chat/completions
```
6. Generate Application Key
Generate a unique application key:
```
php artisan key:generate
```
8. Run Database Migrations  
```
php artisan migrate
```

9. Start the Application
```
php artisan serve
```
Visit http://127.0.0.1:8000 in your browser to access the application.

💡 Usage
Chatting with the Bot
Open the application in your browser.

Type your message in the chat input field and press Enter or click the Send button.

The bot will process your message and respond instantly.

File Upload
You can upload files (e.g., images) during the chat. The file will be sent to the backend for processing.

API Integration
The backend uses Guzzle to interact with the AI API.
```
If the API fails, the chatbot will return a fallback response ("Hello").
```
📂 Project Structure
Backend (Laravel)
app/Http/Controllers/AIChatbotController.php: Handles chatbot logic and API integration.

routes/web.php: Defines routes for the chatbot functionality.

.env: Stores environment variables, including the AI API key.
```
Frontend (JavaScript/HTML/CSS)
for the front end, I used a depository for Patrik Persson

Patrik Persson :<a href="https://github.com/patrik1970/ai-chatbot-html-css-javascript"> ai-chatbot-html-css-javascript </a> 
```

🤝 Contributing
Contributions are welcome! Please follow these steps:

Fork the repository.

Create a new branch (git checkout -b feature/YourFeatureName).

Commit your changes (git commit -m 'Add some feature').

Push to the branch (git push origin feature/YourFeatureName).

Open a pull request.

📄 License
This project is licensed under the MIT License. See the LICENSE file for details.


