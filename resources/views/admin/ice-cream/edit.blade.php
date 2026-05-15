@extends('admin.layout')
@section('content')

    <div style="text-align: center;">
        <h2>Edit Ice Cream</h2>

        <form action="/admin/types" method="POST">
            {{ csrf_field() }}

            <table style="margin: 0 auto;">
                <tr>
                    <td>Taste:</td>
                    <td><input type="text" name="taste" value="{{$ice_cream->taste}}" ></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" value="{{$ice_cream->name}}"></td>
                </tr>
                <tr>
                    <td>Cost:</td>
                    <td><input type="text" name="cost" value="{{$ice_cream->cost}}"></td>
                </tr>

                <tr>
                    <td>Type:</td>
                    <td>
                        <select name="type" style="width: 100%;">

                            @foreach($types as $id => $type_title)
                                <option value="{{ $id }}"
                                    {{ ( $id == $ice_cream->type ) ? 'selected' : '' }}>
                                    {{ $type_title }}
                                </option>
                            @endforeach

                        </select>
                    </td>
                </tr>
            </table>

            <br>

            <input class="submit-button" type="submit" value="Submit">
        </form>
    </div>
    </form>
@endsection

