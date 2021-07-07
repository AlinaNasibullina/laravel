@extends('layout.main')

@section('title')
  @parent - {{ $categoryName }}
@endsection


@section('content')

    <h1>Список новостей {{ $categoryName }}</h1>
    <ul>
    @forelse ($categoryNews as $new)
    <li><a href="news/{{ $new->id }}">{{ $new->title }}</a></li>
    @empty
    <h1>Новостей нет</h1>
    @endforelse
    </ul>
@endsection
