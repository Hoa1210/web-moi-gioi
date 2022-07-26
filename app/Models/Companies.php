<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    protected  $fillable = [
        "id",
        "name",
        "address",
        "address2",
        "district",
        "city",
        "country",
        "zipcode",
        "phone",
        "email",
        "logo",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
}
