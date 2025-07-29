<?php

namespace Smallzee\Translator;
use Illuminate\Support\Facades\Http;
class Translator
{
    public function translate(string $text, string $fromLang = 'en', string $toLang = 'yo'): ?string
    {
        $baseUrl = config('translator.api_base');
        $url = "{$baseUrl}/{$fromLang}/{$toLang}";

        $response = Http::post($url, [
            'text' => $text
        ]);

        if ($response->successful()) {
            return $response->json()['translated'] ?? null;
        }

        return null;
    }
}