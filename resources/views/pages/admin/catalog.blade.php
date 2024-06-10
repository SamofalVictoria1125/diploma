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
<body style="padding-left: 20px">

{{--@include('messages')--}}

<form action="/catalog/submit" method="post" style="padding-top: 50px" enctype="multipart/form-data">
    @csrf
    <div class="form-group">

        <div class="col-2">
            <label for="name" class="form-label">Наименование товара</label>
            <input class="form-control" type="text" id="name" name="name">
        </div>
        <div class="col-2">
            <label for="firm" class="form-label">Фирма</label>
            <input class="form-control" type="text" id="firm" name="firm">
        </div>
        <div class="col-4">
            <label for="info" class="form-label">Описание</label>
            <textarea class="form-control" type="text" id="info" name="info"></textarea>
        </div>

{{--        <div style="width: 500px;padding-top: 20px" class="input-group">--}}
{{--           <span class="input-group-btn">--}}
{{--             <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">--}}
{{--               <i class="fa fa-picture-o"></i> Choose--}}
{{--             </a>--}}
{{--             </span>--}}
{{--            <input id="thumbnail" class="form-control" type="text" name="filepath">--}}
{{--        </div>--}}
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>


        <div class="col-2">
            <div style="padding-top: 20px">
                <button type="submit" class="btn btn-primary">Добавить</button>
                <a href="" type="button" class="btn btn-secondary">Получить</a>
            </div>
        </div>
    </div>

</form>
</div>
<script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>$('#lfm').filemanager('image');</script>
</body>
</html>


