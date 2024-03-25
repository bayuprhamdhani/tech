<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Product extends Model
{
    use HasFactory, HasApiTokens, Notifiable;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'Product_Name',
        'Qty',
        'Selling_Price',
        'Buying_Price',
        'Product_Type_ID',
        'Product_Status',
    ];
}
