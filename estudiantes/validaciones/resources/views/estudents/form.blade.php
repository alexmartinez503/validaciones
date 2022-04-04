
    <style>

        input{
            width: 250px;
            height: 30px;
            border-radius:5px;
         
        };

    </style>

<form action="">
<lavel  for="codigo">Codigo: </lavel><br>
<input type="text" name="codigo" id="" value="{{ isset($est->codigo)?$est->codigo:''}}" placeholder="ingrese las letras en mayusculas" require  pattern="[A-Z0-9]+" >
<br>
<br>
<label for="nombre">Nombre:</label><br>
<input type="text" name="nombre" id="" value="{{isset($est->nombre)?$est->nombre:''}}"  placeholder="nombre del estudiante" require >
<br><br>
<label for="direccion">Direccion:</label><br>
<input type="text" name="direccion" id="" value="{{isset($est->direccion)?$est->direccion:''}}" placeholder="direccion" require  >
<br><br>
<label for="telefono">Telefono:</label><br>
<input type="text" name="telefono" id="" value="{{isset($est->telefono)?$est->telefono:''}}" placeholder="numero de telefono" require >
<br><br>
<label for="c=email">Email:</label><br>
<input type="text" name="email" id="" value="{{isset($est->email)?$est->email:''}}" placeholder="ejemplo: correo@gmail.com" require pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" >
<br><br>
<button type="submit"> Guardar</button>
</form>
