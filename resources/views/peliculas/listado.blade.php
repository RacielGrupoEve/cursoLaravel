@include('includes.header')
<h1>{{$titulos}}</h1>
<h2>{{$listado[1] }}</h2>
<p>{{date('yy')}}</p>
<!--Mostrar si existe una variable-->
{{ $director ?? 'no hay director' }}  <!-- Condicional si existe o no-->

<!--Condicionales-->
@if($titulos && count($listado) >=5)
    <h1>El titulo existe y es este: {{$titulos}} y el listado es mayor a 5</h1>
@elseif($titulos)
    <h1>El titulo existe y el listado no es mayor a 5</h1>
@else
    <h1>La condicion no se a cumplido</h1>
 @endif
<hr/>
<!--Bucles-->
@for($i=0;$i<=20;$i++)
El numero es:{{$i}}<br/>
@endfor
<?php $contador = 1 ?>
@while($contador<5)
@if($contador % 2 == 0)
 Numero par:{{$contador}}<br>
@endif
<?php $contador ++;?>
@endwhile()
<hr/>
@foreach ($listado as $pelicula)
    <p>Estas son las peliculas: {{ $pelicula }}</p>
@endforeach
@include('includes.Footer')
