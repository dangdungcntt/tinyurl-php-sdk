<?php

namespace Nddcoder\TinyURL;

class TinyURL
{
    public static function create(string $url): ?string
    {
        $shortedUrl = static::get("https://tinyurl.com/api-create.php?url={$url}");
        return $shortedUrl == 'Error' ? null : $shortedUrl;
    }

    public static function preview(string $url): ?string
    {
        $previewUrl = str_replace('https://tinyurl.com', 'https://preview.tinyurl.com', $url);

        $html = static::get($previewUrl);

        preg_match('/<a id="redirecturl" href="(.*)">Proceed to this site/i', $html, $matches);
        return $matches[1] ?? null;
    }

    protected static function get($url): string
    {
        $curl = curl_init();

        $options = [
            CURLOPT_URL            => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_FOLLOWLOCATION => false,
        ];

        curl_setopt_array($curl, $options);

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }
}
