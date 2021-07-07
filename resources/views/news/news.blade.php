@extends('main')

@section('title')
    @parent
@endsection

@section('content')
    <h1><?=$new['title']?></h1>
    <h3><?=$new['category']?></h3>
    <p><?=$new['description']?></p>

    <a href="/">На главную</a>
@endsection
