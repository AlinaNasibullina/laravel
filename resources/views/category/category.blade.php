

@extends('layout.main')

@section('title')
  @parent - {{ $categoryName }}
@endsection

@section('content')
    <h1>Список новостей {{ $categoryName }}</h1>
    <ul>
    @foreach ($categoryNews as $variable)
     
    <li>
      <a href="news/{{ $variable->id }}">{{ $variable->newsTitle }}</a>
      Дата публикации {{$variable->created_at}}
    </li>
    
    @endforeach
    </ul>
@endsection
