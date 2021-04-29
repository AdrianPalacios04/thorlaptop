@extends('layouts.app')

@section('content')
@include('layouts.footer')

<div class="flex-container-body">
    @include('layouts.left')
    <div id="id_sideCenter">
        <div class="flex-container-login">
            <div class="flex-login-left">
                <img src="imagen/login/cuadradoconreloj.png" alt="" class="login-cuadrado img-fluid">
            </div>
            <div class="flex-login-center">
                <img src="imagen/login/logo300x455.png" alt="" class="login-logo img-fluid">
                <a href="{{route('register')}}">
                    <img src="imagen/login/crearcuenta320x80.png" alt="" class="login-crear img-fluid">
                </a>
            </div>
            <div class="flex-container-form">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <h1 class="">SIGN IN</h1>
                    <div class="form-group">
                        <input v-model="user" type="text" name="email" placeholder="EMAIL" >
                    </div>
                    <div class="form-group">
                        <input v-model="pass" type="password" name="password" placeholder="CONTRASEÑA" >
                        <a href="#" class="text-white text-left"><small>¿OLVIDASTES TU CONTRASEÑA?</small></a>
                    </div>
                        <button type="submit">Ingresar</button>
                </form>
            </div>
        </div>
    </div>
    @include('layouts.right')
</div>
@endsection