@extends('layout.main')

@section('title')
  @parent - Category - Админка
@endsection


@section('content')
    <h1>Админка</h1>
    <h2>Список категорий</h2>
    <ul>
    @foreach ($categoryList as $category)
    <li><a href="categories/{{ $category->category_name }}">{{ $category->category_name }}</a></li>
    @endforeach
    </ul>
@endsection

