<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceRange extends Model
{
    use HasFactory;
    public $table="price_rage";
    protected $fillable = ['rate1', 'rate2', 'rate3', 'rate4'];


}
