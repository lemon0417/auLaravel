<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show() {
        return view('index', [
            'rooms' => [
                [
                    'title' => 'I SETTE CONI - TRULLO EDERA',
                    'price' => '2,143',
                    'type' => '整套房子／公寓',
                    'total' => '2'
                ], [
                    'title' => 'I SETTE CONI - TRULLO EDERA',
                    'price' => '2,143',
                    'type' => '整套房子／公寓',
                    'total' => '3'
                ], [
                    'title' => 'I SETTE CONI - TRULLO EDERA',
                    'price' => '2,143',
                    'type' => '整套房子／公寓',
                    'total' => '2'
                ], [
                    'title' => 'I SETTE CONI - TRULLO EDERA',
                    'price' => '2,143',
                    'type' => '整套房子／公寓',
                    'total' => '2'
                ], [
                    'title' => 'I SETTE CONI - TRULLO EDERA',
                    'price' => '2,143',
                    'type' => '整套房子／公寓',
                    'total' => '2'
                ]
            ]
        ]);
    }
}
