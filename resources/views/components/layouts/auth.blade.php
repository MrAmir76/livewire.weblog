<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','مدیریت سایت')</title>
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
</head>
<body>
<div>
    <aside class="col-lg-3 col-md-4 col-12 side float-end height-100">@php($user = optional(auth()->user()))
        <livewire:AdminBoxUserInfo name="{{$user->name}}" email="{{$user->username}}" created="{{$user->created_at}}"/>
        <nav class="navbar-container col-12">
            <livewire:AdminNavLink nameLink="خانه" link="{{route('index')}}" font="fa fa-house"/>
            <livewire:AdminNavLink nameLink="دسته بندی" link="{{route('auth.categories')}}" font="fa fa-bars"/>
        </nav>
    </aside>
    <div class="col-lg-9 col-md-8 content float-start col-12 height-100">
        <livewire:Alert/>
        {{$slot}}
    </div>
</div>
</body>
<script src="{{asset('asset/js/jQuery.js')}}"></script>
<script src="{{asset('asset/js/popper.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.js')}}"></script>
<script src="{{asset('asset/js/owl.carousel.js')}}"></script>
<script src="{{asset('asset/js/index.js')}}"></script>
</html>
