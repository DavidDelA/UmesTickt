@extends('layouts.app')

@section('content')
<form method= "post" action="{{action('EventosController@update',$id)}}">
{{ csrf_field() }}
    <input type="hidden" name="_method" value="PATCH"/>
	<label><DIV ALIGN="center"><P><h1> EVENTO</h1></DIV> </label><br>
    <table>
    <tr>
	 <td><label>Nombre de el Evento:</label></td><td><input type="text" id="evento" name="evento" value ="{{$eventos->evento}}" ><br></td>
	 </tr>
     <tr>
     <td><label>Fecha:</label></td><td><input type="text" id="fecha" name="fecha" value ="{{$eventos->fecha}}" ><br></td>
	 </tr>
     <tr>
     <td><label>Total de Publico(personas):</label></td><td><input type="int" id="publico" name="publico" value ="{{$eventos->publico}}" ><br></td>
     </tr>
     <tr>
     <td> <label>Tickets totales:</label></td><td><input type="text" id="tickets" name="tickets" value ="{{$eventos->tickets}}" ><br></td>
	 </tr>
     <tr>
     <td><label>Horario Inicio:</label></td><td><input type="text" id="horarioinicio" name="horarioinicio"  value ="{{$eventos->horarioinicio}}"><br></td>
	 </tr>
     <tr>
     <td><label>Horario Final:</label></td><td><input type="text" id="horariofinal" name="horariofinal" value ="{{$eventos->horariofinal}}" ><br></td>
	 </tr>
     <tr>
     <td><label>Lugar:</label></td><td><input type="text" id="lugar" name="lugar" value ="{{$eventos->lugar}}" ><br></td>
     </tr>
        </table>

	 <input type ="submit" value="Actualizar">
</form> 
@endsection