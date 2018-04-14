<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function getNewsList($offset, $limit) {
    $news = [
      [
        'id' => 1,
        'title' => 'title1',
        'description' => 'description1',
        'date' => '2018-01-01 00:00:00'
      ],
      [
        'id' => 2,
        'title' => 'title2',
        'description' => 'description2',
        'date' => '2018-01-01 00:00:00'
      ],
      [
        'id' => 3,
        'title' => 'title3',
        'description' => 'description3',
        'date' => '2018-01-01 00:00:00'
      ]
    ];

    $list = [];
    for($i = $offset * $limit; $i < $offset * $limit + $limit; $i++) {
      if (!array_key_exists($i, $news)) {
        break;
      }
      array_push($list, $news[$i]);
    }

    return [
      'total' => count($news),
      'offset' => $offset,
      'maxOffset' => floor(count($news) / $limit),
      'limit' => $limit,
      'list' => $list
    ];
  }

  public function getNewsDetail($id) {
    $news = [
      '1' => [
        'id' => 1,
        'title' => 'title1',
        'description' => 'description1',
        'date' => '2018-01-01 00:00:00'
      ],
      '2' => [
        'id' => 2,
        'title' => 'title2',
        'description' => 'description2',
        'date' => '2018-01-01 00:00:00'
      ],
      '3' => [
        'id' => 3,
        'title' => 'title3',
        'description' => 'description3',
        'date' => '2018-01-01 00:00:00'
      ],
    ];

    if (!array_key_exists($id, $news)) {
      return null;
    }

    return $news[$id];
  }
}
