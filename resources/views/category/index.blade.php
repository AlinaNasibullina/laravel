@extends('layout.main')

@section('title')
  @parent - Category
@endsection


@section('content')
    
    <h1>Список категорий</h1>
    <ul>
    @foreach ($categoryList as $category)
    <li><a href="category/{{ $category }}">{{ $category }}</a></li>
    @endforeach
    </ul>
@endsection

