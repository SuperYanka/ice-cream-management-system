@extends('app.layouts.main')

@section('page_title')

@endsection

@section('content')

    <table class="table" >
        <td class="table-rows-cols" > Type</td>
        <td class="table-rows-cols" id="table-taste-name-cols"> Taste</td>
        <td class="table-rows-cols" id="table-taste-name-cols"> Name</td>
        <td class="table-rows-cols" > Rating</td>
        <td class="table-rows-cols" > Cost</td>
        <td class="table-rows-cols" > In stock</td>

        @foreach ($ice_creams as $ice_cream)
            <tr>
         <td  class="table-rows-cols" id="table-taste-name-cols">{{ $ice_cream -> type }}</td>
         <td  class="table-rows-cols" id="table-taste-name-cols">{{ $ice_cream -> taste }}</td>

         <td  class="table-rows-cols"> <a id="sweety-dreams" href="/types/{{$ice_cream -> id }}">{{ $ice_cream -> name  }}</a></td>
         <td class="table-rows-cols">{{ $ice_cream -> rating }}</td>
         <td  class="table-rows-cols">{{ $ice_cream -> cost }}</td>
         <td  class="table-rows-cols"> {{ $ice_cream -> in_stock }}</td>
     </tr>

 @endforeach
</table>


<div class="left-panel">
    <aside>
        <div class="type-of-ice">Type of ice cream:</div>
    <form method="get" action="/types">
        @csrf
        <select class="select-sort" id="type-of-ice-select" name="type">
            <option value="0">All types</option>

            @foreach($types as $id => $type_title)
                <option  value="{{ $id }}"
                    {{ ( $id == $type_selected ) ? 'selected' : '' }}>
                    {{ $type_title }}
                </option>
            @endforeach


        </select>

        <input class="new-ice-button" type="submit" value="Знайти" />
        </form></aside>

</div>
@endsection
