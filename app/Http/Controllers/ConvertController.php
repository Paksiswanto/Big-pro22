<?php

namespace App\Http\Controllers;

use App\Models\CurrencyConvert;
// use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConvertController extends Controller
{
    public function coba()
    {
        $baseCurrency = 'USD';
        $targetCurrency = 'IDR';
        $amount = 100;
        $amount1 = 10;

        // $apiKey = env('EXCHANGERATESAPI_KEY');
        // $url = "https://api.exchangeratesapi.io/convert?access_key=$apiKey&from=$baseCurrency&to=$targetCurrency&amount=$amount";

        // $response = Http::get($url);
        // $data = $response->json();

        // $result = $data['result'];

        return view('transactions.coba', compact('amount', 'baseCurrency', 'targetCurrency', 'amount1'));
        // $amount = request()->input('amount');
        // $baseCurrency = request()->input('baseCurrency');
        // $result = request()->input('result');
        // $targetCurrency = request()->input('targetCurrency');

        // return view('transactions.coba', compact('amount', 'baseCurrency', 'result', 'targetCurrency'));
    }


    // protected $client;

    // public function __construct()
    // {
    //     $this->client = new Client([
    //         'base_uri' => 'https://v6.exchangeratesapi.io',
    //     ]);
    // }

    // public function convertCurrency()
    // {
    //     $baseCurrency = 'USD';
    //     $targetCurrency = 'IDR';
    //     $amount = 100;

    //     $apiKey = env('EXCHANGERATESAPI_KEY');
    //     $url = "https://api.exchangeratesapi.io/convert?access_key=$apiKey&from=$baseCurrency&to=$targetCurrency&amount=$amount";

    //     $response = Http::get($url);
    //     $data = $response->json();

    //     $result = $data['result'];

    //     return redirect()->route('currency')->with(compact('amount', 'baseCurrency', 'result', 'targetCurrency'));
    // }

    // public function index()
    // {
    //     return view('currency_converter');
    // }


    // public function convert(Request $request)
    // {
    //     $amount = $request->input('amount');
    //     $from = $request->input('from');
    //     $to = $request->input('to');

    //     $response = $this->client->request('GET', "/latest?base=$from&symbols=$to");
    //     $data = json_decode($response->getBody(), true);

    //     $conversion = $amount * $data['rates'][$to];

    //     return response()->json([
    //         'amount' => $conversion,
    //         'from' => $from,
    //         'to' => $to,
    //     ]);
}

    // public function convertCurrency(Request $request)
    // {
    //     $apiKey = 'd5c5dbe6332c789e325d98f3afd643df'; // Ganti dengan kunci API Anda dari currencylayer
    //     $amount = $request->input('amount');
    //     $fromCurrency = $request->input('from_currency');
    //     $toCurrency = $request->input('to_currency');
    
    //     $client = new Client();
    //     $response = $client->get("http://apilayer.net/api/live?access_key={$apiKey}&currencies=USD,IDR&source=USD&format=1");
    
    //     $responseData = json_decode($response->getBody());
    
    //     if (isset($responseData->quotes)) {
    //         $exchangeRates = $responseData->quotes;
    //         $usdToFromCurrency = $exchangeRates->{"USD{$fromCurrency}"};
    //         $usdToToCurrency = $exchangeRates->{"IDR{$toCurrency}"};
    
    //         if ($usdToFromCurrency && $usdToToCurrency) {
    //             if ($fromCurrency === 'USD') {
    //                 $convertedAmount = $amount * $usdToToCurrency;
    //             } elseif ($toCurrency === 'IDR') {
    //                 $convertedAmount = $amount / $usdToFromCurrency;
    //             } else {
    //                 $convertedAmount = ($amount / $usdToFromCurrency) * $usdToToCurrency;
    //             }
    
    //             return back()->with('success', [
    //                 'original_amount' => $amount,
    //                 'converted_amount' => $convertedAmount,
    //                 'exchange_rate' => $usdToToCurrency / $usdToFromCurrency,
    //                 'from_currency' => $fromCurrency,
    //                 'to_currency' => $toCurrency,
    //             ]);
    //         }
    //     }
    
    //     $errorMessage = 'Failed to retrieve exchange rate. Please try again later.';
    //     return back()->with('error', $errorMessage);
    // }   
