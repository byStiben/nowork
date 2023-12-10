@extends('layouts.nav.administrator',['title' => 'Estudios'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general-index.css') }}">
@endsection

@section('style')

@endsection

@section('content_profile')
<section class="contenedor_index_general">
    <article class="titulo_index_general">
        <h3>Listado de Estudios</h3>
    </article>
    <article class="contenedor_tabla_general">
        <table class="contenido_tabla_general">
            <tr class="tr_tabla_general_encabezado">
                <td style="width: 200px">Config</td>
                <td style="width: 300px">Nombre Institucion</td>
                <td style="width: 205px">Munipio</td>
                <td style="width: 155px">End Date</td>
            </tr>
            @forelse ($studies as $study)
                <tr class="tr_tabla_general_contenido">
                    <td class=" td_general_tabla_general td_configuracion_general">
                        <a class="a_config_general" href="#">Show study</a>
                    </td>
                    <td class="td_general_tabla_general">{{ $study->name }}</td>
                    <td class="td_general_tabla_general">{{ $study->municipality->name }}</td>
                    <td class="td_general_tabla_general">{{ $study->end_date }}</td>
                    <td class="td_borrar_general" style="width: 70px">
                        <form method="POST" action="{{route('user.destroy', $user->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="DELETE" class="edit"/>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Table empty</td>
                </tr>
            @endforelse
        </table>
        <div>
            <a href="#">Agregar</a>
        </div>
    </article>
</section>
@endsection