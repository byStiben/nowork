@extends('layouts.nav.candidate',['title' => 'Candidate - Aplicaciones'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general-index.css') }}">
@endsection

@section('style')
    <style>
        .container_general_profile{
            font-size: 15px;
        }
    </style>
@endsection

@section('content_profile')
<section class="contenedor_index_general">
    <article class="titulo_index_general">
        <h3>Listado de Vacante Aplicadas</h3>
    </article>
    <article class="contenedor_tabla_general">
        <table class="contenido_tabla_general">
            <tr class="tr_tabla_general_encabezado">
                <td style="width: 200px">Config</td>
                <td style="width: 235px">Nombre Empresa</td>
                <td style="width: 235px">Denominacion</td>
                <td style="width: 155px">Fecha Postulacion</td>
            </tr>
            @if ($processes->isEmpty())
                <tr>
                    <td>Table empty</td>
                </tr>
            @else
                @foreach($processes as $process)
                        <tr class="tr_tabla_general_contenido">
                            <td class=" td_general_tabla_general td_configuracion_general">
                                <a class="a_config_general" href="#">Show Process</a>
                            </td>
                            <td class="td_general_tabla_general">{{ $process->vacancy->company->name }}</td>
                            <td class="td_general_tabla_general">{{ $process->vacancy->charge->denomination->description }}</td>
                            <td class="td_general_tabla_general">{{ $process->date_applied }}</td>
                        </tr>
                @endforeach
            @endif
        </table>
    </article>
</section>
@endsection
