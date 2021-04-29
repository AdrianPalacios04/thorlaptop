@extends('layouts.app')
@section('content')

<div class="flex-container-body">
    @include('layouts.left')
    <div id="id_sideCenter">
        <div class="flex-container-register">
            <div class="flex-create-left">
                <img src="imagen/createAccount/logo200.png" alt="" class="img-fluid">
            </div>
            <div id="app" class="flex-create-center">
                <div class="content-register-header">
                    <img src="imagen/createAccount/cabeza100x93.png" alt="" class="img-fluid">
                </div>
                <div class="content-register">
                    <div class="content-register-title">
                        <h1 class="text-yellow">CREAR CUENTA</h1>
                    </div>
                    <div class="content-register-body">
                        <form action="{{route('register')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-4 col">
                                    <label for="user" class="">USUARIO</label>
                                    <input v-model="user" type="text" name="name" value={{old('name')}}>
                                </div>
                                <div class="form-group col-md-4 col">
                                    <label for="pass" class="">CONTRASEÑA</label>
                                    <input v-model="pass" type="password" name="password" class="@error('password') is-invalid @enderror">
                                </div>
                                <div class="form-group col-md-4 col">
                                    <label for="repeatPass" class="">REP. CONTRASEÑA</label>
                                    <input v-model="repeatPass" type="password" name="password_confirmation" class="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="nom" class="">NOMBRE</label>
                                    <input v-model="nombre" type="text" name="nombre" class="" value={{old('nombre')}}>
                                </div>
                                <div class="form-group col">
                                    <label for="ape" class="">APELLIDO</label>
                                    <input v-model="apellido" type="text" name="apellido" class=""value={{old('apellido')}}>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3 col-6">
                                    <label for="cedula" class="">DNI / CE</label>
                                    <input v-model="cedula" type="text" name="dni" class="" value={{old('dni')}}>
                                </div>
                                <div class="form-group col-sm-4 col-xs-6">    
                                    <label for="codpais" class="">PAÍS</label>
                                    <select class="form-select form-select-lg" name="cbo_pais" id="cbo_pais">
                                        <option value=""></option>
                                        @foreach ($pais as $paises)
                                            <option class="form-control" name="codpais" value="{{$paises->id}}">{{$paises->nompais}}</option>
                                        @endforeach
                                    </select>
                                    @error('idpais')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-3 col-6">
                                    <label for="nacimiento" class="">FECHA DE NAC.</label>
                                    <input id="dnacimiento" type="text" name="dnacimiento" class="datepicker"
                                        readonly="readonly" >
                                </div>
                                <div class="form-group col sexo" style="box-sizing: content-box;">
                                    <label for="" class="col-12 ">SEXO</label>
                                    <div class="" style="display: inline-flex;">
                                        <input id="hombre" type="radio" name="sexo" value="Hombre">
                                        <label for="hombre" class="radio"></label>
                                        H
                                    </div>
                                    <div class="" style="display: inline-flex;">
                                        <input id="mujer" type="radio" name="sexo" value="Mujer">
                                        <label for="mujer" class="radio"></label>
                                        M
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-8 col-12">
                                    <label for="mail" class="">CORREO ELECTRONICO</label>
                                    <input v-model="mail" type="text" name="email" class="" value={{old('email')}}>
                                </div>
                                <div class="form-group col-md-4 col-12">
                                    <label for="" class="col"></label>
                                    <button class="btn btn-sm btn-valide">VALIDAR CORREO</button>
                                    {{-- <input type="hidden" name="validaCorreo" value="0"> --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-2 col-4">
                                    <label for="codPais" class="">CÓDIGO</label>
                                    <input id="id_codPais" type="text" name="codpais" class="" readonly="readonly">
                                </div>
                                <div class="form-group col-md-6 col-8">
                                    <label for="phone" class="">CELULAR</label>
                                    <input type="text" name="celular" class="" value={{old('celular')}}>
                                </div>
                                <div class="form-group col-md-4 col-12">
                                    <label for="" class="col"></label>
                                    <button class=" btn btn-sm btn-valide"> VALIDAR CELULAR</button>
                                    <input type="hidden" name="validaCelular" value="0">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col valide">
                                    <input type="hidden" name="autorizo" value="0">
                                    <input id="autorizo" type="checkbox" name="autorizo" class="" value=1>
                                    <label for="autorizo" class="checkbox "></label>
                                    <div for="" class="">AUTORIZO RECIBIR INFORMACIÓN Y PROMOCIONES POR CORREO
                                        ELECTRÓNICO</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col valide">
                                    <input id="acepto" type="checkbox" name="acepto" class="" value="1">
                                    <label for="acepto" class="checkbox"></label>
                                    <div for="" class="">ACEPTO LAS CONDICIONES LEGALES Y REGLAS DEL JUEGO</div>
                                </div>
                            </div>
                            <button style="text-decoration:none;color:yellow" id="button-aceptar" type="submit" class="text-yellow col" real>ACEPTAR</button>
                        </form>
                    </div>
                </div>
                <div class="content-register-footer">
                    <div class="row">

                        <a style="text-decoration:none" href="index.php" class="text-white col">CANCELAR</a>
                        <a style="text-decoration:none" v-on:click="resetRegister" id="btnLimpiar" class="text-white col">LIMPIAR</a>
                        
                    </div>
                </div>
            </div>
            <div class="flex-create-right">
                <img src="imagen/createAccount/logo200.png" alt="" class="img-fluid">
            </div>
        </div> 
    </div>
    @include('layouts.right')
</div>
<script>
    $(document).ready(function() {
        $('#dnacimiento').datepicker({
            format: 'dd/mm/yy',
                autoclose: true,
                todayHighlight: true
        });
        
        $('#cbo_pais').on('change', function() {
            let cp = $("#cbo_pais").val();
            $("#id_codPais").val(cp);
        });


        // $("#btnLimpiar").click(function(event) {
        //     $("#app")[0].reset();
        //     $("#app")[1].reset();
        // });
    });
//     $(document).ready(function() {
//     $('#cbo_pais').on('change', function() {
//         let cp = $("#cbo_pais").val();
//         $("#id_codPais").val(cp);
//     });
// });
</script>



@endsection

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" required autocomplete="email">
                            

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                            <div class="col-md-6">
                                <input id="celular" type="text" class="form-control @error('celular') is-invalid @enderror" 
                                name="celular" value="{{ old('celular') }}" required autocomplete="celular" autofocus>

                                @error('celular')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="idpais" class="col-md-4 col-form-label text-md-right">{{ __('Pais') }}</label>

                            <div class="col-md-6">    
                                <select class="form-select" aria-label="Default select example" name="codpais" id="codpais">
                                    <option value=""></option>
                                    @foreach ($pais as $paises)
                                        <option  id="codpais" class="form-control" name="codpais" value="{{$paises->id}}">{{$paises->nompais}}</option>
                                    @endforeach
                                </select>
                                @error('idpais')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dni" class="col-md-4 col-form-label text-md-right">{{ __('Dni') }}</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" 
                                name="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" 
                                name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellido" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" 
                                name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" autofocus>

                                @error('apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dnacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Dia de Nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="dnacimiento" type="date" class="form-control @error('dnacimiento') is-invalid @enderror" 
                                name="dnacimiento" 
                                value="{{ old('dnacimiento') }}" required autocomplete="dnacimiento" autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sexo" id="sexo" value="H">
                                    <label class="form-check-label">
                                      HOMBRE
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sexo" id="sexo" value="M">
                                    <label class="form-check-label">
                                        MUJER
                                    </label>
                                </div>  
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <label for="autorizo" class="col-md-4 col-form-label text-md-right">{{ __('Autorizo') }}</label>
                            <div class="col-md-6">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" id="autorizo" name="autorizo" value="1">
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="form-group row">
                            <label for="acepto" class="col-md-4 col-form-label text-md-right">{{ __('Acepto') }}</label>
                            <div class="col-md-6">
                                <div class="">
                                    <input type="checkbox"  id="acepto" name="acepto" value="1" checked>
                                    <label for="acepto" class="checkbox"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

