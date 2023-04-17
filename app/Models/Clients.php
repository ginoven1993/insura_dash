<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    protected $table = 'clients';

    /**
    * The primary key for the model.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    protected $fillable = [
        'firstname',
        'lastname',
        'date_sous',
        'time',
        'telephone',
        'email',
        'job',
        'marital_status',
        'adresse',
        'status',
        'insurance_id',
        'partner_id'
    ];
}
