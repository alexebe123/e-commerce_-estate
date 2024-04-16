<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estates extends Model
{
    use HasFactory;
    protected $table = "estates";
    protected $fillable =
    [
        "id",
        "id_owner",
        "city",
        "length",
        "width",
        "image",
        "storey",
        "amunt",
        "address",
    ];

}
