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
    <title>Shop</title>
    <link rel="stylesheet" href="{{asset('/source_img/Дипломка/meow/styles.css')}}">
</head>
<body>
<form action="/admin/shop/store/" method="POST">
    @csrf
<div class="container" >
    <div class="row">
        <h1 style="margin-top: 30px;margin-bottom: 30px">Панель управления</h1>
        <div class="col">
        <label for="name" class="form-label">Наименование</label>
        <input class="form-control" type="text" id="name" name="name">
        </div>
        <div class="col">
            <label for="address" class="form-label">Адрес</label>
            <input class="form-control" type="text" id="address" name="address">
        </div>
        <div class="col">
            <label for="info" class="form-label">Дополнительная информация</label>
            <input class="form-control" type="text" id="info" name="info">
        </div>
        <div style="padding-top: 20px">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
        <h1 style="margin-top: 30px;margin-bottom: 30px">Список магазинов</h1>
    </div>
</div>
</form>





<script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>$('#lfm').filemanager('image');</script>
</body>
</html>
