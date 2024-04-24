<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Purchasing extends Model
{
    use HasFactory, HasApiTokens, Notifiable;
    public $timestamps = false;
    protected $fillable = [
        'Vendor_Id',
        'Admin_Id',
        'Date_Purchase',
        'Purchase_Status',
        'Grand_Total',
    ];
}
