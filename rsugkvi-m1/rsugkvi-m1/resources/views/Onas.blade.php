@extends('welcome')

@section('title')О нас@endsection

@section('header')

<div class="border">
        <div class="wrapper">
        <input type="radio" name="point" id="slide1" checked>
        <input type="radio" name="point" id="slide2">
        <input type="radio" name="point" id="slide3">
        <input type="radio" name="point" id="slide4">
        <input type="radio" name="point" id="slide5">
        <div class="slider">
            <div class="slides slide1"></div>
            <div class="slides slide2"></div>
            <div class="slides slide3"></div>
            <div class="slides slide4"></div>
            <div class="slides slide5"></div>
        </div>
        <div class="controls">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
            <label for="slide4"></label>
            <label for="slide5"></label>
        </div>
    </div>
    <div class="text_border_2">
        <h2 class="text">Сеть магазинов True games предлагает покупателям игровые консоли, игры и аксессуары</h2>
        </div>


    </div>
</div>
@endsection
