<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class product extends Model
{
    use HasFactory;
    public function Product(){
        $product = 'SELECT * FROM Product';
        $rs = DB::select($product);
        return $rs;
    }
}