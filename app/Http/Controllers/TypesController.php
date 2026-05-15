<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Types;

class TypesController extends Controller
{
    public function types(Request $request) {
        $type = $request->input('type', null);

        $model_ice_creams = new Types();
        $ice_creams = $model_ice_creams->getIceCreamsByType($type);

        return view('app.types.list', [
            'ice_creams' => $ice_creams,
            'types' => Types::$types,
            'in_stock' => Types::$in_stock,
            'type_selected' => $type
        ]);
    }


    public function type($id) {
        $model_ice_creams = new Types();
        $ice_cream = $model_ice_creams->getIceCreamByID($id);

        return view('app.types.type')->with('ice_cream', $ice_cream);
    }






}



