@extends('layouts.app')

@section('content')
@include('layouts.footer')
<link rel="stylesheet" href="css/style-reclamaciones.css">
<div class="flex-container-body">
    @include('layouts.left')
    <div id="id_sideCenter">
        <div class="flex-container-login">
          
            <div class="recla">
                <form action="{{url('reclamaciones')}}" method="POST">
                    @csrf
                    	<div class="libros">
                    		<h2 class="">libro de Reclamaciones</h2>
                    <div class="form-group">
                    	<label for="">nombres</label>
                        <input v-model="user" type="text" placeholder="{{$user->persona->nombre}}"  readonly >
                    </div>
                    
                         <div class="form-group">
                         	<label for="">apellidos</label>
                          <input v-model="materno" type="text" name="apellido" placeholder="{{$user->persona->apellido}}"  readonly> 
                          </div>
                          <div class="form-group"> 
                        	<label for="">tipo de documento</label>
                       <input v-model="tipo_documento" type="text" name="dni" placeholder="DNI"   readonly>
                        </div>

                         <div class="form-group"> 
                        	<label for="">celular</label>
                        <input v-model="cel" type="text"  placeholder="{{$user->celular}}"   readonly >
                        </div>

                         <div class="form-group"> 
                        	<label for="">teléfono</label>
                        <input v-model="cel" type="text" name="telefono_casa" >
                        </div>


                         <div class="form-group"> 
                        	<label for="">dni/ce</label>
                        <input v-model="cel" type="text" name="cbo_pais" placeholder="{{$user->persona->dni}}" value="" id="" readonly >
                        </div>

                         <div class="form-group"> 
                        	<label for="">país</label>
                        <input v-model="cel" type="text" name="cel" placeholder="{{$user->pais->codpais}}" readonly >
                        </div>

                         <div class="form-group"> 
                        	<label for="">fecha nac.</label>
                        <input v-model="fech_nac" type="text" name="fech_nac" placeholder="{{$user->persona->dnacimiento}}" readonly >
                        </div>

                          <div class="form-group"> 
                        	<label for="">Sexo</label>
                        <input v-model="sexo" type="text" name="sexo" placeholder="{{$user->persona->sexo}}"  id="" readonly >
                        </div>

                           <div class="form-group">   
                      <label for="">Enviar a</label>
                       <select name="tienda" id="tienda" onchange="change(this)">
                          <option value="1">Domicilio</option>
                          <option value="2" selected>Email</option>
                            </select>
                       </div>


                          <div id="hijos">
                            <div class="form-group" id="email"> 
                          <label for="">Correo electrónico</label>
                        <input v-model="email" type="email" id="correo" name="email" placeholder="{{$user->email}}" readonly>
                        </div>

                        <div class="form-group" id="domicilio"> 
                          <label for="">Dirección</label>
                        <input v-model="domicilio" type="text" id="" class="dir" name="direccion" placeholder="" value="" >
                        </div>
                          </div>
                           <hr>
                    	</div>
                   		<div class="lados">
                   			<div class="lado_izq">
		                   			     <h3>información general</h3>
								  
								 <div class="form-group"> 	
						  		<label for="">tienda de compra</label>
						  		 <select name="tipo_tienda" id="tienda">
		                    	<option value="">Seleccione una Tienda</option>
		                    	<option value="Online">Tienda Online</option>
		                        </select>
								 </div>
								        <div class="form-group subir"> 
		                         	<label for="">MONTO RECLAMADO</label>
		                        <input type="text" id="ema" name="monto" placeholder="" value={{old('monto')}}>
		                        </div>


		                         <div class="form-group"> 
		                         	<label for="">DESCRIPCIÓN DEL PRODUCTO O SERVICIO</label>
		                        <textarea name="descripcion" id="des" cols="30" rows="10" value={{old('descripcion')}}></textarea>
		                        </div>
                   		</div>


                   			<div class="lado_der">
		                   		 <h3>detalle su reclamo</h3>	
		                   		  <div class="form-group"> 
						  		<label for="">Tipo</label>
						  		 <select name="tipo_reclamo" >
		                    	<option value="">Seleccione</option>
		                    	<option value="Queja">Queja</option>
		                    	<option value="Reclamo">Reclamo</option>
		                        </select>
								 </div>


								 <div class="form-group"> 
		                         	<label for="">pedido</label>
		                        <textarea name="pedido" class="pedido" id="pedido" cols="30" rows="10" value={{old('pedido')}}></textarea>
		                        </div>
		                        
                   		</div>

                   		<div class="lado">
                   			 <div class="form-group"> 
		                         	<label for="">detalle del reclamo o queja</label>
		                        <textarea name="detalle_reclamo" id="detalle_reclamo" class="detalle" cols="30" rows="10" value={{old('detalle_reclamo')}}></textarea>
		                        </div>
                   		</div>
                   		</div>
                       <div class="form-group"> 
                        <p class="datos_protegidos">Los datos ingresados están protegidos por la ley de protección de datos personales.</p>
                    </div>

                    
                        <div class="form-group botonera"> 
                         	<button type="submit" class="boton_personalizado" onclick="limpiar()"></button><!-- Limpiar -->
                          <button type="submit" class="boton_personalizado2"><!-- Cancelar --></button>
                          <button type="submit" class="boton_personalizado3"><!-- Ingresar --></button>
                            </div>
                </form>
            </div>
        </div>
    </div>
    @include('layouts.right')
</div>
@endsection