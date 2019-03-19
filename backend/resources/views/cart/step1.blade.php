@extends('layouts.app')

@section('content')
    <div class="main-content">
    <div class="content-top">
        <div class="content-top__text">Купить игры неборого без регистрации смс с торента, получить компкт диск, скачать Steam игры после оплаты</div>
        <div class="slider"><img src="/img/slider.png" alt="Image" class="image-main"></div>
    </div>
    <div class="content-middle">
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Мои заказы</div>
            </div>
            <div class="content-head__search-block">
                <div class="search-container">
                    <form class="search-container__form">
                        <input type="text" class="search-container__form__input">
                        <button class="search-container__form__btn">search</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="content-main__container">
            <div class="cart-product-list">
                @foreach ($cart as $cartItem)
                <div class="cart-product-list__item">
                    <div class="cart-product__item__product-photo">
                        <img src="{{$cartItem->game->getImage()}}" class="cart-product__item__product-photo__image"></div>
                    <div class="cart-product__item__product-name">
                        <div class="cart-product__item__product-name__content">
                            <a href="#">
                                {{$cartItem->game->title}}
                            </a></div>
                    </div>
                    <div class="cart-product__item__cart-date">
                        <div class="cart-product__item__cart-date__content">{{$cartItem->created_at}}</div>
                    </div>
                    <div class="cart-product__item__product-price"><span class="product-price__value">{{$cartItem->game->price}} рублей</span></div>
                </div>
                @endforeach
            </div>

            <div>
                <a href="{{route('cart.step2')}}">Оформить</a>
            </div>
        </div>
        <div class="content-footer__container">
            <ul class="page-nav">
                <li class="page-nav__item"><a href="#" class="page-nav__item__link"><i class="fa fa-angle-double-left"></i></a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link">1</a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link">2</a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link">3</a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link">4</a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link">5</a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="content-bottom"></div>
</div>
@endsection