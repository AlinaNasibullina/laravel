@extends('layout.main')

@section('title')
    @parent
@endsection

@section('content')
    <h1><?=$variable['title']?></h1>
    <h3><?=$variable['category']?></h3>
    <p><?=$variable['description']?></p>

    <a href="/">На главную</a>
@endsection
