@extends('layouts.main')
@section('content')
<div>
    <div class="condition_land">
        <div class="condition_text_land">
            <p>Условия аренды для физических лиц</p>
        </div>
        <img src="{{url('/images/cond.png')}}" alt="">
    </div>

    <h1>Необходимые документы</h1>
    <div class="docs_container mb-3">
        <div class="docs_1">
            <h2 class="mb-5">Гражданам рф</h2>
            <div class="docs">
                <div class="card">
                    <img src="{{url('/images/pass.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Гражданский паспорт</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{url('/images/driv.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Водительское удостоверение</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="docs_1">
            <h2 class="mb-5">Иностранным гражданам</h2>
            <div class="docs">
                <div class="card">
                    <img src="{{url('/images/pass2.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Паспорт</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{url('/images/viza.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Миграционная карта/виза или въездная виза</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1>Минимальные условия аренды</h1>
    <div class="min_cond">
        <div class="card min_img">
            <img src="{{url('/images/min1.png')}}" class="card-img-top" alt="...">
            <div class="card-body min">
                <p class="card-text">Возраст от 20 лет</p>
            </div>
        </div>
        <div class="card min_img">
            <img src="{{url('/images/min2.png')}}" class="card-img-top" alt="...">
            <div class="card-body min">
                <p class="card-text ">Стаж вождения от 1 года</p>
            </div>
        </div>
        <div class="card min_img">
            <img src="{{url('/images/min3.png')}}" class="card-img-top" alt="...">
            <div class="card-body min">
                <p class="card-text">Мин. оплата при бронировании авто</p>
            </div>
        </div>
    </div>

    <h1>Часто задаваемые вопросы</h1>

    <div class="ans">
        <div class="ans1">
            <div class="antext1 mb-3">
                <h3>Условия страхования автомобилей</h3>
                <p>Страховка КАСКО на случай ДТП или кражи автомобиля - включена в стоимость.Данная страховка снижает
                    ответственность Арендатора при повреждениях или краже автомобиля до уровня депозита (залога). Данное
                    правило распространяется на всех лиц, допущенных к управлению автомобилем в рамках договора аренды.В
                    случае ДТП, виновником которого не является клиент, ответственность равна 0 рублей.Есть опция "100%
                    защита" при которой ответственность равная 0 рублей в любых ситуациях.</p>
            </div>
            <div class="antext1 mb-3">
                <h3>Есть ли ограничения по скорости передвижения на автомобиле?</h3>
                <p>Мы переживаем за вашу безопасность и безопасность нашего автомобиля, в связи с этим, у нас есть
                    рекомендованные ограничения по скорости.
                    Уверяем, эти ограничения достаточны, чтобы понять динамику разгона автомобиля, перемещаясь быстро и
                    безопасно</p>
            </div>
        </div>
        <div class="ans1">
            <div class="antext1 mb-3">
                <h3>Есть ли лимиты по пробегу?</h3>
                <p>Лимиты действительно есть, но это лишь следствие трепетного отношения к техническому состоянию каждого автомобиля нашего парка. И они различны, взависимости от класса автомобиля.
В первую очередь, мы заботимся о ваших эмоциях и ощущениях от каждой поездки. Мы уверены, что эти ограничения будут неизбежно компенсированы позитивными впечатлениями.</p>
            </div>
            <div class="antext1 mb-3">
                <h3>Можно ли вернуть автомобиль досрочно?</h3>
                <p>Конечно можно. В этом случае, мы произведем перерасчет стоимости аренды исходя из фактических дней аренды.</p>
            </div>
        </div>
    </div>


</div>
@endsection