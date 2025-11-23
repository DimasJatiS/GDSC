<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GeminiService
{
    public function analyzeMenu(array $payload)
    {
        $prompt = "
        You are a professional culinary assistant AI.
        Generate STRICT JSON:
        {
            \"description\": string,
            \"calories\": integer,
            \"category\": \"drinks\" | \"food\" | \"dessert\",
            \"recipe_steps\": [\"step 1\", \"step 2\", ...]
        }

        NO explanations. JSON ONLY.

        User Input:
        " . json_encode($payload);

        $model = config('services.gemini.model');

        $response = Http::withHeaders([
            'x-goog-api-key' => config('services.gemini.key'),
            'Content-Type'   => 'application/json',
        ])->post(
            "https://generativelanguage.googleapis.com/v1beta/models/{$model}:generateContent",
            [
                'contents' => [
                    [
                        'parts' => [
                            ['text' => $prompt]
                        ]
                    ]
                ]
            ]
        );

        $raw = $response->json();

        // If API returns error → pass through
        if (isset($raw['error'])) {
            return [
                'error' => $raw['error']['message'] ?? 'Gemini API error',
                'raw'   => $raw
            ];
        }

        // Safety: if structure unexpected
        if (
            !isset($raw['candidates'][0]['content']['parts'][0]['text'])
        ) {
            return [
                'error' => 'Unexpected Gemini response structure',
                'raw'   => $raw
            ];
        }

        $text = $raw['candidates'][0]['content']['parts'][0]['text'];

        // Extract JSON safely
        $json = $this->extractJson($text);

        return json_decode($json, true) ?? [];
    }

    private function extractJson(string $text)
    {
        $start = strpos($text, '{');
        $end   = strrpos($text, '}');

        if ($start === false || $end === false) return '{}';

        return substr($text, $start, $end - $start + 1);
    }
}
