@extends('layouts.nav.candidate',['title' => 'Curriculum - Experiencia'])

@section('js')
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/curriculum.css') }}">
@endsection

@section('style')
    <style>
        .container_general_profile{
            font-size: 15px;
        }
        .contenido_form{
            width: 100%;
        }

        .form_create_curriculum{
            display: flex;
            width: 80%;
            align-items: flex-start;
            justify-content: center;
            background: none;
            border: none;
            padding: 11px 16px;
            overflow: hidden;
        }

        /* .form_edit_curriculum::-webkit-scrollbar {
            width: 8px;
            height: 5px;
        } */
        .input_style_general, .select_style_general{
            height: 39px;
        }
        .input_general_submit{
            margin: 0 75px;
        }

    </style>
@endsection

@section('content_profile')

<div class="contenido_curriculum">
    <section class="contenedor_curriculum">
        <article class="nav_curriculum">
            <button id="btn_curriculum_2" class="btn_nav btn_nav_2">Experiencias</button>
        </article>
        <article class="contenedor_form_curriculum">
            <form class="form form_create_curriculum" method="post" action="{{ route('experience.store') }}">
                @csrf
                <div>
                    <label>Name Company</label>
                    <input
                    class="input_style_general"
                    name="name_company"
                    type="text"
                    value="{{ old('name_company') }}">
                    @error('name_company')
                        <small>$message</small>
                    @enderror
                </div>
                <div>
                    <label>Addres</label>
                    <input
                    class="input_style_general"
                    name="addres"
                    type="text"
                    value="{{ old('addres') }}">
                    @error('addres')
                        <small>$message</small>
                    @enderror
                </div>
                <div>
                    <label>Denominacion</label>
                    <input
                    class="input_style_general"
                    name="id_denomination"
                    type="text"
                    value="{{ old('id_denomination') }}">
                    @error('id_denomination')
                        <small>$message</small>
                    @enderror
                </div>
                <div>
                    <label>Functions</label>
                    <input
                    class="input_style_general"
                    name="id_function"
                    type="text"
                    value="{{ old('id_function') }}">
                    @error('id_function')
                        <small>$message</small>
                    @enderror
                </div>
                <div>
                    <label>Start Date</label>
                    <input
                    class="input_style_general"
                    name="start_date"
                    type="date"
                    value="{{ old('start_date') }}">
                    @error('start_date')
                        <small>$message</small>
                    @enderror
                </div>
                <div>
                    <label>End Date</label>
                    <input
                    class="input_style_general"
                    name="end_date"
                    type="date"
                    value="{{ old('end_date') }}">
                    @error('end_date')
                        <small>$message</small>
                    @enderror
                </div>
                <div>
                    <input
                    class="input_general_submit"
                    type="submit"
                    value="Agregar">
                </div>
            </form>
        </article>
        <article>
            <a href="{{route('experience.index')}}">Volver</a>
        </article>
    </section>
</div>
@endsection
