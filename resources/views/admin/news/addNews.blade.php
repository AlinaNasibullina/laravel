@extends('layout.main')

@section('title')
    @parent - Админка
@endsection

@section('content')

    <h3>Новость добавлена</h3>
    <h4>{{$variable['newsTitle']}} - {{$variable['newsCategory']}}</h4>
    <p>{{$variable['newsContent']}}</p>
@endsection