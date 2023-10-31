<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customization extends Model
{
    protected $table = 'customization';
    protected $fillable = [
        'user_id',
        'customer_name',
        'customer_email',
        'customer_mobile',
        'item_name',
        'image',
        'description'
    ];
}
