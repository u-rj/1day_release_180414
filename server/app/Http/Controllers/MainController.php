<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index() {
      return view('index', []);
    }

    //
    public function newsList($id = 1) {
      if ($id == 0) {
        return redirect('/news');
      }
      $list = $this->getNewsList($id - 1, 2);
      return view('newsList', ['list' => $list]);
    }

    //
    public function newsDetail($id) {
      $item = $this->getNewsDetail($id);

      if (!$item) {
        return redirect('/news');
      }

      return view('newsDetail', ['item' => $item]);
    }
}
