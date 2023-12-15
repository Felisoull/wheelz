
@extends('layouts.main')
@section('content')
<div>
    <div class="contact_land">
        <div class="contact_text_land">
        <p>Контакты</p>
        </div>
        <img src="{{url('/images/contact.png')}}" alt="">
    </div>
    <div class="contact_container">
        <div class="contacts mb-4">
            <ul>
                <li class="mb-4"><img src="{{url('/images/map.png')}}" alt=""><p> Кутузовский проспект., д.2/1 c.6</p></li>
                <li class="mb-4"><img src="{{url('/images/time.png')}}" alt=""><p>Без выходных, Круглосуточно</p></li>
                <li class="mb-4"><img src="{{url('/images/phone.png')}}" alt=""><p>+7(495) 191-08-37</p></li>
                <li class="mb-4"><img src="{{url('/images/phone.png')}}" alt=""><p>+7(495) 191-08-37</p></li>

            </ul>
            <hr/>
        <div class="contact_icon">
            <p class="mb-4">Мессенджеры</p>
            <div class="icons">
                <a  href=""><img src="{{url('/images/what.png')}}" alt=""></a>
                <a  href=""><img src="{{url('/images/viber.png')}}" alt=""></a>
                <a  href=""><img src="{{url('/images/teleg.png')}}" alt=""></a>
            </div>
        </div>
        </div>
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59788281.62592949!2d-52.75210119122033!3d23.847488608570625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e109447e09b05b%3A0xdb0444a0e4782ef0!2sThe%20Wheelz!5e0!3m2!1sru!2sru!4v1701989199400!5m2!1sru!2sru" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>



</div>
@endsection
