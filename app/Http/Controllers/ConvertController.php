<?php

namespace App\Http\Controllers;

use App\Models\CurrencyConvert;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConvertController extends Controller
{
    public function coba()
    {
        $client = new Client();
        $response = $client->get('http://data.fixer.io/api/latest?access_key=904e65cb25d99393a703192e0a050e8e&symbols=USD,IDR');

        $data = json_decode($response->getBody(), true);

        $exchangeRate = 0;

        if (array_key_exists('rates', $data) && array_key_exists('IDR', $data['rates'])) {
            $exchangeRate = $data['rates']['USD'] / $data['rates']['IDR'] * 100000;
        }

        return view('transactions.coba', [
            'exchangeRate' => $exchangeRate
        ]);
    }
}
