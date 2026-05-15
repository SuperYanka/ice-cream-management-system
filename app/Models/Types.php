<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Types
{
    public static $types = array(
        '1' => 'Ice lolly',
        '2' => 'Waffle cup',
        '3' => 'Fruit ice'
    );
    public static $types_images = array(
        '1' => 'public/Fruit ice.jpg',
        '2' => 'public/Waffle cup.png',
        '3' => 'public/Ice Lolly.webp'
    );

    public static $in_stock = array(
        '1' => 'Yes',
        '2' => 'No',
    );

    public function getIceCreamsByType($type)
    {
        $query = DB::table('ice_creams');
        $query->select('id', 'name', 'taste', 'cost', 'in_stock', 'type', 'rating')
            ->orderBy('type');

        if ($type) {
            $query->where('type', '=', $type);
        }

        $ice_creams = $query->get();

        $result = [];

        foreach ($ice_creams as $ice_cream) {
            $typeText = isset(Types::$types[$ice_cream->type]) ? Types::$types[$ice_cream->type] : '';
            $ice_cream->type = $typeText;

            $inStockText = isset(Types::$in_stock[$ice_cream->in_stock]) ? Types::$in_stock[$ice_cream->in_stock] : '-';
            $ice_cream->in_stock = $inStockText;

            $rating = DB::table('ratings')->where('ice_cream_id', $ice_cream->id)->value('ice_cream_rating');
            $ice_cream->rating = $rating;

            $result[] = $ice_cream;
        }

        return $result;
    }

    public function getIceCreamByID($id)
    {
        if (!$id) return null;
        $type = DB::table('ice_creams')
            ->select('*')
            ->where('id', '=', $id)
            ->get()->first();
        return $type;
    }
}

