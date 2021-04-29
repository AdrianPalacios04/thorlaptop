<div>
    <label for="">usuario</label>
    {{$user->name}}
    <label for="">nombre</label>
    {{$user->persona->nombre}}
    <label for="">apellido</label>
    {{$user->persona->apellido}}
    <label for="">dni</label>
    {{$user->persona->dni}}
    <label for="">pais</label>
    {{$user->persona->idpais}}
    <label for="">fecha</label>
    {{$user->persona->dnacimiento}}
    <label for="">sexo</label>
    {{$user->persona->sexo}}
    <label for="">correo</label>
    {{$user->email}}
    <label for="">celular</label>
    {{$user->celular}}
    
    

    
</div>