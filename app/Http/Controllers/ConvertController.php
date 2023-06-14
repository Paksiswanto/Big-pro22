<?php

namespace App\Http\Controllers;

use App\Models\CurrencyConvert;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ConvertController extends Controller
{
    public function coba()
    {
        $result = CurrencyConvert::all();
        return  view('transactions.coba', compact('result'));
    }

    public function convertCurrency(Request $request)
    {
        $apiKey = 'YOUR_API_KEY'; // Ganti dengan kunci API Anda dari currencylayer
        $amount = $request->input('amount');
        $fromCurrency = $request->input('from_currency');
        $toCurrency = $request->input('to_currency');
    
        $client = new Client();
        $response = $client->get("http://apilayer.net/api/live?access_key={$apiKey}&currencies=USD,IDR&source=USD&format=1");
    
        $responseData = json_decode($response->getBody());
    
        if (isset($responseData->quotes)) {
            $exchangeRates = $responseData->quotes;
            $fromRate = $exchangeRates->{"USD{$fromCurrency}"};
            $toRate = $exchangeRates->{"USD{$toCurrency}"};
    
            if ($fromRate && $toRate) {
                if ($fromCurrency === 'USD') {
                    $convertedAmount = $amount * $toRate;
                } elseif ($toCurrency === 'USD') {
                    $convertedAmount = $amount / $fromRate;
                } else {
                    $convertedAmount = ($amount / $fromRate) * $toRate;
                }
    
                return back()->with('success', [
                    'original_amount' => $amount,
                    'converted_amount' => $convertedAmount,
                    'exchange_rate' => $toRate / $fromRate,
                    'from_currency' => $fromCurrency,
                    'to_currency' => $toCurrency,
                ]);
            }
        }
    
        $errorMessage = 'Failed to retrieve exchange rate. Please try again later.';
        return back()->with('error', $errorMessage);
    }
    
}
