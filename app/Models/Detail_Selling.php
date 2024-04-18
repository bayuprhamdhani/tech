<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Selling extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'ID_Sell',
        'ID_Product',
        'Product_Name',
        'Selling_Price',
        'Qty',
        'Sub_Total'
    ];
}
