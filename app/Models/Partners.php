<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    use HasFactory;
    protected $table = 'partners';

    /**
    * The primary key for the model.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'logo',
        'town',
        'partner_type',
        'status' 
    ];
}
