<h1 align="center">🤖 AI Chatbot Web Application</h1>

<p align="center">
  <img src="https://via.placeholder.com/800x400.png?text=Chatbot+Demo" alt="Chatbot Demo" />
</p>

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

- PHP 8.0 or higher
- Composer
- Node.js (for frontend dependencies)
- A valid AI API key (e.g., OpenAI, DeepSeek)

---

## 🚀 Installation

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/ai-chatbot.git
cd ai-chatbot
Run HTML
2. Install Backend Dependencies
Install PHP dependencies using Composer:


composer install
3. Install Frontend Dependencies
Install Node.js dependencies:


npm install
4. Configure Environment
Copy the .env.example file to .env and update it with your API key and other settings:


cp .env.example .env
Edit the .env file:

AI_API_KEY=your-api-key-here
AI_API_URL=https://api.deepseek.com/v1/chat/completions

5. Generate Application Key
Generate a unique application key:


php artisan key:generate
6. Run Database Migrations (if applicable)
If your application uses a database, run the migrations:


php artisan migrate
7. Start the Application
Run the Laravel development server:


php artisan serve
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

If the API fails, the chatbot will return a fallback response ("Hello").

📂 Project Structure
Backend (Laravel)
app/Http/Controllers/AIChatbotController.php: Handles chatbot logic and API integration.

routes/web.php: Defines routes for the chatbot functionality.

.env: Stores environment variables, including the AI API key.

Frontend (JavaScript)
public/js/script.js: Manages frontend interactions, API calls, and chat updates.

resources/views/chat.blade.php: The main view for the chatbot interface.

🛠️ Troubleshooting
No response from the bot: Ensure the AI API key is correctly set in the .env file and the API is operational.

File upload issues: Check server configurations for file size limits and permissions.

🤝 Contributing
Contributions are welcome! Please follow these steps:

Fork the repository.

Create a new branch (git checkout -b feature/YourFeatureName).

Commit your changes (git commit -m 'Add some feature').

Push to the branch (git push origin feature/YourFeatureName).

Open a pull request.

📄 License
This project is licensed under the MIT License. See the LICENSE file for details.

🙏 Acknowledgments
Laravel for the powerful PHP framework.

OpenAI or DeepSeek for the AI API.

Contributors and the open-source community.

🎨 Custom CSS for GitHub README
While GitHub doesn’t support full CSS, you can use inline styles for basic enhancements. Here’s an example of how to style sections:


<div style="background-color: #f4f7f6; padding: 20px; border-radius: 8px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
  <h2 style="color: #333; border-bottom: 2px solid #FF5722; padding-bottom: 10px;">✨ Features</h2>
  <ul style="list-style-type: none; padding: 0;">
    <li style="padding: 10px; background-color: #fff; margin-bottom: 10px; border-radius: 4px; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">
      <strong>Real-time Chat</strong>: Instant messaging with AI-powered responses.
    </li>
    <li style="padding: 10px; background-color: #fff; margin-bottom: 10px; border-radius: 4px; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">
      <strong>File Upload</strong>: Upload images and other files during conversations.
    </li>
  </ul>
</div>
