@extends('layouts.main')
@section('content')
<h1>Карта сайта</h1>

<ul class="sitemap">
    <li><a href="{{route('auto.index')}}">Автопарк
            <ul>
                <li><a href="{{route('auto.index')}}">Страница автомобиля <ul>
                            <li><a href="{{route('auto.index')}}">Оформление заявки на аренду автомобиля</a></li>
                        </ul></a></li>
            </ul>
        </a>
    </li>
    <li><a href="{{route('contact.index')}}">Контакты</a></li>
    <li><a href="{{route('condition.index')}}">Условия</a></li>
    <li><a href="{{route('condition.index')}}">Регистрация</a></li>
    <li><a href="{{route('condition.index')}}">Вход</a></li>
    <li><a href="{{route('condition.index')}}">Админ панель</a></li>
    <li><a href="{{route('condition.index')}}">Личный кабинет</a></li>
</ul>



@endsection