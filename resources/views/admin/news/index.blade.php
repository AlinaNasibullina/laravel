@extends('layout.main')

@section('title')
    @parent - Админка
@endsection

@section('content')
    <h1>Админка</h1>
    <h2><?=$variable['title']?></h2>
    <h3><?=$variable['category']?></h3>
    <p><?=$variable['description']?></p>

    <a href="/">На главную</a>
    <a href="/admin">На страницу управления</a>
@endsection
