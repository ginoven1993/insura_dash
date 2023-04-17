<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurances extends Model
{
    use HasFactory;
    protected $table = 'insurances';

    /**
    * The primary key for the model.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    protected $fillable = [
        'categorie',
        'description'
    ];
}
