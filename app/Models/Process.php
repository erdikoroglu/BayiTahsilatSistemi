<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    use HasFactory;

    protected $table = "process";

    protected $fillable = [
        'users_id',
        'name',
        'surname',
        'email',
        'phone',
        'company_name',
        'tax_number',
        'amount',
        'status',
    ];
 }
