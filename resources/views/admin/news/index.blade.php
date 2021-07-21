@extends('layout.main')

@section('title')
    @parent - Админка
@endsection

@section('content')
    <h1>Админка</h1>
    <h2><?=$variable[0]->newsTitle?></h2>
    <p><?=$variable[0]->created_at?></p>
    <p><?=$variable[0]->news_content?></p>

    <a href="/">На главную</a>
    <a href="/admin">На страницу управления</a>
@endsection
