<h2>Registro de estudiantes</h2>
<form action="{{url('est')}}" method="post">
    @csrf
    @include('estudents.form')

</form>