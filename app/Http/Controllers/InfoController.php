<?php

namespace App\Http\Controllers;

use App\Charts\PositifChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InfoController extends Controller
{
    public function info()
    {
    	$indo = Http::get('https://api.kawalcorona.com/indonesia');
    	$dataindo = $indo->json();
        $provinsi = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());
        $data_provinsi = $provinsi->flatten(1);

        $labels = $data_provinsi
        /*->where('Kode_Provi', 31)
        ->orWhere('Kode_Provi', 32)
        ->orWhere('Kode_Provi', 35)
        ->orWhere('Kode_Provi', 33)
        ->orWhere('Kode_Provi', 63)
        ->orWhere('Kode_Provi', 34)
        ->orWhere('Kode_Provi', 73)*/
        ->pluck('Provinsi');
        $data = $data_provinsi->pluck('Kasus_Posi');
        $colors = $labels->map(function($item){
            return '#' . substr(md5(mt_rand()), 0, 6);
        });
        
        $chart = new PositifChart;
        $chart->labels($labels);
        $chart->options([
            'tooltip' => [
            'show' => true // or false, depending on what you want.
            ]
        ]);
        $chart->dataset('Terdampak Positif', 'line', $data)->options([
            'borderColor' => '#007bff',
            'lineTension' => 0,
            'borderWidth' => 4,
            'pointBackgroundColor' => '$colors'
        ]);
    	return view('infoCovid', compact('dataindo'), [
            'chart' => $chart,
        ]);

    }

     public function infoAdmin()
    {
    	$response = Http::get('https://api.kawalcorona.com/indonesia');
    	$data = $response->json();
    	return view('dashboardAdmin', compact('data'));
    }
}
