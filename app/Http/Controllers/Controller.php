<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $newsList = [
        1 => [
            'title' => 'Новость №1',
            'id' => 1,
            'description' => 'Описание новости 1'
        ],
        2 => [
            'title' => 'Новость №2',
            'id' => 2,
            'description' => 'Описание новости 2'
        ],
        3 => [
            'title' => 'Новость №3',
            'id' => 3,
            'description' => 'Описание новости 3'
        ],
    ];

}
