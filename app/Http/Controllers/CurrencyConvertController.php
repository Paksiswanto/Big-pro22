<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CurrencyConvertController extends Controller
{
    public function convertCurrency(Request $request)
{
    $apiKey = 'd5c5dbe6332c789e325d98f3afd643df'; // Ganti dengan kunci API Anda dari currencylayer
    $amount = $request->input('amount');

    $client = new Client();
    $response = $client->get("http://apilayer.net/api/live?access_key={$apiKey}&currencies=USD&source=USD&format=1");

    $exchangeRate = json_decode($response->getBody(), true)['quotes']['USDIDR'];
    $convertedAmount = $amount / $exchangeRate;

    return response()->json([
        'original_amount' => $amount,
        'converted_amount' => $convertedAmount,
        'exchange_rate' => $exchangeRate,
    ]);
}

}
