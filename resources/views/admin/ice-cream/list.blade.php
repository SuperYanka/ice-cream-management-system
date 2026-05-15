@php
    use App\Models\Types;
@endphp
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Eczar&display=swap"/>
    <link rel="stylesheet" href="/styles.css" />
</head>
@extends('admin.layout')
@include('admin.ice-cream.admin-header')

@section('content')
    <table class="ice-cream-table">
        <tr>
            <td class="table-rows-cols">Type</td>
            <td class="table-rows-cols">Taste</td>
            <td class="table-rows-cols" >Name</td>
            <td class="table-rows-cols">Cost</td>
            <td class="table-rows-cols">In stock</td>
            <td colspan="2" class="table-rows-cols " >Admin</td>
        </tr>
        @foreach ($ice_creams as $ice_cream)

            <tr>
                <td>{{ isset(Types::$types[$ice_cream->type]) ? Types::$types[$ice_cream->type] : '' }}</td>
                <td>{{ $ice_cream->taste }}</td>
                <td>
                    <a id="sweety-dreams" href="/types/{{ $ice_cream->id }}">{{ $ice_cream->name }}</a>
                </td>

                <td>{{ $ice_cream->cost }}</td>
                <td>{{ isset(Types::$in_stock[$ice_cream->in_stock]) ? Types::$in_stock[$ice_cream->in_stock] : '' }}</td>
                <td>
                    <a class="edit-link" href="/admin/types/{{ $ice_cream->id }}/edit">edit</a>
                </td>
                <td>
                    <form action="/admin/types/{{ $ice_cream->id }}" method="POST">

                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button class="button-style">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </table>
    </div>

    @include('app.layouts.footer')
@endsection

