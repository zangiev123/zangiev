@extends('welcome')

@section('title')Категории товаров@endsection

@section('header')
  <div class="box_name">КАТЕГОРИИ ТОВАРОВ</div>
        <div class="block">
        <a class="block_name" href="/public/catalog/games">
        <div class="block_text_catalog">ИГРЫ</div>
            <div class="block_img">
            <img src="https://sun9-37.userapi.com/impg/K_Vxc78px1Wm_ACg9_OhtQxHmdAu3uHOPwCK2g/Z-16lz0ONls.jpg?size=400x500&quality=96&sign=17facf6610bcc95e97d82d07519bbec3&type=album" alt="">
            </div>
        </a>

        <a class="block_name" href="/public/catalog/console">
        <div class="block_text_catalog">ПРИСТАВКИ</div>
            <div class="block_img">
                <img src="https://sun9-52.userapi.com/impg/EBZASOwY9e0OyOkLso8PCrsEsunvjBLUwi2f-A/JYXNBkjHs4I.jpg?size=400x500&quality=96&sign=9305ae77fac7f2eaeeb3d33e12cac457&type=album" alt="">
            </div>


        <a class="block_name" href="/public/catalog/acces">
        <div class="block_text_catalog">АКСЕССУАРЫ</div>
            <div class="block_img">
                <img src="https://sun9-4.userapi.com/impg/4T8JN95QNrSe5d7kzwRr7Jkz03SSoT1_U7wODA/06NtdrYnUjo.jpg?size=400x500&quality=96&sign=45a65bc8cde8913bc0d695af6a513740&type=album" alt="">
            </div>
        </a>

        </div>
    </div>
@endsection
