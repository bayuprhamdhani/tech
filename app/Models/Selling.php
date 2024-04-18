<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selling extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'Customer_ID',
        'Cashier_ID',
        'Date_Sell',
        'Selling_Status',
        'Grand_Total',
    ];
}
