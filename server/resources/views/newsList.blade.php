@extends('common.index')
@include('common.header')

@section('title', 'インデックス')

@section('content')
  @foreach ($list['list'] as $item)
    <a href="/news/detail/{{$item['id']}}"><p>{{$item['title']}}</p></a>
    <p>{{$item['date']}}</p>
    <p>{{$item['description']}}</p>
  @endforeach

  <hr>
  <p>
  @if ($list['offset'] != 0)
      <a href="/news/{{$list['offset'] - 1}}"><</a>
  @endif
  @for ($i = 0; $i <= $list['maxOffset']; $i++)
    @if ($i == $list['offset'])
      {{$i + 1}}
    @else
      <a href="/news/{{$i + 1}}">{{$i + 1}}</a>
    @endif
  @endfor
  @if ($list['offset'] != $list['maxOffset'])
      <a href="/news/{{$list['offset'] + 2}}">></a>
  @endif
  </p>
@endsection
