<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compalible" content="IE=edge">
    <link href="https://fonts.googleapis.com/icon?family=Inter" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/source_img/Дипломка/meow/img/TK.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/fontello.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <title>Show</title>
    <link rel="stylesheet" href="{{asset('/source_img/Дипломка/meow/styles.css')}}">
</head>
<body>
<div class="container">
    <div class="row justify-content-start">
        <div class="col-auto">
{{ Form::open(['method' => 'PUT']) }}
<div class="form-group">
    <div class="">
        <label for="name" class="form-label">Наименование</label>
        <input value="{{ $category->name }}" class="form-control" type="text" id="name" name="name">
    </div>
    <div class="">
        <label for="label" class="form-label">Комментарий</label>
        <input value="{{ $category->label }}" class="form-control" type="text" id="label" name="label">
    </div>
    <div style="padding-top: 10px;padding-bottom: 20px" class="">
        <button class="btn btn-primary" type="submit">Изменить</button>
    </div>
</div>
{{ Form::close() }}
        </div>
        <div class="col-auto">
<form action="/admin/categories/{{ $category->id }}/product" method="post" style="" enctype="multipart/form-data">
    @csrf
    <div class="form-group">

        <div class="col">
            <label for="name" class="form-label">Наименование товара</label>
            <input class="form-control" type="text" id="name" name="name">
        </div>
        <div class="col">
            <label for="price" class="form-label">Цена</label>
            <input class="form-control" type="text" id="price" name="price">
        </div>
        <div class="col">
            <label for="firm_id" class="form-label">Фирма</label>
            <select class="form-control" type="text" id="firm_id" name="firm_id">
                @foreach($firms as $firm)
                    <option value="{{ $firm->id }}">{{ $firm->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <label for="info" class="form-label">Описание</label>
            <textarea class="form-control" type="text" id="info" name="info"></textarea>
        </div>

{{--                <div style="width: 500px;padding-top: 20px" class="input-group">--}}
{{--                   <span class="input-group-btn">--}}
{{--                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">--}}
{{--                       <i class="fa fa-picture-o"></i> Choose--}}
{{--                     </a>--}}
{{--                     </span>--}}
{{--                    <input id="thumbnail" class="form-control" type="text" name="filepath">--}}
{{--                </div>--}}
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>


        <div class="col">
            <div style="padding-top: 20px">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </div>
    </div>
</form>
        </div>
</div>
</div>
@foreach($category->products as $product)
    <div class="card">
        <div class="card-body">
            {{ $product->name }}
            {{ $product->info }}
            {{ $product->firm->name }}
            <div style="padding-top: 20px">
                <button class="btn btn-primary" type="submit">Редактировать</button>
                <button class="btn btn-secondary">Удалить</button>
            </div>
        </div>
    </div>
@endforeach

<script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>$('#lfm').filemanager('image');</script>
</body>
</html>
