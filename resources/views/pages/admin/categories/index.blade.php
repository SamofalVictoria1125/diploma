<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8">
    <meta http-equiv="X-UA-Compalible" content="IE=edge">
    <link href="https://fonts.googleapis.com/icon?family=Inter" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/TK.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/fontello.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <Title>Технотек</Title>
    <link rel="stylesheet" href="{{asset('/source_img/Дипломка/meow/styles.css')}}"></head>
<body style="padding-left: 20px;">
<div class="container">
    <div class="row">
        <h1 style="text-align: center;padding-bottom: 40px">Панель управления</h1>
<form action="/admin/categories/" method="POST">
    @csrf
<div class="form-group">
<div class="col-2">
    <label for="name" class="form-label">Наименование</label>
    <input class="form-control" type="text" id="name" name="name">
</div>
<div class="col-2">
    <label for="label" class="form-label">Комментарий</label>
    <input class="form-control" type="text" id="label" name="label">
</div>
    <div style="padding-top: 10px;padding-bottom: 20px" class="col-2">
        <button class="btn btn-primary" type="submit">Добавить</button>
    </div>
</div>
</form>

@if ($message = \Illuminate\Support\Facades\Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif

    @foreach ($categories as $category)
        <div class="card" style="width: 40rem; margin-bottom: 20px; margin-top: 20px">
        <div class="card-body">
        <h3>{{ $category->id }} {{ $category->name}}</h3>
        <h4>{{ $category->label}}</h4>
            <div>
{{--                <a href="{{ route('category-show') }}" class="btn btn-primary">Редактировать</a>--}}
                <a href="{{ route('category-delete', $category->id) }}" class="btn btn-secondary">Удалить</a>
            </div>
        </div>
        </div>
    @endforeach
    </div>
</div>
<script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>$('#lfm').filemanager('image');</script>
</body>


