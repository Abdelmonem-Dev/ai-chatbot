<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class AIChatbotController extends Controller
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = config('services.ai.api_key');
    }

    public function chat(Request $request)
    {
        $userMessage = $request->input('message');

        // If the API key is not set, send a default response
        if (!$this->apiKey) {
            return $this->sendFallbackResponse('Hello'); // Return fallback response directly
        }

        try {
            // Make a request to the AI API (e.g., DeepSeek or OpenAI)
            $response = $this->client->post('https://api.deepseek.com', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'deepseek-chat', // Replace with the correct model name
                    'messages' => [ // Corrected 'message' key to 'messages'
                        ['role' => 'user', 'content' => $userMessage], // Send the user's message
                    ],
                ],
            ]);

            $responseData = json_decode($response->getBody(), true);

            // Return the AI's response
            return response()->json([
                'response' => $responseData['choices'][0]['message']['content'],
            ]);
        } catch (\Exception $e) {
            // Log the error for debugging purposes
            Log::error('AI API request failed: ' . $e->getMessage());

            // Fallback message when API fails
            return $this->sendFallbackResponse('Hello'); // Default fallback message
        }
    }

    // Helper method to return a fallback response
    private function sendFallbackResponse($message)
    {
        $responseData = [
            'candidates' => [
                [
                    'content' => [
                        'parts' => [
                            ['text' => $message]
                        ]
                    ]
                ]
            ]
        ];

        return response()->json($responseData);
    }
}
