@extends('layouts.app')

@section("content")

<form method="POST" action="{{route('vacancy.store')}}">
    @csrf


    
    <h2>form  </h2>
    
    <label> occupational_profile</label>
    <input type="text" name="occupational_profile"/>

    <label> number_vacancy</label>
    <input type="text" name="number_vacancy"/>

    <label> workday</label>
    <input type="text" name="workday"/>

    <label> id_departament</label>
    <input type="text" name="id_departament"/>

    <label> id_municipality</label>
    <input type="text" name="id_municipality"/>

    <label> addres</label>
    <input type="text" name="addres"/>

    <label> start_date</label>
    <input type="text" name="start_date"/>

    <label> end_date</label>
    <input type="text" name="end_date"/>



    <h2>form charge </h2>
    <label> id_denomination</label>
    <input type="text" name="id_denomination"/>

    <label> id_function</label>
    <input type="text" name="id_function"/>

    <label> payment_method</label>
    <input type="text" name="payment_method"/>

    <label> salary</label>
    <input type="text" name="salary"/>

    <label> type_contract</label>
    <input type="text" name="type_contract"/>


    <input type="submit" value="Crear" class="create"/>

</form>
@endsection
