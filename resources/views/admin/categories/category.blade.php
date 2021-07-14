@extends('layout.main')

@section('title')
  @parent - {{ $categoryName }} - Админка
@endsection

@section('content')
    <h1>Админка</h1>
    <h2>Список новостей {{ $categoryName }}</h2>
    <ul>
    @forelse ($categoryNews as $variable)
    <li><a href="/admin/categories/news/{{ $variable['id'] }}">{{ $variable['title'] }}</a></li>
    @empty
    <h1>Новостей нет</h1>
    @endforelse
    </ul>

    
@endsection
