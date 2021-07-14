@extends('layout.main')

@section('title')
  @parent - Category - Админка
@endsection


@section('content')
    <h1>Админка</h1>
    <h2>страница редактирования всего и вся</h2>

    <a href="/admin/categories">Здесь все новости по категориям</a>

    <form action="{{route('admin.news.store')}}" method="post">
      @csrf
      <div class="form-group">
        <label for="newsTitle">Заголовок новости</label>
        <input type="text" class="form-control" id="newsTitle" name="newsTitle" aria-describedby="emailHelp" placeholder="Заголовок новости"> 
      </div>
      <div class="form-group">
        <label for="newsCategory">Категория</label>
        <select class="form-control" id="newsCategory" name="newsCategory">
          <option>sport</option>
          <option>art</option>
          <option>fasion</option>
          <option>traveling</option>
          <option>digital</option>
        </select>
      </div>
      <div class="form-group">
        <label for="newsContent">Тескт новости</label>
        <input type="textarea" class="form-control" id="newsContent" name="newsContent" aria-describedby="emailHelp" placeholder="Текст новости"> 
      </div>
      <button type="submit" class="btn btn-primary">Добавить новость</button>
    </form>
    
    <!-- добавить форму -->
@endsection

