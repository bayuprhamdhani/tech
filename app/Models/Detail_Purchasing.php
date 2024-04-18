<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Purchasing extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'ID_Purchase',
        'ID_Product',
        'Product_Name',
        'Purchasing_Price',
        'Qty',
        'Sub_Total'
    ];
}
