<style>
/*estilo de la tabla */

table {
   width: 90%;
   text-align: left;
   border-collapse: collapse;
   margin: 0 0 1em 0;
   caption-side: top;
   margin-left: 20px;
}
caption, td, th {
   padding: 0.3em;
}
tbody {
   border-top: 1px solid #000;
   border-bottom: 1px solid #000;
}
tbody th, tfoot th {
   border: 0;
}
th.name {
   width: 25%;
}
th.location {
   width: 20%;
}
th.lasteruption {
   width: 30%;
}
th.eruptiontype {
   width: 25%;
}
tfoot {
   text-align: center;
   color: #555;
   font-size: 0.8em;
}

</style>
<h1>Listado de estudiantes</h1>
<button><a href="{{url('/est/create/')}}">Crear</a></button><br><br>
<table >
<thead>
    <tr>
        <td>codigo</td>
        <td>nombre</td>
        <td>direccion</td>
        <td>telefono</td>
        <td>email</td>
        <td></td>
    </tr>
</thead>
<tbody>
    @foreach($estudents as $est)
    <tr>
        <td>{{$est->codigo}}</td>
        <td>{{$est->nombre}}</td>
        <td>{{$est->direccion}}</td>
        <td>{{$est->telefono}}</td>
        <td>{{$est->email}}</td>
   
    </tr>
    @endforeach
</tbody>

</table>
