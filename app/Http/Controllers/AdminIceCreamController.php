<?php

namespace App\Http\Controllers;

use App\Models\IceCream;
use Illuminate\Http\Request;
use App\Models\Types;
use Illuminate\Support\Facades\Redirect;

class AdminIceCreamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ice_creams = IceCream::get();
        return view('admin.ice-cream.list', ['ice_creams' => $ice_creams]);
    }


    public function create()
    {
        return view('admin.ice-cream.add', ['types' => Types::$types]);
    }


    public function store(Request $request)
    {
        $name   = $request->input('name');
        $taste  = $request->input('taste');
        $cost   = $request->input('cost');
        $type   = $request->input('type');

        $ice_cream = new IceCream();

        $ice_cream->name   = $name;
        $ice_cream->taste  = $taste;
        $ice_cream->cost   = $cost;
        $ice_cream->type   = $type;

        $ice_cream->save();

        return Redirect::to('/admin/types');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $ice_cream = IceCream::where('id', $id)->first();
        $ice_cream->save();

        return view('admin.ice-cream.edit', [
            'ice_cream' => $ice_cream,
            'types' => Types::$types]

        );
    }

    public function update(Request $request, string $id)
    {
        $ice_cream = IceCream::where('id', $id)->first();

        $ice_cream->name   = $request->input('name');
        $ice_cream->taste  = $request->input('taste');
        $ice_cream->cost   = $request->input('cost');
        $ice_cream->type   = $ice_cream->type = Types::$types[$ice_cream->type];

        $ice_cream->save();
        return Redirect::to('/admin/types');
    }

    public function destroy(string $id)
    {
        IceCream::destroy($id);
        return Redirect::to('/admin/types');
    }
}
