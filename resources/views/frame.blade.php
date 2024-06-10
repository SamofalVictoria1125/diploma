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
    <Title>@yield('title')</Title>
    <link rel="stylesheet" href="{{asset('/source_img/Дипломка/meow/styles.css')}}">
</head>

<body style="font-family: 'Inter'">

<img style="padding-bottom: 20px;" src="source_img\Дипломка\meow\img\заставка.png"
     class="img-fluid" alt="Ошибка">

<div style="margin-right: 20px; margin-left: 20px;">


    <nav class="container-fluid">
        <div class="row justify-content-end">
            <div class="col-auto col-md-1">
                <a aria-current="page" role="button" href="D:\laravel\source\prop\pages\Act.html" class="btn"
                   style="color: gray;padding: 0px;">
                    Акции
                </a>
            </div>
            <div class="col-auto col-md-1">
                <a role="button" href="{{ route('shops') }}" class="btn"
                   style="color: gray;padding: 0px;">
                    Магазины
                </a>
            </div>
            <div class="col-auto col-md-1">
                <a class="nav-link dropdown-toggle" style="color: gray" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Покупателям
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Обмен, возврат, гарантия</a></li>
                    <li><a class="dropdown-item" href="#">Бонусная карта</a></li>
                    <li><a class="dropdown-item" href="#">Команда ТЕХНОТЕК</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Сервисный центр</a></li>
                </ul>
                </li>
            </div>
            <div class="col-auto col-md-3">
                <a role="button" href="D:\laravel\source\prop\pages\Act.html" class="btn"
                   style="color: gray;padding: 0px; margin-left: 30px;">
                    Юридическим лицам
                </a>
            </div>
            <div class="col-auto" style="color: red;">
                8-800-990-45-64
            </div>
        </div>
    </nav>


    <div class="row justify-content-between" style="padding-top: 40px; margin-left: 20px;">
        <div class="col-2">

            <button class="btn btn-lg dropdown-toggle" href="#" id="navbarDropdown"
                    style="background-color: #5F3683; color: white;" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                Каталог товаров
            </button>
            <div class="dropdown-menu w-100 mt-0" aria-labelledby="navbarDropdown" style="
                      border-top-left-radius: 0;
                      border-top-right-radius: 0;
                    ">
                <div class="container">
                    <div class="row my-4">
                        <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                            <div class="list-group list-group-flush">
                                <p class="mb-0 list-group-item text-uppercase font-weight-bold">
                                    Бытовая техника
                                </p>
                                <a href="" class="list-group-item list-group-item-action">Встраиваемая техника</a>
                                <a href="" class="list-group-item list-group-item-action">Техника для кухни</a>
                                <a href="" class="list-group-item list-group-item-action">Техника для дома</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                            <div class="list-group list-group-flush">
                                <p class="mb-0 list-group-item text-uppercase font-weight-bold">
                                    Красота и здоровье
                                </p>
                                <a href="" class="list-group-item list-group-item-action">Укладка и сушка волос</a>
                                <a href="" class="list-group-item list-group-item-action">Уход за полостью рта</a>
                                <a href="" class="list-group-item list-group-item-action">Уход за телом</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                            <div class="list-group list-group-flush">
                                <p class="mb-0 list-group-item text-uppercase font-weight-bold">
                                    Смартфоны и фототехника
                                </p>
                                <a href="" class="list-group-item list-group-item-action">Смартфоны</a>
                                <a href="" class="list-group-item list-group-item-action">Планшеты</a>
                                <a href="" class="list-group-item list-group-item-action">Фотоаппараты</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="list-group list-group-flush">
                                <a href="" class="mb-0 list-group-item text-uppercase font-weight-bold">
                                    ВЕСЬ КАТАЛОГ →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-8">
            <input class="form-control col-4" style="height: 60px;" type="search" placeholder="Поиск"
                   aria-label="Search">
        </div>
        <div class="col-auto">
            <a href="" class="btn  col-4 material-icons"
               style="font-size: 30px;" role="button">favorite_border</a>
        </div>
        <div class="col-auto"><a href="C:\Users\tetra\OneDrive\Рабочий стол\prop\korz.html"
                                 class="btn  col-4 material-icons" style="font-size: 30px;" role="button">add_shopping_cart</a>
        </div>
        <div data-bs-target="#exampleModal" data-bs-toggle="modal" class="col-auto">
            <a href="{{ route(auth()->user() ? 'account' : 'login') }}"
               class="btn col-sm col-2 material-icons "
               style="font-size: 30px;"
               role="button">account_circle</a>
        </div>
    </div>
</div>
</div>


<div class="row justify-content-between" style="padding-top: 40px; object-fit: cover;padding-bottom: 50px">
    <div id="carouselExampleControls" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel"
         data-bs-interval="5000">
        <div style="margin-top: 100px;" class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="padding-left: 25px;"
                     src="source_img\Техника\d.png" class="d-block w-100"
                     alt="Произошла ошибка">
            </div>
            <div class="carousel-item">
                <img style="padding-left: 25px;"
                     src="source_img\Техника\n.png" class="d-block w-100"
                     alt="Произошла ошибка">
            </div>
            <div class="carousel-item">
                <img style="padding-left: 25px;"
                     src="source_img\Техника\lol.png"
                     class="d-block w-100" alt="Произошла ошибка">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
@yield('content')
</html>
