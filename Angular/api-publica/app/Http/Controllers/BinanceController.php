<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\BinanceData;

class BinanceController extends Controller
{
    public function index()
    {
        $client = new Client([
            'base_uri' => 'https://api.binance.com',
        ]);

        $response = $client->request('GET', '/api/v3/ticker/24hr');

        $data = json_decode($response->getBody(), true);

        foreach ($data as $item) {
            BinanceData::create([
                'symbol' => $item['symbol'],
                'price' => $item['lastPrice'],
                'volume' => $item['quoteVolume'],
            ]);
        }

        return view('binance.index', compact('data'));
    }
}
