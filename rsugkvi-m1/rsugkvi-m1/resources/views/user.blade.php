@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    @foreach($prod as $e)
    <div class="block">
        {{$e->name}}
        {{$e->surname}}
        <img class="photo"src="{{$e->img}}"/>
    </div>
    @endforeach
    @endsection
    <style>
    .block{
        display:flex;
        flex:flex-wrapp;
        text-align:center;
    }
    .photo{
        height:200px;
        width:210px;
    }

    </style>
</body>
</html>