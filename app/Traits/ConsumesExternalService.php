<?php
namespace App\Traits;

use GuzzleHttp\Client;

trait ConsumesExternalService
{

    public function performRequest($method, $requestUrl, $formParams = [], $headers = [])
    {
        try {
            $client = new Client(['base_uri' => $this->baseUri]);
    
            if (isset($headers['Authorization'])) {
                $headers['Authorization'] = 'Bearer ' . $headers['Authorization'];
            }
    
            $response = $client->request($method, $requestUrl, [
                'json' => $formParams,
                'headers' => $headers,
            ]);
    
            return json_decode($response->getBody()->getContents(), true);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            return response()->json([
                'error' => 'Request failed',
                'message' => $e->getMessage()
            ], 500);
        }
    }
    
}
