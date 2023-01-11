<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $initialMarkers = [
            [
                'position' => [
                    'lat' => 34.7324,
                    'lng' => 36.7137,
                    'title'=>'Homs',
                    'website'=>'homs-city'
                ],
                'draggable' => true
            ],
            [
                'position' => [
                    'lat' => 33.5138 ,
                    'lng' => 36.2765,
                    'title'=>'Damas',
                    'website'=>'damascus-city'

                ],
                'draggable' => false
            ],
            [
                'position' => [
                    'lat' => 34.8959,
                    'lng' => 35.8867,
                    'title'=>'Tartus',
                    'website'=>'tartus-city'

                ],
                'draggable' => true
            ]
        ];
        return view('welcome', compact('initialMarkers'));
    }
    public function layer(){
        return view('layer');
    }
    public function map(){
        return view('map');
    }
}
