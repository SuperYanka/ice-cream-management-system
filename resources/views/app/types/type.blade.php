@php
    use App\Models\Types;
@endphp

@extends('app.layouts.main')

@section('page_title')
    <div class="ice-cream-attributs">
        <div class="main-vf">
    <b>{{ $ice_cream->name }} Information</b> </div></div>
@endsection

@section('content')

    <div  class="ice-cream-attributs">
    <table>

        <tr>
            <td>Name :</td>
            <td> {{ $ice_cream->name }} </td> </tr>

        <tr>  <td>Taste:</td>
            <td>{{ $ice_cream->taste }}</td>
        </tr>
        <tr>  <td>Cost:</td>
            <td>{{ $ice_cream->cost }}</td>
        </tr>
        <tr>  <td>Type:</td>
            <td>{{ isset(Types::$types[$ice_cream->type]) ? Types::$types[$ice_cream->type] : '' }}</td>
        </tr>
        </table>


    </div>
    <div style="text-align: center; margin-top: 20px;">
        <a class="submit-button" id="sweety-dreams" href="/types">Back</a>
    </div>
    <div style="text-align: center; margin-top: 20px;">
        <a class="submit-button" id="sweety-dreams" href="/admin/types">Back to admin</a>
    </div>



    @if (isset(Types::$types_images[$ice_cream->type]))
        <img src="{{ Types::$types_images[$ice_cream->type] }}" alt="Type Image" style="display: block; margin: 0 auto;>
    @endif

@endsection
