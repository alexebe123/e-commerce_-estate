<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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

    public function user(){
        return $this->belongsTo(related:User::class,foreignKey:"id_owner");
    }
}
