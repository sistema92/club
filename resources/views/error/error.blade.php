@if(count($errors))  <!--Preguntar si hay errores-->
<div  class="alert alert-danger">
<ul>
@foreach( $errors->all() as $error) <!--mostrara los errores encontrado-->
<li>
{{$error}}  <!--imprimir la variable error-->
</li>
@endforeach
</ul>
</div>
@endif