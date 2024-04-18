<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchasing extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'Vendor_ID',
        'Admin_ID',
        'Date_Purchase',
        'Purchase_Status',
        'Grand_Status',
    ];
}
